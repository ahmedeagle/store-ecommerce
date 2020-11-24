<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function productsBySlug($slug)
    {
        $data = [];
        $data['category'] = Category::where('slug', $slug)->first();
        if ($data['category'])
            $data['products'] = $data['category']->products;

        return  view('front.products',$data);

    }

}
