@extends('backend.master')

@section("main-content")

                <h1 class="mt-4">Add Product</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{Route('admin.dashboard')}}">Dashboard</a></li>
                </ol>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <form action="{{Route('productAdd')}}" method="POST" class="shadow p-4 rounded">
                            @csrf 
                            {{-- Cross site register forgery --}}
                            <div class="form-group mb-3">
                                <label for="p_name">Product Name</label>
                                <input type="text" name="p_name" id="p_name" class="form-control" placeholder="Enter product name">
                            </div>

                            <div class="form-group mb-3">
                                <label for="p_qty">Product Quantity</label>
                                <input type="text" name="p_qty" id="p_qty" class="form-control" placeholder="Enter product Quantity">
                            </div>

                            <div class="form-group mb-3">
                                <label for="p_price">Product price</label>
                                <input type="text" name="p_price" id="p_price" class="form-control" placeholder="Enter product price">
                            </div>

                            <div class="form-group mb-3">
                                <input type="submit" name="add_product"  class="form-control btn btn-primary w-100" value="Add product">
                            </div>

                        </form>

                    </div>
                
                </div>

 @endsection