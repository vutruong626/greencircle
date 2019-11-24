@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Sản phẩm <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Shop Area Start -->
<div class="shop-area pt-110 pb-100 bg-gray mb-95">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="ht-product-tab">
                    <div class="ht-tab-content">
                        <div class="nav" role="tablist">
                            <a class="active grid" href="#grid" data-toggle="tab" role="tab" aria-selected="true"
                                aria-controls="grid"><i class="fa fa-th"></i></a>
                            <a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false"
                                aria-controls="list"><i class="fa fa-list"></i></a>
                        </div>
                        <div class="shop-items">
                            <span>Showing 1 to 9 of 11 (2 Pages) </span>
                        </div>
                    </div>
                    <div class="shop-results-wrapper">
                        <div class="shop-results"><span>Show:</span>
                            <div class="shop-select">
                                <select name="number" id="number">
                                    <option value="9">9</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="shop-results"><span>Sort By:</span>
                            <div class="shop-select">
                                <select name="sort" id="sort">
                                    <option value="position">Default sorting</option>
                                    <option value="p-name">Sort By Popularity</option>
                                    <option value="p-price">Sort By Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ht-product-shop tab-content text-center">
                    <div class="tab-pane active show fade" id="grid" role="tabpanel">
                        <div class="custom-row">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Juicy Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span>
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span>
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Red Capsicum</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span>
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Rippen Mango</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span>
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/5.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/5.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Farm's Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span>
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/6.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/6.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Fresh Coconut</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span>
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/7.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/7.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Tangerin Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/8.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/8.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Pine Apple</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span>
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('product_detail')}}">
                                            <img src="{{$common_data['hosts'].'/assets/img/product/9.jpg'}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{$common_data['hosts'].'/assets/img/product/9.jpg'}}"
                                                        data-toggle="modal" data-target="#productModal"><i
                                                            class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="{{route('product_detail')}}">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span>
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade text-left" id="list" role="tabpanel">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Farm Fresh Black Grape</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$110.00</span>
                                    <span class="old-price">$122.00</span>
                                </div>
                                <p>Go for bananas with very small patches of black and used to make banana bread or
                                    served with single cream and sugar.</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Wonderfully Sweet Banana</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$90.00</span>
                                    <span class="old-price">$99.00</span>
                                </div>
                                <p>To eat straight away, go for bananas with very small patches of black on the ...
                                    Mashed and used to make banana bread.</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Fresh Red Capcicum</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$190.00</span>
                                    <span class="old-price">$120.00</span>
                                </div>
                                <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                                    Designed specifically fo..</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Healthy Juicy Mango</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$80.00</span>
                                    <span class="old-price">$70.00</span>
                                </div>
                                <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                                    Designed specifically fo..</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/6.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/6.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Fresh Large Coconut</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$70.00</span>
                                    <span class="old-price">$50.00</span>
                                </div>
                                <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                                    Designed specifically fo..</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/7.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/7.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Chemical Free Fresh Juice</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$200.00</span>
                                    <span class="old-price">$100.00</span>
                                </div>
                                <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                                    Designed specifically fo..</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/8.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/8.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Fresh Pineapple</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$190.00</span>
                                    <span class="old-price">$120.00</span>
                                </div>
                                <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                                    Designed specifically fo..</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('product_detail')}}">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/9.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/9.jpg'}}"
                                                data-toggle="modal" data-target="#productModal"><i
                                                    class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('product_detail')}}">Farm's Fresh Cucumber</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$190.00</span>
                                    <span class="old-price">$120.00</span>
                                </div>
                                <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution.
                                    Designed specifically fo..</p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <p>Showing 1 to 9 of 11 (2 Pages)</p>
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">></a></li>
                            <li class="page-item"><a class="page-link" href="#">>|</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                
                <div class="sidebar-wrapper">
                    <h3>Doanh mục sản phẩm</h3>
                    <div class="sidebar-widget">
                        <h3>Loại sản phẩm</h3>
                        <div class="sidebar-widget-option-wrapper">
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="cat1">
                                <label for="cat1">Categories1 <span>(4)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="cat2">
                                <label for="cat2">Categories2 <span>(5)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="cat3">
                                <label for="cat3">Categories5 <span>(3)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="cat4">
                                <label for="cat4">Categories6 <span>(3)</span></label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="sidebar-widget price-widget">
                        <h3>Price Filter</h3>
                        <div class="price-slider-container">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="slider-values">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="sidebar-widget">
                        <h3>Color</h3>
                        <div class="sidebar-widget-option-wrapper">
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="black">
                                <label for="black">Black <span>(4)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="blue">
                                <label for="blue">Blue <span>(3)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="brown">
                                <label for="brown">Brown <span>(3)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="white">
                                <label for="white">White <span>(3)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3>Manufacturer</h3>
                        <div class="sidebar-widget-option-wrapper">
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="dior">
                                <label for="dior">Christian Dior <span>(6)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="ferragamo">
                                <label for="ferragamo">ferragamo <span>(7)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="hermes">
                                <label for="hermes">hermes <span>(8)</span></label>
                            </div>
                            <div class="sidebar-widget-option">
                                <input type="checkbox" id="louis">
                                <label for="louis">louis vuitton <span>(6)</span></label>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="sidebar-banner-img">
                    <a href="#"><img src="{{$common_data['hosts'].'/assets/img/banner/6.png'}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
@endsection