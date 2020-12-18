<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Http\Requests;
use App\Basket\Basket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\QuantityExceededException;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    /**
     * Instance of Basket.
     *
     * @var Basket
     */
    protected $basket;
    protected $id;

    /**
     * Create a new CartController instance.
     *
     * @param Basket $basket
     * @param Product $product
     */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;

    }

    /**
     * Show all items in the Basket.
     *
     */

    public function getIndex()
    {
        $basket = $this -> basket ;
        return view('front.cart.index',compact('basket'));
    }

    /**
     * Add items to the Basket.
     *
     * @param $slug
     * @param $quantity
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdd(Request $request)
    {
         $slug =$request -> product_slug ;
         $product = Product::where('slug', $slug)->firstOrFail();

        try {
            $this->basket->add($product, $request->quantity ?? 1);
        } catch (QuantityExceededException $e) {
            return 'Quantity Exceeded';  // must be trans as the site is multi languages
        }

        return 'Product added successfully to the card ';
    }

    /**
     * Update the Basket item with given slug.
     *
     * @param         $slug
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \App\Exceptions\QuantityExceededException
     */
    public function postUpdate($slug, Request $request)
    {
        $_product = Product::where('slug', $slug)->firstOrFail();

        try {
            $this->basket->update($_product, $request->quantity);
        } catch (QuantityExceededException $e) {
            return trans('site.cart.msgs.exceeded');
        }

        if (!$request->quantity) {
            return array_merge([
                'total' => num_format($this->basket->subTotal()) . " (" . money('symbol') . ")"
            ], trans('site.cart.msgs.removed'));
        }

        return trans('site.cart.msgs.updated');
    }

    public function postUpdateAll(Request $r)
    {
        if (!$r->has('quantities') || !$this->basket->itemCount()) {
            return trans('site.cart.msgs.empty');
        }

        foreach ($this->basket->all() as $index => $item) {
            try {
                $this->basket->update($item, $r->quantities[$index]);
            } catch (QuantityExceededException $e) {
                return trans('site.cart.msgs.exceeded');
            }
        }

        return trans('site.cart.msgs.updated');
    }


    // function to return shipping details view
    public function get_shipping_details()
    {
        // if(!auth('site')->user()){
        //     return redirect()->route('site.auth.index');
        // }
        $shipping_methods = $this->get_shipping_methods();
        $companies = $this->get_shipping_companies();

        $data = [
            "companies" => $companies,
            "shipping_methods" => $shipping_methods
        ];
        return view("site.pages.cart.shippingdetails", $data);
    }

    // function to get payment view
    public function get_payment_details()
    {
        $payment_methods = $this->get_payment_methods();
        $data = [
            "payment_methods" => $payment_methods
        ];
        return view("site.pages.cart.paymentdetails", $data);
    }

    // function to get shipping companies
    public function get_shipping_companies()
    {
        return \App\Company::all();
    }

    // function to get shipping method
    public function get_shipping_methods()
    {
        $methods = DB::table("shipping_methods")
            ->get();
        return $methods;
    }

    //function to get payment methods
    public function get_payment_methods()
    {
        $methods = DB::table("payment_methods")
            ->get();
        return $methods;
    }

    // checkout function
    public function checkout()
    {
        if (!auth('site')->user()) {
            return redirect()->route('site.auth.index');
        }
        return view("site.pages.cart.checkout");
    }

    public function make_order(Request $r)
    {

        if ($this->make_order_final_request()) {
            $r->session()->flash('success', trans('site.cart.msgs.order_success'));
        } else {
            $r->session()->flash('error', trans('site.cart.msgs.order_error'));
        }
        return redirect()->route("site.orders")->withInput();
    }

    public function makepayment()
    {
        $responseData = $this->request($this->basket->subTotal());
        $responseData = json_decode($responseData)->id;
        $this->id = $responseData;
        $data = [
            "responseData" => $responseData
        ];

        return view("site.pages.cart.makepayment", $data);
    }

    public function checkstatus()
    {


        $url = "https://test.oppwa.com/v1/checkouts/" . $_GET['id'] . "/payment";
        $url .= "?authentication.userId=8a829418605b2fd10160736fb77d3aa6";
        $url .= "&authentication.password=wMTP8GZaQz";
        $url .= "&authentication.entityId=8a829418605b2fd10160736fe8eb3aaa";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $r = json_decode($responseData);
        if ($r->result->description == "Request successfully processed in 'Merchant in Connector Test Mode'") {
            // make order
            if ($this->make_order_final_request()) {
                Session::flash('success', trans('site.cart.msgs.order_success'));
            } else {
                Session::flash('error', trans('site.cart.msgs.order_error'));
            }
            return redirect()->route("site.orders")->withInput();
        } else {
            // Error in payment
            Session::flash('error', trans('site.cart.msgs.order_error'));
            return redirect()->route("site.orders")->withInput();
        }
    }

    public function make_order_final_request()
    {

        $address = Session::get('shipping-address');
        $shipping_method_id = Session::get('shipping-method');
        $pilling_method_id = Session::get('pilling-method');
        $user_id = auth('site')->id();
        $latLng = Session::get('shipping-latLng');

        $shipping_method_name = DB::table('shipping_methods')
            ->where("id", $shipping_method_id)
            ->select("method_en")
            ->first()->method_en;

        $pilling_method_name = DB::table('payment_methods')
            ->where("id", $pilling_method_id)
            ->select("method_en")
            ->first()->method_en;
        $address_insert_arr = [
            "name" => auth('site')->user()->name,
            "notes" => Session::get('shipping-address-details'),
            "shipping_id" => $shipping_method_id,
            "shipping_name" => $shipping_method_name,
            "phone" => auth('site')->user()->phone,
            "address" => $address,
            "country" => auth('site')->user()->country,
            "zip" => auth('site')->user()->zip,
            "city" => auth('site')->user()->city,
            'latLng' => $latLng,
            'lat' => "",
            'lng' => "",
            'loc' => ""
        ];
        $address_insert = json_encode($address_insert_arr);

        if (Session::get('currency') != null || Session::get('currency') != "") {
            $currency = Session::get('currency');
        } else {
            $currency = 0;
        }
        $pilling_insert_arr = [
            "payment_id" => $pilling_method_id,
            "type" => $pilling_method_name,
            "payment_currency_id" => $currency,
            "details" => ""
        ];


        $pilling_insert = json_encode($pilling_insert_arr);

        $order_id = DB::table("orders")
            ->insertGetId([
                "address" => $address_insert,
                "payment" => $pilling_insert,
                "member_id" => $user_id,
                "code" => rand(10000, 99999),
                "status" => "pending",
                "hash" => "",
                "shipping" => $pilling_method_id,
                "subtotal" => $this->basket->subTotal()
            ]);
        $subtotal = 0;

        foreach ($this->basket->all() as $item) {
            DB::table("order_product")->insert([
                "product_id" => $item->id,
                "order_id" => $order_id,
                "total" => $item->getTotal(),
                "coupon" => $item->getCoupon(),
                "purchasing_price" => Product::find($item->id)->purchasing_price,
                "quantity" => $item->quantity
            ]);
        }
        return true;

    }

    public static function request($amount)
    {
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "authentication.userId=8a829418605b2fd10160736fb77d3aa6" .
            "&authentication.password=wMTP8GZaQz" .
            "&authentication.entityId=8a829418605b2fd10160736fe8eb3aaa" .
            "&amount=" . $amount .
            "&currency=SAR" .
            "&paymentType=DB" .
            "&testMode=EXTERNAL" .
            "&merchantTransactionId=" . auth('site')->id();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return $responseData;
    }


}
