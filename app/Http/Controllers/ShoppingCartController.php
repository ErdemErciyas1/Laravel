<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\Product;
use Illuminate\Http\Request;

use DB;
use Session;

class ShoppingCartController extends Controller
{
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shoppingcart');
        }
        $oldShoppingCart = Session::get('cart');
        $cart = new ShoppingCart($oldShoppingCart);
        return view('shoppingcart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
