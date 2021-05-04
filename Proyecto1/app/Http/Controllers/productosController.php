<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function __invoke()
    {
        $products = Product::where('available',true)->get();
        return view('productos',compact('products'));
    }
}
