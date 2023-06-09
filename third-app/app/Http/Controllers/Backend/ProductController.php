<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product ->product_name = $request->p_name;
        $product ->current_price = $request->c_price;
        $product ->prev_price = $request->p_price;

       if($image = $request->file('p_image')){
            $customImageName = uniqid().'.'.$image->getClientOriginalExtension(); //time().'-'.uniqid().'.'.$image->getClientOriginalExtension()

            $image->move('uploads/product/', $customImageName);   
       }

       $product ->product_image = $customImageName;
       $product->save();
       return redirect()->route('product.manage');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = Product::all();

        return view('backend.product.manage', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    // Active to inactive status and inactive to active
    public function atoi($id){
        $product = Product::find($id);

        if($product->status==1){
            $product->status=0;
        }else{
            $product->status=1;
        }

        $product->update();
        return back();

    }


}
