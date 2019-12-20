<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/productdetail', function () {
    return view('productdetail');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});
Route::get('/gifts', function () {
    return view('gifts');
});
Route::get('/boxes', function () {
    return view('boxes');
});
Route::get('/bouquets', function () {
    return view('bouquets');
});
Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});
Route::get('/flowersinboxes', function () {
    return view('flowersinboxes');
});

