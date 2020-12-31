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


Route::get('/','HomeController@index')->name('home');
Route::get('/services','ServiceController@index')->name('service.index');
Route::get('/services/{slug}','ServiceController@show')->name('service.show');
//Route::get('/service/{slug}','ServiceController@show')->name('service.show');
Route::get('/service/order/{slug}', 'ServiceController@order')->name('service.order');
Route::post('/service/order', 'ServiceController@post_order')->name('service.order.post');
Route::get('/about-us','AboutController@index')->name('about.index');
Route::get('/contact-us','ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/cars', 'CarsController@index')->name('cars.index');
Route::get('/cars/{slug}', 'CarsController@show')->name('cars.show');

Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/{slug}', 'NewsController@show')->name('news.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cars/{cars}/add-to-cart', 'CartController@add_to_cart')->name('cars.add-to.cart');
Route::delete('/cars/remove-to-cart', 'CartController@remove_to_cart')->name('cars.remove-to.cart');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout/store', 'CheckoutController@store')->name('checkout.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

