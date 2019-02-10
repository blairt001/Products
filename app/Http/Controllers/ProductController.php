<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // create product
    public function create(){
    	return view('products.product');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'description' => 'required',
    		'price' => 'required|numeric',
    		'quantity' => 'required',
    		'category' => 'required',
    	]);
    // create a contact
    $product = new Product;
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->quantity = $request->input('quantity');
    $product->category = $request->input('category');
    // save to db
    $product->save();
    //redirect after save
    return redirect('/')->with('success','Product details submitted successfully');
    }
   
   public function products(){
   	// fetch all contacts from the database
     $products = Product::all();
     return view('allproducts')->with('allproducts',$products);
   }
}
