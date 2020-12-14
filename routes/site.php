<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


    Route::group(['namespace' => 'Site'/*, 'middleware' => 'guest'*/], function () {
        //guest  user
        route::get('/', 'HomeController@home')->name('home')->middleware('VerifiedUser');
        route::get('category/{slug}', 'CategoryController@productsBySlug')->name('category');
        route::get('product/{slug}', 'ProductController@productsBySlug')->name('product.details');

    });


    Route::group(['namespace' => 'Site', 'middleware' => ['auth', 'VerifiedUser']], function () {
        // must be authenticated user and verified
        Route::get('profile', function () {
            return 'You Are Authenticated ';
        });
    });

    Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {
        // must be authenticated user
        Route::post('verify-user/', 'VerificationCodeController@verify')->name('verify-user');
        Route::get('verify', 'VerificationCodeController@getVerifyPage')->name('get.verification.form');
        Route::get('products/{productId}/reviews', 'ProductReviewController@index')->name('products.reviews.index');
        Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');

    });

});

Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {
    Route::post('wishlist', 'WishlistController@store')->name('wishlist.store');
    Route::delete('wishlist', 'WishlistController@destroy')->name('wishlist.destroy');
    Route::get('wishlist/products', 'WishlistController@index')->name('wishlist.products.index');
});
