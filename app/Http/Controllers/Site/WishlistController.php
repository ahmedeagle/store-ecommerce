<?php

namespace App\Http\Controllers\Site;

class WishlistController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return auth()->user()
            ->wishlist()
            ->latest()
            ->paginate(20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        if (! auth()->user()->wishlistHas(request('productId'))) {
            auth()->user()->wishlist()->attach(request('productId'));
        }
    }

    /**
     * Destroy resources by the given id.
     *
     * @param string $productId
     * @return void
     */
    public function destroy($productId)
    {
        auth()->user()->wishlist()->detach($productId);
    }
}
