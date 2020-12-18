<?php

namespace App\Http\Controllers\Site;

use App\Order;
use App\Address;
use App\Company;
use App\Customer;
use App\Basket\Basket;
use Braintree_Transaction;
use Illuminate\Http\Request;
use App\Events\OrderWasCreated;
use App\Http\Controllers\Controller;
use App\Coupon;

class OrderController extends Controller
{

    /**
    * Instance of Basket.
    *
    * @var Basket
    */
    protected $basket;

    /**
    * Create a new OrderController instance.
    *
    * @param Basket $basket
    */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
    * Return the Order page.
    *
    */
    public function getCheckout()
    {
        $this->basket->refresh();
        if (! $this->basket->subTotal()) {
        	return redirect(route('site.cart.index'));
        }
        return view('site.pages.order.checkout');
    }

    /**
    * Show the order.
    *
    * @param $hash
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
    */
    public function getSummary($hash)
    {
        $order = Order::with('address', 'products')->where('hash', $hash)->first();
        if(! $order) {
            // notify order not found
            return redirect(route('site.index'));
        }
        return view('site.pages.order.summary', compact('order'));
    }
    /**
    * Create the order.
    *
    * @param CartFormRequest $request
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */
    public function postCreate(Request $request)
    {
        $v = validator($request->all(), [
            'name' => 'required|min:3',
            'phone' => 'required|phone',
            'address1' => 'required|min:3',
            'address2' => 'min:3',
            'lat' => 'numeric|required',
            'lng' => 'numeric|required',
            'loc' => 'min:3|required',
            'country_id' => 'required|integer|exists:countries,id',
            'state_id' => 'required|integer|exists:states,id',
            'company_id' => 'required|integer|exists:companies,id',
            'postal_code' => 'required',
        ],[],[
            'name' => 'الاسم الشخصي',
            'phone' => 'رقم الجوال',
            'address1' => 'العنوان الاول',
            'address2' => 'العنوان الثاني',
            'lat' => 'خط الطول',
            'lng' => 'خط العرض',
            'loc' => 'عنوان الخريطة',
            'country_id' => 'الدولة',
            'state_id' => 'المدينة',
            'company_id' => 'شركة الشحن',
            'postal_code' => 'الرقم البريدي',
        ]);

        if($v->fails()){
            return back()->withErrors($v);
        }

        $this->basket->refresh();

        if (! $this->basket->subTotal()) {
            return redirect(route('site.cart.index'));
        }

        if (! $request->input('payment_method_nonce')) {
            return redirect(route('site.order.checkout'))->withWaring('هناك خطأ في اتمام عملية الدفع.');
        }

        $hash = bin2hex(random_bytes(32));
        $member = auth()->guard('site')->user();

        $address = Address::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'lat' => $request->input('lat'),
            'lng' => $request->input('lng'),
            'loc' => $request->input('loc'),
            'country_id' => $request->input('country_id'),
            'state_id' => $request->input('state_id'),
            'company_id' => $request->input('company_id'),
            'postal_code' => $request->input('postal_code'),
        ]);

        $company = Company::find($request->company_id);
        $subtotal = $this->basket->subTotal();
        $total = $subtotal + ($company? $company->shipping : 0);

        $order = $member->orders()->create([
            'hash' => $hash,
            'status' => 'pending',
            'code' => num_random(5),
            'address_id' => $address->id,
            'driver_id' => -1,
            // 'currency_id' => currency('id'),
            'subtotal' => $subtotal,
            'total' => $total,
        ]);

        $items = $this->basket->all();

        $order->products()->saveMany(
            $items,
            $this->getPivot($items)
        );

        $result = Braintree_Transaction::sale([
            'amount' => $total,
            'paymentMethodNonce' => $request->input('payment_method_nonce'),
            'options' => [
                'submitForSettlement' => true,
            ]
        ]);

        event(new OrderWasCreated($order, $this->basket));

        if (! $result->success) {
            // TODO: Find a way to attach listeners manually to the OrderWasCreated event.
            $order->payment()->create([
                'failed' => true,
                'transaction_id' => '',
            ]);
            return redirect(route('site.order.checkout'))->withError('هناك خطأ ما في اتمام عملية الدفع من فضلك حاول مجددا.');

        } else {

            $order->payment()->create([
                'failed' => false,
                'transaction_id' => $result->transaction->id,
            ]);
            $this->basket->clear();

            return redirect(route('site.order.summary', $order->hash))->withSuccess('<strong>عملية دفع ناجحة</strong> شكراً من اجل اهتمامك البالغ بمنتجاتنا و نرجوا ان نقدم لك اعلي جودة من الخدمة. سوف يتم اشعارك بالبريد الالكتروني بمجرد التصديق من قبل الادارة بالموافقة علي طلبك و كذلك المدة المتوقع التوصيل فيها .');
        }
    }

    /**
   * Get the quantity from each item inside the basket.
   *
   * @param  Array $items
   * @return Array
   */
   protected function getPivot($items)
   {
       $pivots = [];
       foreach ($items as $item) {
           $pivots[] = [
               'total' => $item->getTotal(),
               'purchasing_price' => $item->purchasing_price,
               'price' => $item->price,
               'quantity' => $item->quantity,
               'coupon' => $this->applyCoupon($item->coupon),
           ];

           $item->stock -= $item->quantity;
           $item->sold += $item->quantity;
           $item->save();
       }
       return $pivots;
   }

   protected function applyCoupon($id)
   {
       $coupon = Coupon::find($id);

       if (!$coupon) {
           return null;
       }

       if (!$this->basket->checkCoupon($coupon)) {
           return null;
       }

       $coupon->members()->attach(auth()->guard('site')->id());

       return $id;
   }


}
