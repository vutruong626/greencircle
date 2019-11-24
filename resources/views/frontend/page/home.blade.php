@extends('frontend.frontend')
@section('content')
<!-- Hero Area Start -->
@include('frontend.page-main.slider')
    <!-- Hero Area End -->
<!-- Banner Area Start -->
<div class="banner-area banner-one-area bg-2 fix pt-60 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="banner-text pt-15">
                    <h3>Về chúng tôi <span>Greencircle</span></h3><br>
                    <h1>Ống Hút Tre</h1>
                    <h2>
                        <img src="{{$common_data['hosts'].'/assets/img/icon/mark.png'}}" alt="">
                        <span>Mua 1 tặng 10</span>
                    </h2>
                    <p><strong>Ống hút tre</strong>
                        là sản phẩm có rất nhiều ưu điểm. Nó chỉ có một hạn chế về giá cả vì có giá thành hơi cao hơn so
                        với ống hút nhựa. Nhưng ống hút tre có lợi thế là có thể dùng đi dùng lại được nhiều lần, như
                        việc mình dùng đũa thường ngày vậy. Dùng xong có thể rửa sạch, phơi khô và có thể dùng đi dùng
                        lại nhiều lần mà không cần tới ống hút nhựa nữa. Và ống hút tre khi bỏ đi thì vì nó là một sản
                        phẩm từ thiên nhiên nên khả năng phân hủy dễ dàng, rất có lợi cho môi trường sống của chúng ta.
                    </p>
                    <a href="{{route('about')}}" class="default-btn">Xem thêm</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-image-wrapper">
                    <div class="banner-image">
                        <img src="{{$common_data['hosts'].'/assets/img/banner/1.jpg'}}" alt="">
                    </div>
                    <div class="banner-image-text">
                        <h4>Ống hút tre</h4>
                        <p>We believe that healthy eating, clean air, and gentle character is the best start to
                            genuine wellbeing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Protuct Area Start -->
<div class="product-area bg-1 pt-110 pb-80">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-img d-flex justify-content-center">
                <img src="{{$common_data['hosts'].'/assets/img/icon/title.png'}}" alt="">
            </div>
            <h2><span>Sản phẩm đặc trưng </span>Greencircl</h2>
        </div>
    </div>
    <div class="container">
        <div class="tab-content text-center">
            <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                <div class="product-carousel">
                    <div class="custom-col">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Juicy Grapes</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Fresh Banana</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Red Capsicum</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Rippen Mango</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Farm's Onion</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Fresh Coconut</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Tangerin Juice</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Pine Apple</a></h5>
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
                                <a href="shop.html">
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
                                <h5><a href="shop.html">Fresh Cucumber</a></h5>
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
                                <a href="shop.html">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/10.jpg'}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{$common_data['hosts'].'/assets/img/product/10.jpg'}}"
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
                                <h5><a href="shop.html">Fresh Grape</a></h5>
                                <div class="pro-price">
                                    <span class="new-price">$40.00</span>
                                    <span class="old-price">$43.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Protuct Area End -->

<!-- Blog Area Start -->
<div class="blog-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-img d-flex justify-content-center">
                <img src="{{$common_data['hosts'].'/assets/img/icon/title.png'}}" alt="">
            </div>
            <h2><span>Tin tức & Sự kiện </span>Greencircl</h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="blog-carousel">
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/1.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Oct 30,2018</span>
                            </div>
                            <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk
                                make it quite .</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/2.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">The most healthful food you can eat.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Sep 11,2018</span>
                            </div>
                            <p>Health benefits of apple include improved digestion, prevention of stomach disorders,
                                gallstones.</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/3.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Delicious and nutritious vegetable.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Apr 22,2018</span>
                            </div>
                            <p>Research shows drinking beetroot juice benefit digestion, boost athletic performance.
                                They are a .</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/1.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Oct 30,2018</span>
                            </div>
                            <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk
                                make it quite popular.</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
<!-- Blog Area Start -->
<div class="blog-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-img d-flex justify-content-center">
                <img src="{{$common_data['hosts'].'/assets/img/icon/title.png'}}" alt="">
            </div>
            <h2><span>Hoạt động công ty </span>Greencircl</h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="blog-carousel">
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/1.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Oct 30,2018</span>
                            </div>
                            <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk
                                make it quite .</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/2.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">The most healthful food you can eat.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Sep 11,2018</span>
                            </div>
                            <p>Health benefits of apple include improved digestion, prevention of stomach disorders,
                                gallstones.</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/3.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Delicious and nutritious vegetable.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Apr 22,2018</span>
                            </div>
                            <p>Research shows drinking beetroot juice benefit digestion, boost athletic performance.
                                They are a .</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="{{$common_data['hosts'].'/assets/img/blog/1.jpg'}}"
                                    alt=""></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                            <div class="post-meta">
                                <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                <span class="post-date"> - Oct 30,2018</span>
                            </div>
                            <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk
                                make it quite popular.</p>
                            <a href="blog-details.html" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
<!-- Food Categry Area Start -->
<div class="food-category-area pt-105 pb-70">
    <div class="container text-center">
        <div class="section-title-img">
            <img src="{{$common_data['hosts'].'/assets/img/banner/text.png'}}" alt="">
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
        </div>
    </div>
    <div class="container">
        <div class="ht-food-slider row">
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="shop.html" class="food-cat-img"><img
                            src="{{$common_data['hosts'].'/assets/img/icon/tea.png'}}" alt=""></a>
                    <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt="">
                    <h4><a href="shop.html">tea</a></h4>
                    <span>(13 items)</span>
                </div>
            </div>
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="shop.html" class="food-cat-img"><img
                            src="{{$common_data['hosts'].'/assets/img/icon/burger.png'}}" alt=""></a>
                    <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt="">
                    <h4><a href="shop.html">bread</a></h4>
                    <span>(14 items)</span>
                </div>
            </div>
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="shop.html" class="food-cat-img"><img
                            src="{{$common_data['hosts'].'/assets/img/icon/fruit.png'}}" alt=""></a>
                    <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt="">
                    <h4><a href="shop.html">fruits</a></h4>
                    <span>(8 items)</span>
                </div>
            </div>
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="shop.html" class="food-cat-img"><img
                            src="{{$common_data['hosts'].'/assets/img/icon/drinks.png'}}" alt=""></a>
                    <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt="">
                    <h4><a href="shop.html">juices</a></h4>
                    <span>(11 items)</span>
                </div>
            </div>
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="shop.html" class="food-cat-img"><img
                            src="{{$common_data['hosts'].'/assets/img/icon/vegetable.png'}}" alt=""></a>
                    <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt="">
                    <h4><a href="shop.html">vegetables</a></h4>
                    <span>(11 items)</span>
                </div>
            </div>
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="shop.html" class="food-cat-img"><img
                            src="{{$common_data['hosts'].'/assets/img/icon/tea.png'}}" alt=""></a>
                    <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt="">
                    <h4><a href="shop.html">tea</a></h4>
                    <span>(13 items)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Food Categry Area End -->
@endsection