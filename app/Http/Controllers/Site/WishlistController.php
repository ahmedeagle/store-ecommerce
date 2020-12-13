<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;

class WishlistController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products =  auth()->user()
            ->wishlist()
            ->latest()
            ->get();   // task for you basically we need to use pagination here
        return view('front.wishlists', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {

        if (! auth()->user()->wishlistHas(request('productId'))) {
            auth()->user()->wishlist()->attach(request('productId'));
            return response() -> json(['status' => true , 'wished' => true]);
        }
        return response() -> json(['status' => true , 'wished' => false]);  // added before we can use enumeration here
    }

    /**
     * Destroy resources by the given id.
     *
     * @param string $productId
     * @return void
     */
    public function destroy()
    {
        auth()->user()->wishlist()->detach(request('product_id'));
    }
}
