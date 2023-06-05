<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendContrller;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//for frontend //groupe route
Route::controller(FrontendContrller::class)->group(function(){
    Route::get('/','index')->name('fhome');
    Route::get('/about','about')->name('fabout');
    Route::get('/contact','contact')->name('fcontact');
    Route::get('/menu','menu')->name('fmenu');
    Route::get('/news','news')->name('fnews');
    Route::get('/news_details','news_details')->name('fnews_details');

});


//for Backend
Route::get('/dashboard',[BackendController::class,'dashboard'])->name('admin.dashboard');

//for product //group route
Route::controller(ProductsController::class)->group(function(){
    Route::get('/add-product','addproduct')->name('product.add');
    Route::post('/productAdd','productAdd')->name('productAdd');
    Route::get('/manage-product','manageP')->name('manageProduct');

});

