@extends('frontend.frontend')
@section('content')
<!-- Hero Area Start -->
@include('frontend.include.slider')
    <!-- Hero Area End -->
<!-- Banner Area Start -->
<div class="banner-area banner-one-area bg-2 fix pt-60 pb-80">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-6 d-flex align-items-center">
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
            </div> -->
            {!! $show_about->excerpt !!}
            <div class="col-lg-6">
                <div class="banner-image-wrapper">
                    <div class="banner-image">
                        <img src="{{$common_data['hosts'].'/storage/'.$show_about->image}}" alt="{{$show_about->title}}">
                    </div>
                    <!-- <div class="banner-image-text">
                        <h4>Ống hút tre</h4>
                        <p>We believe that healthy eating, clean air, and gentle character is the best start to
                            genuine wellbeing.</p>
                    </div> -->
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
                <img src="assets/img/icon/title.png" alt="">
            </div>
            <h2><span>Sản phẩm đặc trưng </span>NatureCircle</h2>
        </div>
    </div>
    <div class="container">
        <div class="product-tab-list nav" role="tablist">
            <!-- <a class="active" href="#tab1" data-toggle="tab" role="tab" aria-selected="true"
                aria-controls="tab1">vegetables</a>
            <a href="#tab2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">fruits</a>
            <a href="#tab3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab3">juices</a>
            <a href="#tab4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab4">bread</a> -->
        </div>
        <div class="tab-content text-center">
            <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                <div class="product-carousel">
                    @foreach($show_product as $vt_show_product)
                    <div class="custom-col">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('show_product_detail',[$vt_show_product->slug_parent,$vt_show_product->slug])}}">
                                    <img src="{{('storage/'.$vt_show_product->image)}}" alt="{{$vt_show_product->title}}">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{('storage/'.$vt_show_product->image)}}" ><i class="icon icon-Search"></i></a></li>
                                    </ul>
                                    <!-- <button type="button" class="p-cart-btn">Add to cart</button> -->
                                    <a href="{{route('add_cart',$vt_show_product->id)}}" class="p-cart-btn">Thêm vào giỏ hàng</a>
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
                                <h5><a href="{{route('show_product_detail',[$vt_show_product->slug_parent,$vt_show_product->slug])}}">{{$vt_show_product->title}}</a></h5>
                                <div class="pro-price">
                                    <span class="new-price">{{number_format($vt_show_product->price)}} VNĐ</span>
                                    <!-- <span class="old-price">$92.00</span> -->
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
<!-- Protuct Area End -->

<!-- Blog Area Start -->
<div class="blog-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-img d-flex justify-content-center">
                <img src="assets/img/icon/title.png" alt="">
            </div>
            <h2><span>Tin Tức & Sự Kiện </span>NatureCircle</h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="blog-carousel">
                @foreach($show_news as $vt_show_news)
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="{{route('show_news_detail',[$vt_show_news->slug_parent,$vt_show_news->slug])}}">
                                <img src="{{('storage/'.$vt_show_news->image)}}" alt="{{$vt_show_news->title}}">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="{{route('show_news_detail',[$vt_show_news->slug_parent,$vt_show_news->slug])}}">{{$vt_show_news->title}}</a></h4>
                            <div class="post-meta">
                                <span class="author-name">Danh mục: <span>{{$vt_show_news->name}}</span></span>
                                <span class="post-date"> | {{$vt_show_news->created_at}}</span>
                            </div>
                            {!! $vt_show_news->excerpt !!}
                            <a href="{{route('show_news_detail',[$vt_show_news->slug_parent,$vt_show_news->slug])}}" class="default-btn">Đọc thêm</a>
                        </div>
                    </div>
                </div>
               @endforeach
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
                @foreach($show_company as $vt_show_company)
                <div class="custom-col text-center">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="{{route('company_activity_detail',$vt_show_company->slug)}}"><img src="{{$common_data['hosts'].'/storage/'.$vt_show_company->image}}"
                                    alt="{{$vt_show_company->title}}"></a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="{{route('company_activity_detail',$vt_show_company->slug)}}">{{$vt_show_company->title}}</a></h4>
                            <div class="post-meta">
                                <!-- <span class="author-name">post by: <span>Naturecircle Themes</span></span> -->
                                <span class="post-date">{{$vt_show_company->created_at}}</span>
                            </div>
                            <p>{!! $vt_show_company->excerpt !!}</p>
                            <a href="{{route('company_activity_detail',$vt_show_company->slug)}}" class="default-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
            @foreach($show_barner as $vt_show_barner)
            <div class="col text-center">
                <div class="single-food-category">
                    <a href="" class="food-cat-img">
                        <img
                            src="{{$common_data['hosts'].'/storage/'.$vt_show_barner->image}}" alt="{{$vt_show_barner->name}}"></a>
                    <!-- <img src="{{$common_data['hosts'].'/assets/img/icon/border.png'}}" alt=""> -->
                    <!-- <h4><a href="shop.html">tea</a></h4>
                    <span>(13 items)</span> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Food Categry Area End -->
@endsection