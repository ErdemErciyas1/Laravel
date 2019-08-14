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
Route::get('/home', 'HomeController@index')->name('home');




Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'

]);

Route::get('/category', [
'uses' => 'CategoryController@getData',

]);






Route::get('/shoppingcart','CartController@index')->name('cart');

Route::get('/shoppingcart/{product}', 'CartController@store')->name('cart.store');

Route::post('/shoppingcart/{product}', 'CartController@update')->name('cart.update');

Route::delete('/shoppingcart/{product}', 'CartController@delete')->name('cart.delete');











Auth::routes();




