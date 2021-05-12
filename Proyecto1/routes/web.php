<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('products', ProductController::class);
Route::resource('cart', CartController::class);
Route::get('cart/addOne/{product}', [CartController::class, 'addOne'])->name('cart.addOne');
Route::get('cart/destroy/{id}', [CartController::class,'destroy'])->name('cart.destroy');
Route::get('products/{loadmore}', [CartController::class, 'loadmore'])->name('products.loadmore');
/*Route::get('loadmore', function () {
    $categories = Category::all(); 
    $products = Product::all();
    return view('components/products.loadmore',compact('products','categories'));
});*/