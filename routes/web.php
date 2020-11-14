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



Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/register', 'UserController@index')->name('user.register');
Route::post('/register', 'UserController@store');
	

Route::group(['middleware'=>['sess']], function(){

	Route::get('/admin', 'HomeController@index')->name('home.index');
		
	Route::get('/customer', 'HomeController@index')->name('customer.home');
	Route::get('/user/userlist', 'UserController@list')->name('user.list');
	Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
	Route::get('/user/product', 'ProductController@index')->name('user.product');

	Route::get('/product/ram', 'ProductController@ram')->name('user.ram');
	Route::get('/product/casing', 'ProductController@casing')->name('user.casing');
	Route::get('/product/graphics', 'ProductController@graphics')->name('user.graphics');
	Route::get('/product/monitor', 'ProductController@monitor')->name('user.monitor');
	Route::get('/product/parmanent', 'ProductController@parmanent')->name('user.parmanent');
	Route::get('/product/portable', 'ProductController@portable')->name('user.portable');
	Route::get('/product/storage', 'ProductController@storage')->name('user.storage');

	Route::get('/user/review/{id}', 'ReviewController@index')->name('user.review');
	Route::post('/user/review/{id}', 'ReviewController@store');
	Route::get('/review/list', 'ReviewController@reviewlist')->name('review.reviewlist');
	Route::get('/review/delete/{id}', 'ReviewController@delete')->name('review.delete');

	Route::get('/user/cart/{id}', 'CartController@index')->name('user.cart');
	Route::post('/user/cart/{id}', 'CartController@store');

	// Route::get('/product/search', 'ProductController@search')->name('product.search');
	// Route::post('/product/search', 'ProductController@searchlist');
	
});









