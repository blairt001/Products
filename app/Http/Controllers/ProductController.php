<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

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
    $product = new Products;
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->quantity = $request->input('quantity');
    $product->category = $request->input('category');
    // save to db
    $product->save();
    //redirect after save
    return redirect('products')->with('success','Product details submitted successfully');
    }
   
   public function edit(){
   	  $products = Products::find($id);
      return view('products.edit',compact('products','id'));
 
   }

   public function delete(){


   }

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'description' => 'description',
          'price' => 'required|numeric',
          'quantity' => 'quantity',
          'category' => 'category'
        ]);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->category = $request->get('category');
        $product->save();
        return redirect('products.edit')->with('success','Product has been updated');
    }

   public function products(){
   	// fetch all contacts from the database
     $products = Products::all();
     return view('allproducts.allproduct')->with('products',$products);
   }
}