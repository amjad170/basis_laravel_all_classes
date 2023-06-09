<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\FrontendController;
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
// Frontend route
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/single', [FrontendController::class, 'single'])->name('single');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');

// Route::get('/', function () {
//     return view('frontend.index');
// });

// Admin Logout
Route::get('/adminlogout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/users', [AdminController::class, 'users'])->name('users');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
