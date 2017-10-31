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

/*Route::get('/', function () {
    return view('welcome');
}); */


//Route::get('home','HomeController@index');

Route::get('/','FrontController@index')->name('home');
Route::get('/shirts','FrontController@shirts')->name('shirts');
Route::get('/shirt','FrontController@shirt')->name('shirt'); 

Route::get('/logout','Auth\LoginController@logout');

Auth::routes();


Route::get('/home', 'HomeController@index');
Route::resource('/cart','CartController');
// Route::get('/cart/add-item/{$id}','CartController@addItem')->name('cart.addItem');

Route::group(['prefix' => 'admin','middleware'=>['auth','admin']],function(){
	Route::get('/', function () {
    return view('admin.index');

	})->name('admin.index');

	Route::resource('product','ProductController');
	Route::resource('category','CategoryController');




}); 

Route::resource('address','AddressController');
Route::get('checkout','CheckoutController@step1');
Route::get('shippinginfo','CheckoutController@shipping')->name('checkout.shipping');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');