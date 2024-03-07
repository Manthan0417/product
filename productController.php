<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;

class productController extends Controller
{
    public function index(){
    	// $products = product::get();
    	return view('products.index',[
    		'product'=>product::get()]);
    }

    public function create(){
    	return view('products.create');
    }

    public function store(Request $request){

    	$request->validate([
    		'name' => 'required',
    		'description' => 'required',
    		'image' => 'required|mimes:jpg,png,gif,avif|max:10000'
    	]);

    	$imagename = time().'.'.$request->image->extension();
    	$request->image->move(public_path('products'),$imagename);

    	$product = new product;
    	$product->image = $imagename;
    	$product->name = $request->name;
    	$product->description = $request->description;

    	$product->save();

    	return back()->withSuccess('Product created successfully !!!!');

    }

    public function edit($id){
    	$product = Product::where('id',$id)->first();
    	return view('products.edit',['product' =>$product]);
    }
    public function update(Request $request,$id){
    	$request->validate([
    		'name' => 'required',
    		'description' => 'required',
    		'image' => 'nullable|mimes:jpg,png,gif,avif|max:10000'
    	]);

    	$product = product::where('id',$id)->first();


    	if(isset($request->image)){

    	$imagename = time().'.'.$request->image->extension();
    	$request->image->move(public_path('products'),$imagename);
    	$product->image = $imagename;
    	}

    	$product->name = $request->name;
    	$product->description = $request->description;

    	$product->save();

    	return back()->withSuccess('Product updated successfully !!!!');

    }

    public function destroy($id){
    	$product = Product::where('id',$id)->first();
    	$product->delete();
    	return back()->withSuccess('Product deleted successfully !!!!');


    }
    public function show($id){
    	$product = Product::where('id',$id)->first();
    	
    	return view('product.show',['product' =>$product]);
    	

    }
    
}
