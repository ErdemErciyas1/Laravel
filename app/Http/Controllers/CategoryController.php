<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function getData()
    {
        $categories = Category::all();
        return view('/category', ['categories' => $categories]);
    }
}




