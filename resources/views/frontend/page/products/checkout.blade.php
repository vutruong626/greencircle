@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Thông tin khách hàng <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<br>
<br>
<!-- checkout-area start -->
<div class="checkout-area pb-90">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form action="" method="post">
                        <div class="checkbox-form">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Họ & Tên <span class="required">*</span></label>
                                        <input type="text" placeholder="Nguyễn thái sơn" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="sonkhanh@gmail.com" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="09099999999" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Tên Công Ty</label>
                                        <input type="text" placeholder="Greencrle" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        <input type="text" placeholder="99/99 Quang trung" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Quận huyện <span class="required">*</span></label>
                                        <input type="text" placeholder="Quận gò vấp" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Tỉnh / Thành Phố<span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú :</label>
                                        <textarea id="checkout-mess" cols="55" rows="5"
                                            placeholder="ghi chú cho đơn hàng bạn"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                        <p>Vui lòng kiểm tra thông tin trước khi thanh toán.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="your-order">
                        <h3>Đơn đặt hàng của bạn</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-total">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$165.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">$50.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Tổng tiền</th>
                                        <td>
                                            <strong><span class="amount">$215.00</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel">
                                    <div class="panel-heading" id="headingOne">
                                        <a href="#checkout" data-toggle="collapse" data-parent="#accordion">Kiểm tra</a>
                                    </div>
                                    <div id="checkout" class="collapse show">
                                        <div class="panel-body">
                                            <p> Vui lòng kiểm tra thông tin trước khi thanh toán.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <input class="default-btn" type="submit" value="Tiến hành thanh toán" />
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