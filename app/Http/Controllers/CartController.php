<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Cart;
use App\Product;
use DB;
use Session;


class CartController extends Controller {

    public function index()
    {
        return view('shoppingcart', ['cart' => session('cart'), 'product' => product::all()]);
    }

    public function store(Product $product)
    { 
        return Cart::add($product);
    }


}
    