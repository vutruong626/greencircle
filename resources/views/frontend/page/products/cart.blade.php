@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>GIỎ HÀNG CỦA BẠN <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Cart Area Start -->
<div class="cart-area table-area pt-110 pb-95">
    <div class="container">
        <div class="table-responsive">
            <form action="{{route('updata_product')}}" method="post">
                {{ csrf_field() }}
                <table class="table product-table text-center">
                    <thead>
                        <tr>
                            <th class="table-remove">Xóa</th>
                            <th class="table-image">Hình sản phẩm</th>
                            <th class="table-p-name">Sản phẩm</th>
                            <th class="table-p-price">Giá</th>
                            <th class="table-p-qty">Số lượng</th>
                            <th class="table-total">Giá tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show_sp as $vt_show_sp )
                        <tr>
                            <td class="table-remove">
                                <a href="{{asset('/cart/remove/'.$vt_show_sp->id),0}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td class="table-image">
                                <a href="product-details.html">
                                    <img src="{{$common_data['hosts'].'/storage/'.$vt_show_sp->image}}" alt="">
                                </a>
                            </td>
                            <td class="table-p-name"><a href="product-details.html">{{$vt_show_sp->title}}</a></td>
                            <td class="table-p-price">
                                <p id="total_price_money_{{$vt_show_sp->id}}" data-price="{{$vt_show_sp->price}}"
                                    data-id="{{$vt_show_sp->id}}">{{number_format($vt_show_sp->price)}} VNĐ</p>
                            </td>
                            <td class="table-p-qty"><input value="{{$vt_show_sp['qty']}}" name="quantity" type="number"
                                    onchange="myFunction({{$vt_show_sp->id}}, this.value)">
                            </td>
                            <td class="table-total">
                                <p id="p_{{$vt_show_sp->id}}">
                                    {{number_format($vt_show_sp->price * $vt_show_sp['qty'] )}} VNĐ</p>
                            </td>
                        </tr>
                        <input type="hidden" name="id_product[]" id="id_{{$vt_show_sp->id}}"
                            value="{{$vt_show_sp->id}}">
                        <input type="hidden" name="number_product[]" id="num_{{$vt_show_sp->id}}"
                            value="{{$vt_show_sp['qty']}}">
                        @endforeach
                        <tr>
                            <td colspan="6" class="actions">
                                @if(count($show_sp) > 0)
                                <button type="submit" class="button update-cart" name="update_cart" value="Update_cart"
                                    id="demo" disabled> CẬP NHẬT GIỎ HÀNG</button>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="table-total-wrapper d-flex justify-content-end pt-60">
            <div class="table-total-content">
                <h2>Tổng số giỏ hàng</h2>
                <div class="table-total-amount">
                    <div class="single-total-content d-flex justify-content-between">
                        <span>Thành tiền</span>
                        <span class="c-total-price">{{number_format($cart_detail['weight'],0)}} VNĐ</span>
                    </div>
                    <a href="{{route('checkout')}}">Tiến hành thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
<script>
function myFunction(id, num) {
    var total_price_money = document.getElementById("total_price_money_" + id)
        .getAttribute('data-price');
    document.getElementById("p_" + id).innerHTML = currencyFormat(
        total_price_money * num);
    var id = document.getElementById("total_price_money_" + id).getAttribute(
        'data-id');
    document.getElementById("id_" + id).value = id;

    document.getElementById("num_" + id).value = num;
    document.getElementById("demo").disabled = false;
}

function currencyFormat(num) {
    return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + 'VND'
}

function addtocart(prod_qty) {
    var quantity = parseInt(prod_qty);
    if (quantity == 0) {
        document.getElementById("addtocartButton").disabled = true;
    }
}
</script>
@endsection