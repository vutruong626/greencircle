@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Về chúng tôi</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
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
                    <!-- <a href="shop.html" class="default-btn">Xem thêm</a> -->
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

@endsection