@extends('frontend.frontend')
@section('content')
@inject('PageCtrl', 'App\Http\Controllers\Frontend\ProductController')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Sản Phẩm Naturecircle</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm NatureCircle</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Shop Area Start -->
<div class="shop-area pt-110 pb-100 bg-gray mb-95">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="ht-product-tab">
                    <div class="ht-tab-content">
                        <div class="nav" role="tablist">
                            <a class="active grid" href="#grid" data-toggle="tab" role="tab" aria-selected="true"
                                aria-controls="grid"><i class="fa fa-th"></i></a>
                            <a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false"
                                aria-controls="list"><i class="fa fa-list"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="ht-product-shop tab-content text-center">
                    <div class="tab-pane active show fade" id="grid" role="tabpanel">
                        <div class="custom-row">
                            @foreach($show_product as $vt_show_product)
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{route('show_product_detail',[$vt_show_product->slug_parent,$vt_show_product->slug])}}">
                                            <img src="{{asset('storage/'.$vt_show_product->image)}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="{{asset('storage/'.$vt_show_product->image)}}" data-toggle="modal"
                                                        data-target="#productModal"><i class="icon icon-Search"></i></a>
                                                </li>
                                            </ul>
                                            <!-- <button type="button" class="p-cart-btn">Thêm vào giỏ hàng</button> -->
                                            <a href="{{route('add_cart',$vt_show_product->id)}}" class="p-cart-btn">Thêm vào giỏ hàng</a>
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
                                        <h5><a href="{{route('show_product_detail',[$vt_show_product->slug_parent,$vt_show_product->slug])}}">{{$vt_show_product->title}}</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">{{number_format($vt_show_product->price)}} VNĐ</span>
                                            <!-- <span class="old-price">$92.00</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade text-left" id="list" role="tabpanel">
                        @foreach($show_product as $vt_show_product)
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('show_product_detail', [$vt_show_product->slug_parent,$vt_show_product->slug])}}">
                                    <img src="{{asset('storage/'.$vt_show_product->image)}}" alt="">
                                </a>
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="{{asset('storage/'.$vt_show_product->image)}}" data-toggle="modal"
                                                data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="{{route('show_product_detail', [$vt_show_product->slug_parent,$vt_show_product->slug])}}">{{$vt_show_product->title}}</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">{{number_format($vt_show_product->price)}} VNĐ</span>
                                    <!-- <span class="old-price">$122.00</span> -->
                                </div>
                                {!! $vt_show_product->excerpt !!}
                                <button type="button" class="p-cart-btn default-btn">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <!-- <p>Showing 1 to 9 of 11 (2 Pages)</p> -->
                    <nav aria-label="navigation">
                        <ul class="pagination">
                        {{ $show_product->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <!-- <h3>Layered Navigation</h3> -->
                    <div class="sidebar-widget">
                        <h3>Danh Mục</h3>
                        <div class="sidebar-widget-option-wrapper">
                             <?php $cate_product_child_1 = $PageCtrl->SelectCategoryProduct(null);?>
                            @foreach($cate_product_child_1 as $vt_show_category_product)
                            <div class="sidebar-widget-option">
                                <a href="{{route('show_product', $vt_show_category_product->slug)}}"><label for="cat1">{{$vt_show_category_product->name}} <span>=> {{$vt_show_category_product->order}}</span></label></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    
                </div>
                <div class="sidebar-banner-img">
                    <a href="#"><img src="{{asset('assets/img/banner/6.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
@endsection