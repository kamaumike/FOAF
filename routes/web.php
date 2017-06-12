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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/shop', 'ProductController@index');
Route::get('/shop/{item}', 'ProductController@show');

Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@store');
Route::patch('/cart/{id}', 'CartController@update');
Route::delete('/cart/{id}', 'CartController@destroy');
Route::delete('/emptyCart', 'CartController@emptyCart');
Route::post('/moveToWishlist/{id}', 'CartController@moveToWishlist');

Route::get('/wishlist', 'WishlistController@index');
Route::post('/wishlist', 'WishlistController@store');
Route::delete('/wishlist/{id}', 'WishlistController@destroy');

Route::get('/contact', 'ContactUsController@create');
Route::post('/contact', 'ContactUsController@store');
