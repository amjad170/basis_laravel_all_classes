<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;   // this is from product Model

class ProductsController extends Controller
{
    public function addproduct(){
        return view('backend.add-product');
    }

    //product add
    public function productAdd(Request $data){
      $product = new Product(); //this is object of Product class from product model
      $product->product_name = $data->p_name;	
      $product->p_qty = $data->p_qty;	
      $product->p_price = $data->p_price;	
      $product->save();
      return back();
    }

    // Manage Product(show product)
    public function manageP(){

      $products =  Product::all();
      
     return view('backend.manage-product', compact('products'));
    }

    //Delete product
    public function destroy($id){
     $product = Product::find($id);
     $product->delete();
     return back()->with("message", "Product Deleted successfully!");
    }

    //Edit product
    public function edit($id){
     $product = Product::find($id);
     return view('backend.edit-product',compact('product'));
    }

    //Update product
    public function update(Request $resquest,$id){
     $product = Product::find($id);
     $product->product_name = $resquest->p_name;
     $product->p_qty = $resquest->p_qty;
     $product->p_price = $resquest->p_price;
     $product->update();
     return redirect()->route('manageProduct')->with("message", "Product Updated successfully!");
    }





}
