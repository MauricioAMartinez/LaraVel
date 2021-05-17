@extends('layouts.default')
@section('content')
<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="shop-w-master">
                        <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                            <span>FILTERS</span></h1>
                        <div class="shop-w-master__sidebar sidebar--bg-snow">
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">CATEGORY</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-category">
                                        <ul class="shop-w__category-list gl-scroll">
                                        @foreach ($categories as $category)
                                            <li class="has-list">

                                                <a href=" {{route('products.loadmorefilter',[$category->id])}} ">{{ $category->name }}</a>

                                               

                                               
                                            </li>
                                        @endforeach
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">RATING</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-rating" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-rating">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                                </div>

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(8)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(10)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(12)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>& Up</span></div>
                                                </div>

                                                <span class="shop-w__total-text">(1)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">PRICE</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-price">
                                        <form class="shop-w__form-p">
                                            <div class="shop-w__form-p-wrap">
                                                <div>

                                                    <label for="price-min"></label>

                                                    <input class="input-text input-text--primary-style" type="text" id="price-min" placeholder="Min"></div>
                                                <div>

                                                    <label for="price-max"></label>

                                                    <input class="input-text input-text--primary-style" type="text" id="price-max" placeholder="Max"></div>
                                                <div>

                                                    <button class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2" type="submit"></button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="shop-p">
                        <div class="shop-p__toolbar u-s-m-b-30">
                            <div class="shop-p__meta-wrap u-s-m-b-60">

                                <span class="shop-p__meta-text-1">FOUND {{count($products)}} RESULTS</span>
                                <div class="shop-p__meta-text-2">

                                    <span>Related Searches:</span>

                                    <a class="gl-tag btn--e-brand-shadow" href="#"  > All </a>

                            
                            </div>
                            <div class="shop-p__tool-style">
                                <div class="tool-style__group u-s-m-b-8">

                                    <span class="js-shop-grid-target is-active">Grid</span>

                                    <span class="js-shop-list-target">List</span></div>
                            
                            </div>
                        </div>
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                              @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-m">
                                        <div class="product-m__thumb">
                                         
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{  route ('products.show', ['product' => $product->id] )   }}">
                                         @php
                                             if ($product->images[0]->url==false)
                                               $data='images/product/'.$product->images[0]->img;
                                               else{
                                                $data= $product->images[0]->url;
                                               }
                                         @endphp
                                               
                                                <img class="aspect__img" src="{{$data}}" alt=""></a>
                                            <div class="product-m__quick-look">

                                                <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                            <div class="product-m__add-cart">

                                                <a href="{{ route('cart.addOneTwo', ['product' => $product->id]) }}" class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                        </div>
                                        <div class="product-m__content">
                                       
                                            <div class="product-m__name">
                                              
                                                <a href="{{  route ('products.show', ['product' => $product->id] )   }}">{{ $product->name }}</a></div>
                                            <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                <span class="product-m__review">()</span></div>
                                            <div class="product-m__price">${{ number_format( $product->price)}}
                                                <span class="product-o__discount">${{($product->price*$product->discount/100)+$product->price}}</span></span></div>
                                            <div class="product-m__hover">
                                                <div class="product-m__preview-description">

                                                    <span>{{ $product->description }}</span></div>
                                                <div class="product-m__wishlist">

                                                    <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                             @endforeach
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->
</div>
<!--====== End - App Content ======-->
@endsection