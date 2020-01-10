@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Giỏ hàng của bạn</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">giỏ hàng của bạn</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Cart Area Start -->
<div class="cart-area table-area pt-110 pb-95">
    <div class="container">
        <form action="{{route('update_cart')}}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <div class="table-responsive">
                <table class="table product-table text-center">
                    <thead>
                        <tr>
                            <th class="table-remove">Xóa</th>
                            <th class="table-image">Hình Ảnh</th>
                            <th class="table-p-name">Sản Phẩm</th>
                            <th class="table-p-price">Giá</th>
                            <th class="table-p-qty">Số Lượng</th>
                            <th class="table-total">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart_detail as $vt_cart_detail)
                        <tr>
                            <td class="table-remove">
                                <a href="{{route('delete_cart',$vt_cart_detail['id'])}}" title="Xóa sản phẩm mà bạn chọn"
                                    class="">
                                    <button><i class="fa fa-trash"></i></button>
                                </a>

                            </td>
                            <td class="table-image">
                                <a href="{{route('show_product_detail',$vt_cart_detail->slug)}}">
                                    <img src="{{asset('storage/'.$vt_cart_detail->image)}}"
                                        alt="{{$vt_cart_detail->title}}">
                                </a>
                            </td>
                            <td class="table-p-name"><a
                                    href="{{route('show_product_detail',$vt_cart_detail->slug)}}">{{$vt_cart_detail->title}}</a>
                            </td>
                            <td class="table-p-price"
                                id="total_price_money_{{$vt_cart_detail['id']}}"
                                data-price="{{$vt_cart_detail['price']}}"
                                data-id="{{$vt_cart_detail['id']}}"
                            >
                                <p>{{number_format($vt_cart_detail['price'])}} VNĐ</p>
                            </td>
                            <td class="table-p-qty">
                                <input value="{{$vt_cart_detail['quantity']}}" name="quantity" type="number"
                                    onchange="countProduct({{$vt_cart_detail['id']}}, this.value)">
                            </td>
                            <td class="table-total"
                                id="p_{{$vt_cart_detail['id']}}">
                                <p>{{number_format($vt_cart_detail['price'] * $vt_cart_detail['quantity'])}} VNĐ</p>
                            </td>
                        </tr>
                        <input type="hidden" name="id_product[]" id="id_{{$vt_cart_detail['id']}}"
                            value="{{$vt_cart_detail['id']}}">
                        <input type="hidden" name="count_products[]" id="num_{{$vt_cart_detail['id']}}"
                            value="{{$vt_cart_detail['quantity']}}">
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="table-bottom-wrapper">
                <div class="table-update d-flex justify-content-end">
                    <button type="submit">Cập nhật giỏ hàng</button>
                    <!-- <input type="submit" value="Cập nhật giỏ hàng"> -->
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="table-total-wrapper d-flex justify-content-end pt-60">
            <div class="table-total-content">
                <h2>Tổng</h2>
                <div class="table-total-amount">
                    <!-- <div class="single-total-content d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span class="c-total-price">$160.00</span>
                    </div>
                    <div class="single-total-content d-flex justify-content-between">
                        <span>Shipping</span>
                        <span class="c-total-price"><span>Flat Rate:</span> $5.00</span>
                    </div>
                    <div class="single-total-content d-flex justify-content-end">
                        <a href="#">Calculate shipping</a>
                    </div> -->
                    <div class="single-total-content d-flex justify-content-between">
                        <span>Toàn bộ</span>
                        <span class="c-total-price">{{number_format($cart_total)}} VNĐ</span>
                    </div>
                    <a href="{{route('show_info_client')}}">Tiến hành thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
<script>
    function countProduct(id, num,cau_r,loan_r,truc_r,congthem_r,kcdt_r,thiluc_r) {

        var total_price_money = document.getElementById("total_price_money_" + id.toString()).getAttribute("data-price");

        document.getElementById("p_" + id.toString()).innerHTML = currencyFormat(total_price_money * num);

        var id = document.getElementById("total_price_money_" + id.toString()).getAttribute('data-id');

        document.getElementById("id_" + id.toString()).value = id;
        document.getElementById("num_" + id.toString()).value = num;
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

    function clickPaymentCart(){
        window.location.href=''
    }
</script>
@endsection