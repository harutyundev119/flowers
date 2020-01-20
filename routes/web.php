<?php


use Illuminate\Support\Facades\Route;

Route::get('/', ['uses'=>'HomepageController@showProducts', 'as'=>'home']/*function () {
    return view('index');
}*/);

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', ['uses'=>'ContactController@showContact', 'as'=>'contac']);
Route::post('/contact', ['uses'=>'ContactController@postFeedback', 'as'=>'contact']);
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
Route::get('/flowersinboxes', ['uses'=>'FlowersinboxController@show1Products', 'as'=>'flowersinboxes']);


