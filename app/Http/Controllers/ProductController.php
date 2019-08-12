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

    

   
}
