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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'

]);

Route::get('/category', [
'uses' => 'CategoryController@getData',

]);


Route::get('/cart/add/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shoppingcart', [
    'uses' => 'ShoppingCartController@getCart',
    
]);

Route::get('/delete/{id}','ShoppingCartController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
