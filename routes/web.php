<?php


use Illuminate\Support\Facades\Route;

Route::get('/', ['uses'=>'HomepageController@showProducts', 'as'=>'home']);

Route::get('/contact', ['uses'=>'ContactController@showContact', 'as'=>'contact']);

Route::post('contact/insert','ContactController@postFeedback');

Route::get('/gifts', ['uses'=>'GiftsController@giftsProducts', 'as'=>'gifts']);

Route::get('/flowersinboxes', ['uses'=>'FlowersinboxController@show1Products', 'as'=>'flowersinboxes']);

// Route::get('/faqs', ['uses'=>'GiftsController@faqsProducts', 'as'=>'faqs'];

Route::get('/{id}', ['uses'=>'ProductdetalistController@viewProject','as'=>'productdetail']);

Route::get('insert','StudInsertController@insertform');

Route::post('create','StudInsertController@insert');


Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});






Route::get('/products', function () {
    return view('products');
});


Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});
Route::get('/contact', function () {
    return view('contact');
});





Route::get('/bouquets', function () {
    return view('bouquets');
});
Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});




Route::get('/create1', function () {
    return view('stud_create');
});


