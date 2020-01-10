@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>CỬA HÀNG NatureCircle</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$show_product_detail->title}}</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Product DEtails Area Start -->
<div class="product-detials-area bg-gray pt-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="product-image-slider d-flex flex-column">
                    <!--Product Tab Content Start-->
                    <div class="tab-content product-large-image-list">
                        <?php $show_product_detail->slides = isset($show_product_detail->slides) ? json_decode($show_product_detail->slides,true) : [];
                            // dd($show_product_detail->slides);
                        ?>
                        @foreach($show_product_detail->slides as $k_img => $img_slider)
                        <div class="tab-pane fade show @if($k_img == 0) active @endif" id="product-slide{{($k_img + 1)}}" role="tabpanel"
                            aria-labelledby="product-slide-tab-{{($k_img + 1)}}">
                            <div class="single-product-img easyzoom img-full">
                                <a href="{{asset('storage/'.$img_slider)}}">
                                    <img src="{{asset('storage/'.$img_slider)}}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <!--Product Content End-->
                    <!--Product Tab Menu Start-->
                    <div class="product-small-image-list">
                        <div class="nav small-image-slider-single-product-tabstyle-3" role="tablist">
                            @foreach($show_product_detail->slides as $k_img => $img_slider)
                            <div class="single-small-image img-full @if($k_img == 0) active @endif">
                                <a data-toggle="tab" id="product-slide-tab-{{($k_img + 1)}}" 
                                    href="#product-slide{{($k_img + 1)}}">
                                    <img src="{{asset('storage/'.$img_slider)}}" class="img-fluid" alt=""></a>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <!--Product Tab Menu End-->
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="product-details-text">
                    <h3>{{$show_product_detail->title}}</h3>
                    <h4>{{number_format($show_product_detail->price)}} VNĐ</h4>
                    {!! $show_product_detail->excerpt !!}
                    <h5><i class="fa fa-check"></i>{{$show_product_detail->order}} Trong kho</h5>
                    <form action="{{route('add_product_cart')}}" method="post">
                        {{ csrf_field() }}
                        <div class="add-cart-product">
                            <input type="hidden" name="product" value="{{$show_product_detail->id}}"/>
                            <input type="number" name="quantity" value="1" placeholder="1">
                            <button type="submit" class="default-btn">Add to cart</button>
                            <!-- <button type="button"><i class="icon icon-Heart"></i></button>
                            <button type="button"><i class="icon icon-Restart"></i></button> -->
                        </div>
                        <div class="product-tag-cat">
                            <div class="single-tag-cat">
                                <span class="p-d-title">Loại sản phẩm:</span>
                                <a href="{{route('show_product',$show_product_detail->slug_parent)}}">{{$show_product_detail->name}}</a>
                                
                            </div>
                            
                        </div>
                        <div class="product-share">
                            <span class="p-d-title">Share this product</span>
                            <ul class="p-social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product DEtails Area End -->
<!-- Product Review Tab Area Start -->
<div class="product-review-tab-area bg-gray pt-90 pb-105">
    <div class="container scroll-area">
        <div class="p-d-tab-container">
            <div class="p-tab-btn">
                <div class="nav" role="tablist">
                    <a class="active" href="#tab1" data-toggle="tab" role="tab" aria-selected="true"
                        aria-controls="tab1">Nội Dung</a>
                    <a href="#tab2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">Reviews
                        (2)</a>
                </div>
            </div>
            <div class="p-d-tab tab-content">
                <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                    <div class="tab-items">
                        <div class="product-desc-text">
                            {!! $show_product_detail->body !!}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade scroll-area" id="tab2" role="tabpanel">
                    <div class="tab-items">
                        <div class="p-review-wrapper">
                            <h3>2 reviews for Ornare sed consequat</h3>
                            <div class="single-review-item">
                                <div class="review-logo">
                                    <img src="assets/img/icon/logo.jpg" alt="">
                                </div>
                                <div class="p-review-text">
                                    <div class="rating-number">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                    </div>
                                    <span class="p-review-info"><span>admin</span> – March 23, 2018</span>
                                    <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis
                                        mi.</p>
                                </div>
                            </div>
                            <div class="single-review-item">
                                <div class="review-logo">
                                    <img src="assets/img/icon/logo.jpg" alt="">
                                </div>
                                <div class="p-review-text">
                                    <div class="rating-number">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="p-review-info"><span>admin</span> – March 23, 2018</span>
                                    <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis
                                        mi.</p>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post" class="rating-form">
                            <h5>Add your rating</h5>
                            <div class="submit-rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <label for="r-textarea">Your Review</label>
                            <textarea name="review" id="r-textarea" cols="30" rows="10"></textarea>
                            <label for="r-name">Name *</label>
                            <input type="text" placeholder="" id="r-name">
                            <label for="r-email">Email *</label>
                            <input type="email" placeholder="" id="r-email">
                            <button type="button" class="default-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Review Tab Area End -->
<!-- Protuct Area Start -->
<div class="product-area bg-gray pb-80 mb-95 related-product">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-img d-flex justify-content-center">
                <img src="assets/img/icon/title.png" alt="">
            </div>
            <h2><span>Sản phẩm </span>NatureCircle</h2>
        </div>
    </div>
    <div class="container text-center">
        <div class="product-carousel">
            @foreach($optical_products as $vt_optical_products)
            @if($vt_optical_products->id != $show_product_detail->id)
            <div class="custom-col">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="shop.html">
                            <img src="{{asset('storage/'.$vt_optical_products->image)}}" alt="">
                        </a>
                        <div class="product-hover">
                            <ul class="hover-icon-list">
                                <li>
                                    <!-- <a href="wishlist.html"><i class="icon icon-Heart"></i></a> -->
                                </li>
                                <li>
                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                </li>
                                <li><a href="{{asset('storage/'.$vt_optical_products->image)}}" data-toggle="modal"
                                        data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                            </ul>
                            <button type="button" class="p-cart-btn">Thêm vào giỏ hàng</button>
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
                        <h5><a href="shop.html">{{$vt_optical_products->title}}</a></h5>
                        <div class="pro-price">
                            <span class="new-price">{{number_format($vt_optical_products->price)}}</span>
                            <!-- <span class="old-price">$92.00</span> -->
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Protuct Area End -->
@endsection