@extends('layouts.default')
@section('content')

  <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">TOP GEEK</h1>

                                    <span class="section__span u-c-silver">GEEK CATEGORY</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="filter-category-container">
                                <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">ALL</button>
                                        
                                        </div>
                                  @foreach ($categories as $category)
                                      <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter=".{{ strtoupper( $category->name )}}">{{ strtoupper( $category->name )}}</button>
                                        
                                        </div>
                                @endforeach
                                  
                                    
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30">
                                    <div class="row">
                                    @foreach ($products as $product)
                                          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item 
                                            @foreach ($product->categories as $category)
                                                        {{ strtoupper( $category->name ) }}
                                            @endforeach
                               
                                          ">
                                            <div class="product-o product-o--hover-on product-o--radius">
                                                <div class="product-o__wrap">
                                                    
                                                    @php
                                             if ($product->images[0]->url==false)
                                               $data='images/product/'.$product->images[0]->img;
                                               else{
                                                $data= $product->images[0]->url;
                                               }
                                         @endphp
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="{{$data}}" alt=""></a>
                                                    <div class="product-o__action-wrap">
                                                        <ul class="product-o__action-list">
                                                           
                                                            <li>

                                                                <a href="{{ route('cart.addOne', ['product' => $product->id]) }}" data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                                
                                                            
                                                        </ul>
                                                    </div>
                                                </div>

                                                <span class="product-o__category">
                                                    @foreach ($product->categories as $category)
                                                         <a href="shop-side-version-2.html">{{ strtoupper( $category->name ) }}</a> 
                                                    @endforeach
                            
                                                </span>

                                                <span class="product-o__name">

                                                    <a href="{{  route ('products.show', ['product' => $product->id] )   }}">{{ $product->name }}</a></span>
                                                <div class="product-o__rating gl-rating-style">
                                                    <i class="fas fa-star"></i>
                                                    @foreach ($reviews as $review)
                                                    @endforeach
                                                    <span class="product-o__review">
                                                        @if ($review->product_id = $product->id)
                                                         
                                                        @endif
                                                          </span></div>

                                                <span class="product-o__price">${{ number_format( $product->price)}}

                                                    <span class="product-o__discount">${{($product->price*$product->discount/100)+$product->price}}</span></span>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="load-more">

                                    <button class="btn btn--e-brand" type="button" ><a href="{{route('products.loadmore')}}"> LOADMORE </a></button></div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
@endsection