<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function getIndex()
    {
     $products = Product::all();
     return view('index', ['products' => $products]);
    }

    public function getCartInfo(Request $request, $id)
    {
        $product = Product::find($id);
    }
}
