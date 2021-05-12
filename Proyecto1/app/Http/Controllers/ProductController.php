<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\ProductHasCategory;
use App\Models\Review;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::paginate(4);
        $categories = Category::all();
        $reviews = Review::all();
        return view('components/products.index',compact('products','categories','reviews'));
        
    }
 
    public function loadmore (){
        $categories = Category::all(); 
        $products = Product::all();
        return view('components/products.loadmore',compact('products','categories'));
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('components/products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataProductoForm = $request->validate([

            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
            'price' => ['numeric','required'],
            'stock' => ['numeric','required'],
            'discount' => ['numeric','required'],
            'categories' => ['required'],
            'images' =>['string','required'],
            'available' => ['nullable'],
            'urlvideo' => ['required'],
        ]);

        $newProduct = new Product();
        $newProduct->name = $dataProductoForm['name'];
        $newProduct->description = $dataProductoForm['description'];
        $newProduct->price = $dataProductoForm['price'];
        $newProduct->stock = $dataProductoForm['stock'];
        $newProduct->discount = $dataProductoForm['discount'];
        $newProduct->urlvideo = $dataProductoForm['urlvideo'];
        isset($dataProductoForm['available']) ? $newProduct->available = true : $newProduct->available = false;
       
        $newProduct->save();

        foreach ($dataProductoForm['categories'] as $category) {
            $newProductCategory = new ProductHasCategory();
            $newProductCategory->product_id = $newProduct['id'];
            $newProductCategory->category_id = $category;
            $newProductCategory->save();
        }

        $newImageProduct = new Image();
        $newImageProduct ->product_id = $newProduct['id'];
        $newImageProduct ->url = $newProduct['images'];
        $newImageProduct->save();

        return redirect()->route('products.index');

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $reviews = Review::where('product_id',$product->id)->get();
        return view('components/products.show',compact('product','reviews'));

       
        
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
    }
}
