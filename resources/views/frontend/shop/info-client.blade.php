@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Thủ tục thanh toán</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thủ tục thanh toán của bạn</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<br>
<!-- checkout-area start -->
<div class="checkout-area pb-90">
    <div class="container">
        <form action="{{route('add_info_client')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="checkbox-form">
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout-form-list">
                                    <label>Họ & Tên :<span class="required">*</span></label>
                                    <input type="text" name="name" placeholder="Vd: Nguyễn Văn Tèo" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout-form-list">
                                    <label>Số Điện Thoại <span class="required">*</span></label>
                                    <input type="text" name="phone" placeholder="Vd: 0123456789" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" placeholder="vanteo@gmail.com" />
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="checkout-form-list">
                                    <label>Địa Chỉ <span class="required">*</span></label>
                                    <input type="text" name="address" placeholder="99/99 quang trung phường 8" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout-form-list">
                                    <label>Quận / Huyện <span class="required">*</span></label>
                                    <input type="text" name="district" placeholder="Quận gò vấp" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout-form-list">
                                    <label>Thị trấn / Thành phố * <span class="required">*</span></label>
                                    <input type="text" name="city" placeholder="HCM" />
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>ghi chú :</label>
                                    <textarea id="checkout-mess" name="note" cols="55" rows="5"
                                        placeholder="Ghi chú về đơn hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng."></textarea>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="your-order">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Sản Phẩm</th>
                                        <th class="product-total">Toàn bộ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart_detail as $vt_cart_detail)
                                    <tr class="cart_item">
                                        <td class="product-name">{{$vt_cart_detail->title}}<strong class="product-quantity"> × {{$vt_cart_detail['quantity']}}</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">{{number_format($vt_cart_detail->price)}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Tổng số đơn hàng</th>
                                        <td>
                                            <strong><span class="amount">{{number_format($cart_total)}} VNĐ</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel">
                                    <!-- <div class="panel-heading" id="headingOne">
                                        <a href="#checkout" data-toggle="collapse" data-parent="#accordion">Cheque
                                            Payment</a>
                                    </div> -->
                                    <div id="checkout" class="collapse show">
                                        <div class="panel-body">
                                            <p>Vui lòng kiểm tra lại đơn hàn của bạn trước khi thanh toán.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="order-button-payment">
                                <input class="default-btn" type="submit" value="Đặt hàng" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- checkout-area end -->

@endsection