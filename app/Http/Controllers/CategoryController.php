<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getData()
    {
        $data['data'] = DB::table('categories')->get();
    
    if(count($data) > 0){
        return view('category', $data);
    }
    else
    {
        return view('category');
    }

    }
}




