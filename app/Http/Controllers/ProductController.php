<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\Product;
use Illuminate\Http\Request;

use DB;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
     $products = Product::all();
     return view('index', ['products' => $products]);
    }

    public function getAddtoCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldShoppingCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new ShoppingCart($oldShoppingCart);
        $cart->add($product, $product->id); 

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('index');
        
       
    }
}
