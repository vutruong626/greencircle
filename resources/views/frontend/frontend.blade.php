<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green-Circle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{$common_data['hosts'].'/assets/img/favicon.png'}}">

    <!-- All css here -->
    <link rel="stylesheet" href="{{$common_data['hosts'].'/assets/css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{$common_data['hosts'].'/assets/css/font-awesome.min.css'}}">
    <link rel="stylesheet" href="{{$common_data['hosts'].'/assets/css/ie7.css'}}">
    <link rel="stylesheet" href="{{$common_data['hosts'].'/assets/css/plugins.css'}}">
    <link rel="stylesheet" href="{{$common_data['hosts'].'/assets/css/style.css'}}">
    <script src="{{$common_data['hosts'].'/assets/js/vendor/modernizr-3.5.0.min.js'}}"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
    
</head>

<body>

    <!-- Header Area Start -->
    @include('frontend.include.menu')
    
    @include('frontend.page.info-err')
    <!-- Header Area End -->
    @yield('content')
    <!-- Footer Area Start -->
    @include('frontend.include.footer')
    <!-- Footer Area End -->
    <!-- QUICKVIEW PRODUCT -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fa fa-times"></i></span></button>
                <div class="quick-view-container">
                    <div class="column-left">
                        <div class="tab-content product-details-large" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                aria-labelledby="single-slide-tab-1">
                                <div class="single-product-img">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide2" role="tabpanel"
                                aria-labelledby="single-slide-tab-2">
                                <div class="single-product-img">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide3" role="tabpanel"
                                aria-labelledby="single-slide-tab-3">
                                <div class="single-product-img">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide4" role="tabpanel"
                                aria-labelledby="single-slide-tab-4">
                                <div class="single-product-img">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide5" role="tabpanel"
                                aria-labelledby="single-slide-tab-5">
                                <div class="single-product-img">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/5.jpg'}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide6" role="tabpanel"
                                aria-labelledby="single-slide-tab-6">
                                <div class="single-product-img">
                                    <img src="{{$common_data['hosts'].'/assets/img/product/6.jpg'}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu" role="tablist">
                                <div class="single-tab-menu">
                                    <a class="active" data-toggle="tab" id="single-slide-tab-1"
                                        href="#single-slide1"><img src="{{$common_data['hosts'].'/assets/img/product/1.jpg'}}" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img
                                            src="{{$common_data['hosts'].'/assets/img/product/2.jpg'}}" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img
                                            src="{{$common_data['hosts'].'/assets/img/product/3.jpg'}}" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img
                                            src="{{$common_data['hosts'].'/assets/img/product/4.jpg'}}" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img
                                            src="{{$common_data['hosts'].'/assets/img/product/5.jpg'}}" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img
                                            src="{{$common_data['hosts'].'/assets/img/product/6.jpg'}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-right">
                        <div class="quick-view-text">
                            <h2>Curabitur a purus</h2>
                            <h3 class="q-product-price">$34.00<span class="old-price">$37.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut
                                lectus</p>
                            <div class="input-cart">
                                <input value="1" type="number">
                                <button class="default-btn">Add to cart</button>
                            </div>
                            <div class="share-product">
                                <h4>Share this product</h4>
                                <div class="social-link">
                                    <a href="#" target="_blank" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" target="_blank" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" target="_blank" class="pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a href="#" target="_blank" class="google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#" target="_blank" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICKVIEW PRODUCT -->

    <!-- All js here -->
    <script src="{{$common_data['hosts'].'/assets/js/vendor/jquery-3.2.1.min.js'}}"></script>
    <script src="{{$common_data['hosts'].'/assets/js/popper.min.js'}}"></script>
    <script src="{{$common_data['hosts'].'/assets/js/bootstrap.min.js'}}"></script>
    <script src="{{$common_data['hosts'].'/assets/js/plugins.js'}}"></script>
    <script src="{{$common_data['hosts'].'/assets/js/ajax-mail.js'}}"></script>
    <script src="{{$common_data['hosts'].'/assets/js/main.js'}}"></script>
</body>
</html>