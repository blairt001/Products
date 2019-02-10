<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // create product
    public function create(){
    	return view('products.product');
    }


}
