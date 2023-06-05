@extends('backend.master')

@section("main-content")
               
                        <h1 class="mt-4">Manage product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{Route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Products
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#Product_ID</th>
                                            <th>Product Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#Product_ID</th>
                                            <th>Product Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @php

                                        $x = 1;

                                        @endphp


                                        @if(count($products)>0)

                                        @foreach($products as $productItem)
                                        
                                        <tr>
                                            <td>{{$x++}}</td>
                                            <td>{{$productItem->product_name}}</td>
                                            <td>{{$productItem->p_qty}}</td>
                                            <td>{{$productItem->p_price}}</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>  
                                            </td>
                                        </tr>

                                        @endforeach

                                        @else
                                            {{'Product not Available'}}

                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                   

 @endsection