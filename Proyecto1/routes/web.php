<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('products', ProductController::class);
Route::resource('cart', CartController::class);
Route::get('cart/addOne/{product}', [CartController::class, 'addOne'])->name('cart.addOne');
Route::get('cart/addOneTwo/{product}', [CartController::class, 'addOneTwo'])->name('cart.addOneTwo');
Route::get('cart/destroy/{id}', [CartController::class,'destroy'])->name('cart.destroy');
Route::get('destroy', [CartController::class,'destroyAll'])->name('cart.destroyAll');
Route::get('loadmore', [ProductController::class,'loadmore'])->name('products.loadmore');
Route::get('loadmore/category/{category}', [ProductController::class,'loadmorefilter'])->name('products.loadmorefilter');