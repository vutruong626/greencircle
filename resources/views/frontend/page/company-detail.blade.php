@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Tin tức & Sự kiện <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('company_activity')}}">Tin tức</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$show_company_detail->title}}</li>
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
                {!! $show_company_detail->body !!}
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <div class="sidebar-widget">
                        <h3>Tin tức liên quan </h3>
                        <div class="sidebar-widget-option-wrapper">
                            @foreach($show_company_active as $vt_show_company_active)
                            <div class="sidebar-widget-option">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="{{route('news_detail',$vt_show_company_active->slug)}}"><img style="width: 100px;"
                                                src="{{$common_data['hosts'].'/storage/'.$vt_show_company_active->image}}"
                                                alt="{{$vt_show_company_active->title}}"></a>
                                    </div>
                                    <div class="col-md-8 col-sm-8" style="padding: 0px 0px 0px 27px;line-height: 1.6;">
                                        <a
                                            href="{{route('news_detail',$vt_show_company_active->slug)}}">{{$vt_show_company_active->title}}</a>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Post Area End -->
@endsection