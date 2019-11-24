@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Bản giá sỉ <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">giá bán sỉ</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Banner Area Start -->
<div class="banner-area banner-one-area bg-2 fix pt-60 pb-80">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-img d-flex justify-content-center">
                <img src="{{$common_data['hosts'].'/assets/img/icon/title.png'}}" alt="">
            </div>
            <h2><span>Bạn muốn đặt với số lượng lớn </span>Greencircl</h2>
        </div>
        <br>
        <div class="row">

            <div class="columns">
                <ul class="price">
                    <li class="header">Basic</li>
                    <li class="grey">$ 9.99 / year</li>
                    <li>10GB Storage</li>
                    <li>10 Emails</li>
                    <li>10 Domains</li>
                    <li>1GB Bandwidth</li>
                    <li class="grey"><a href="#" class="button">Liên Hệ</a></li>
                </ul>
            </div>

            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color:#4CAF50">Pro</li>
                    <li class="grey">$ 24.99 / year</li>
                    <li>25GB Storage</li>
                    <li>25 Emails</li>
                    <li>25 Domains</li>
                    <li>2GB Bandwidth</li>
                    <li class="grey"><a href="#" class="button">Liên Hệ</a></li>
                </ul>
            </div>

            <div class="columns">
                <ul class="price">
                    <li class="header">Premium</li>
                    <li class="grey">$ 49.99 / year</li>
                    <li>50GB Storage</li>
                    <li>50 Emails</li>
                    <li>50 Domains</li>
                    <li>5GB Bandwidth</li>
                    <li class="grey"><a href="#" class="button">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Timer Product Area Start -->
<div class="timer-product-area bg-7 pt-110 pb-80 timer-two-area">
    <div class="container">
        <div class="section-title text-center mb-50">
            <div class="section-img d-flex justify-content-center">
                <img src="{{$common_data['hosts'].'/assets/img/icon/title.png'}}" alt="">
            </div>
            <h2><span>Ưu đãi của thế kỹ </span>Greencircle</h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="timer-carousel">
                <div class="custom-col text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="shop.html">
                                <img src="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}" alt="">
                            </a>
                            <div class="timer">
                                <div data-countdown="2020/05/08" class="timer-grid"></div>
                            </div>
                            <div class="product-hover">
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
                                <span class="new-price">$204.00</span>
                                <span class="old-price">$280.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="shop.html">
                                <img src="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}" alt="">
                            </a>
                            <div class="timer">
                                <div data-countdown="2019/05/12" class="timer-grid"></div>
                            </div>
                            <div class="product-hover">
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
                            <h5><a href="shop.html">Farm's Banana</a></h5>
                            <div class="pro-price">
                                <span class="new-price">$33.00</span>
                                <span class="old-price">$37.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="shop.html">
                                <img src="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}" alt="">
                            </a>
                            <div class="timer">
                                <div data-countdown="2018/12/12" class="timer-grid"></div>
                            </div>
                            <div class="product-hover">
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
                                <span class="new-price">$120.00</span>
                                <span class="old-price">$160.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="shop.html">
                                <img src="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}" alt="">
                            </a>
                            <div class="timer">
                                <div data-countdown="2018/12/1" class="timer-grid"></div>
                            </div>
                            <div class="product-hover">
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
                            <h5><a href="shop.html">Juicy Mango</a></h5>
                            <div class="pro-price">
                                <span class="new-price">$90.00</span>
                                <span class="old-price">$100.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Timer Product Area End -->
<style>
.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
@endsection