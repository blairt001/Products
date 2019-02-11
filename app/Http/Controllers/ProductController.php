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

    public function about(){
      return view('products.about');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'description' => 'required',
    		'price' => 'required|numeric',
    		'quantity' => 'required|numeric',
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
    return redirect('products/create')->with('success','Product details submitted successfully');
    }

    /**
     * Edit the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

   public function edit($id){
   	  $product = Products::find($id);
      return view('products.edit',compact('product','id'));
 
   }


    /**
     * Delete the specified resource in storage.
     *
     * @param  int $id
     * @return void
     */

   public function delete($id){
    $products = Products::find($id);
    $products->delete();
    return redirect('allproducts')->with('success', 'Product has been deleted successfully');
        
   }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request , $id)
    {
        $product = Products::find($id);
        $this->validate($request, [
          'name' => 'required',
          'description' => 'required',
          'price' => 'required|numeric',
          'quantity' => 'required|numeric',
          'category' => 'required'
        ]);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->category = $request->get('category');
        $product->save();
        return redirect('allproducts')->with('success','Product has been updated');
    }

   
   public function products(){
   	// fetch all contacts from the database
   	 // $products = Products::paginate(3); arrows instead of numbers
     $products = Products::paginate(3);
     return view('allproducts.allproduct')->with('products',$products);
   }
}
