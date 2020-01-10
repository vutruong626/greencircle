<!-- Footer Area Start -->
<footer class="footer-area">
    <!-- Footer Top Area Start -->
    <div class="footer-top bg-4 pt-120 pb-120">
        <!-- Newsletter Area Start -->
        <div class="newsletter-area">
            <div class="container text-center">
                <div class="newsletter-container">
                    <h2>Subscribe Newsletter.</h2>
                    <p>Get e-mail updates about our latest shop and special offers.</p>
                    <div class="newsletter-form mc_embed_signup">
                        <form action="" method="post"  name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                    placeholder="Enter you email address here..." required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true"><input type="text"
                                        name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                <button id="mc-embedded-subscribe" type="submit" name="subscribe"
                                    class="default-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="social-icon">
                    <a href="{{$info_contact['show_contact']['google_plus']}}" target="_blank" rel="noopener noreferrer"><i class="fa fa-google-plus"></i></a>
                    <a href="{{$info_contact['show_contact']->fanpage}}" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                    <a href="{{$info_contact['show_contact']->youtube}}" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a>
                    <a href="mailto:{{$info_contact['show_contact']->email}}"><i class="fa fa-envelope-o"></i></a>
                    <a href="{{$info_contact['show_contact']->skype}}" target="_blank" rel="noopener noreferrer"><i class="fa fa-skype"></i></a>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End -->
        <!-- Service Area Start -->
        <div class="service-area pt-50">
            <div class="container">
                <div class="service-container">
                    <div class="service-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-service">
                                    <div class="service-image">
                                        <img src="{{asset('assets/img/icon/rocket.png')}}" alt="">
                                    </div>
                                    <div class="service-text">
                                        <h3>Giao hàng miễn phí</h3>
                                        <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-service">
                                    <div class="service-image">
                                        <img src="{{asset('assets/img/icon/money.png')}}" alt="">
                                    </div>
                                    <div class="service-text">
                                        <h3>Money guarantee</h3>
                                        <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-service">
                                    <div class="service-image">
                                        <img src="{{asset('assets/img/icon/support.png')}}" alt="">
                                    </div>
                                    <div class="service-text">
                                        <h3>Hỗ trợ trực tuyến</h3>
                                        <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->
        <!-- Footer Widget Area Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('storage/'.$info_contact['show_contact']->logo)}}" alt=""></a>
                            </div>
                            {{$info_contact['show_contact']->title}}
                            <div class="footer-text">
                                <span><i class="icon icon-Pointer"></i>Địa chỉ : {{$info_contact['show_contact']->address}}</span>
                                <span><i class="icon icon-Phone"></i>Số điện thoại : <a href="tel:+{{$info_contact['show_contact']->phone}}">{{$info_contact['show_contact']->phone}}</a></span>
                                <span><i class="icon icon-Mail"></i>Email : <a href="mailto:{{$info_contact['show_contact']->email}}">{{$info_contact['show_contact']->email}}</a></span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer-widget">
                            <h3>Products</h3>
                            <ul class="footer-widget-list">
                                <li><a href="shop.html">Prices drop</a></li>
                                <li><a href="shop.html">New products</a></li>
                                <li><a href="shop.html">Best sales</a></li>
                                <li><a href="shop.html">Stores</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer-widget">
                            <h3>Our company</h3>
                            <ul class="footer-widget-list">
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Legal Notice</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Secure payment</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="shop.html">Stores</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-footer-widget">
                            <h3>Fanpage Facebook</h3>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
                            <div class="fb-page" data-href="https://m.facebook.com/vieclamthoivunguyenlan/" 
                                data-tabs="timeline" data-width="" data-height="260" data-small-header="false" 
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://m.facebook.com/vieclamthoivunguyenlan/" 
                                            class="fb-xfbml-parse-ignore">
                                    <a href="https://m.facebook.com/vieclamthoivunguyenlan/">Việc làm thời vụ Nguyễn Lan</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget Area End -->
    </div>
    <!-- Footer Top Area End -->
    <!-- Footer Bottom Area Start -->
    <div class="footer-bottom-area pt-15 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex col-md-6">
                    <div class="footer-text-bottom">
                        <p>Copyright &copy; <a href="#">Naturecircle</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="payment-img d-flex justify-content-end">
                        <img src="assets/img/payment.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area End -->
</footer>
<!-- Footer Area End -->