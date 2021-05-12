<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session() -> has('cart') == false ) {
            return redirect() -> route('products.index');    
        }
        else {

            $cartProducts = session() -> get ('cart.products');
            return view('components/cart.index', compact('cartProducts'));
        }
        
    }

    public function addOne(Product $product)
    {   
        $cartProducts = session()->get('cart.products');
        $amount=1;
        $cartProducts->push('cart.products', ['product' => $product, 'amount' => $amount]);
        
        return redirect()->route('cart.index');

        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productSelected = Product::find($request->productId);

        $amount = $request -> amount;

        $cartProducts = session() -> get ('cart.products');

        if($request->session()->has('cart') == false) {
            $request->session()->put('cart', [ 'products' => [] ]);
        }
        /*
        foreach ($cartProducts as $products ) {
            foreach ($products as $product){
               $id = $product->id;
               if($id === $productSelected->id){
                 
               }
               else{
                $request -> session() -> push('cart.products', ['product' => $productSelected, 'amount'=> $amount ] );
                return redirect()->route('cart.index');
               }
            }
        }*/

        $request -> session() -> push('cart.products', ['product' => $productSelected, 'amount'=> $amount ] );
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            dd($id);
        
    }
        
}
