@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Hoạt Động NatureCircle</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$show_company->title}}}</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Post Area Start -->
<div class="post-area blog-area pt-110 pb-95 post-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                {!! $show_company->body !!}
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <h3>Bài viết gần đây</h3>
                    <div class="sidebar-widget-option-wrapper">
                        @foreach($show_cate_company as $vt_show_cate_company)
                        <div class="sidebar-widget-option botom">
                            <a href="{{route('company_activity_detail',[$vt_show_cate_company->slug_parent,$vt_show_cate_company->slug])}}"
                                style="display: flex;">
                                <img src="{{asset('storage/'.$vt_show_cate_company->image)}}" alt="" width="90">&ensp;
                                <span>{{$vt_show_cate_company->title}}</span> </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar-banner-img">
                    <a href="#"><img src="{{asset('assets/img/banner/6.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post Area End -->
@endsection