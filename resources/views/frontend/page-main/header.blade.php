<header class="header-area header-sticky">
    <div class="header-container">
        <div class="row">

            <div class="col-lg-2 col-sm-4">
                <div class="logo text-center">
                    <a href="/"><img src="{{$common_data['hosts'].'/assets/img/logo/logo.png'}}"
                            alt="NatureCircle"></a>
                </div>
            </div>
            <div class="col-lg-10 display-none-md display-none-xs">
                <div class="ht-main-menu" style="float: right;">
                    <nav>
                        <ul>
                            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">TRANG CHỦ </i></a></li>
                            <li class="{{Request::is('ve-chung-toi') ? 'active' : ''}}"><a href="{{route('about')}}">GIỚI THIỆU</a></li>
                            <li class="{{Request::is('san-pham') ? 'active' : ''}}"><a href="{{route('product')}}">SẢN PHẨM</a></li>
                            <li class="{{Request::is('tin-tuc') ? 'active' : ''}}"><a href="{{route('news')}}">TIN TỨC</a></li>
                            <li class="{{Request::is('hoat-dong-cong-ty') ? 'active' : ''}}"><a href="{{route('company_activity')}}">HOẠT ĐỘNG CÔNG TY</a></li>
                            <li class="{{Request::is('bang-gia') ? 'active' : ''}}"><a href="{{route('table_price')}}">BÁO GIÁ</a></li>
                            <li class="{{Request::is('lien-he') ? 'active' : ''}}"><a href="{{route('contact')}}">LIÊN HỆ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area End -->
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="mobile-menu container">
            <nav id="mobile-menu-active">
                <ul class="menu-overflow">
                    <li class="active"><a href="/">TRANG CHỦ </i></a></li>
                    <li><a href="">GIỚI THIỆU</a></li>
                    <li><a href="">SẢN PHẨM</a></li>
                    <li><a href="">TIN TỨC</a></li>
                    <li><a href="">HOẠT ĐỘNG CÔNG TY</a></li>
                    <li><a href="">BÁO GIÁ</a></li>
                    <li><a href="">LIÊN HỆ</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Mobile Menu Area End -->


</header>