<!-- Header Area Start -->
<header class="header-area header-sticky">
    <div class="header-container">
        <div class="row">
            
            <div class="col-lg-2 col-sm-4">
                <div class="logo text-center">
                    <a href="/"><img src="{{asset('storage/'.$info_contact['show_contact']->logo)}}" alt="NatureCircle"></a>
                </div>
            </div>

            <div class="col-lg-9 display-none-md display-none-xs">
                <div class="ht-main-menu">
                    <nav>
                        {{ menu('menu_naturecircle', 'frontend.include.menu.menu') }}
                    </nav>
                </div>
            </div>
            <div class="col-lg-1 col-sm-8">
                <div class="header-content d-flex justify-content-end">
                    <div class="search-wrapper">
                        <a href="#"><span class="icon icon-Search"></span></a>
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search entire store here ...">
                            <button type="button">Search</button>
                        </form>
                    </div>
                    <div class="settings-wrapper">
                        <a href="#"><i class="icon icon-Settings"></i></a>
                        <div class="settings-content">
                            <h4>TÀI KHOẢN CỦA TÔI <i class="fa fa-angle-down"></i></h4>
                            <ul>
                                <li><a href="#" class="modal-view button" data-toggle="modal"
                                        data-target="#register_box">Đăng ký tài khoản</a></li>
                                <li><a href="#" class="modal-view button" data-toggle="modal"
                                        data-target="#login_box">Đăng Nhập</a></li>
                            </ul>

                        </div>
                    </div>
                    @if(count($info_products['cart_detail']) > 0)
                    <div class="cart-wrapper">
                        <a href="#">
                            <i class="icon icon-FullShoppingCart"></i>
                            <!-- <span>2</span> -->
                        </a>
                        <div class="cart-item-wrapper">
                            @foreach($info_products['cart_detail'] as $vt_product)
                            <div class="single-cart-item">
                                <div class="cart-img">
                                    <a href="#"><img width="80" src="{{('storage/'.$vt_product->image)}}" alt=""></a>
                                </div>
                                <div class="cart-text-btn">
                                    <div class="cart-text">
                                        <h5><a href="#">{{$vt_product->title}}</a></h5>
                                        <span class="cart-qty">× {{$vt_product['quantity']}}</span>
                                        <span class="cart-price">{{number_format($vt_product->price)}} VNĐ</span>
                                    </div>
                                    <a href="{{asset('/gio-hang/xoa/'.$vt_product['id'])}}"
                                        title="Xóa sản phẩm mà bạn chọn" class=""><i class="fa fa-close"></i></a>
                                </div>
                            </div>
                            @endforeach
                            <div class="cart-price-total">
                                <!-- <div class="cart-price-info d-flex justify-content-between">
                                    <span>Sub-Total :</span>
                                    <span>$135.00</span>
                                </div>
                                <div class="cart-price-info d-flex justify-content-between">
                                    <span>Eco Tax (-2.00) :</span>
                                    <span>$4.00</span>
                                </div>
                                <div class="cart-price-info d-flex justify-content-between">
                                    <span>VAT (20%) :</span>
                                    <span>$27.00</span>
                                </div> -->
                                <div class="cart-price-info d-flex justify-content-between">
                                    <span>Toàn bộ :</span>
                                    <span>{{number_format($info_products['cart_total'])}} VNĐ</span>
                                </div>
                            </div>
                            <div class="cart-links">
                                <a href="{{route('show_cart')}}">Xem giỏ hàng</a>
                                <!-- <a href="checkout.html">Thủ tục thanh toán</a> -->
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area End -->
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="mobile-menu container">
            <nav id="mobile-menu-active">
                {{ menu('menu_naturecircle', 'frontend.include.menu.menu') }}
            </nav>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
    <!--Start of Login Form-->
    <div class="modal fade" id="login_box" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-pop-up-content">
                        <h2>Login to your account</h2>
                        <form action="{{route('singin')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-box">
                                <input type="text" placeholder="Email" name="email" required>
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="checkobx-link">
                                <div class="left-col">
                                    <input type="checkbox" id="remember_token"><label for="remember_token">Remember Me</label>
                                </div>
                                <div class="right-col"><a href="#">Forget Password?</a></div>
                            </div>
                            
                            <button type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Login Form-->
    <!--Start of Register Form-->
    <div class="modal fade" id="register_box" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="form-pop-up-content">
                        <h2>Đăng ký</h2>
                        <form action="{{route('login')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-box">
                                <input type="text" placeholder="Nhập tên đầy đủ" name="fullname" required>
                                <input type="email" placeholder="Email" name="email" required>
                                <input type="phone" placeholder="Số điện thoại" name="phone" required>
                                <input type="address" placeholder="Địa chỉ" name="address" required>
                                <input type="password" placeholder="Password" name="pass" required>
                                <input type="password" placeholder="Nhập lại Password" name="re_pass" required>
                            </div>
                            <div class="checkobx-link">
                                <div class="left-col">
                                    <input type="checkbox" id="remember_token" name="remember_token"><label
                                        for="remember_reg">Remember
                                        Me</label>
                                </div>
                            </div>
                            
                            <button class="text-uppercase" type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Register Form-->
</header>
<!-- Header Area End -->