@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Sự kiện <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hoạt động của công ty</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Post Area Start -->
<div class="post-area blog-area pt-110 pb-95 blog-column-3">
    <div class="container">
        <div class="row text-center">
            @foreach($show_company_active as $vt_show_company_active)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('company_activity_detail',$vt_show_company_active->slug)}}">
                            <img src="{{$common_data['hosts'].'/storage/'.$vt_show_company_active->image}}"
                                alt="{{$vt_show_company_active->title}}"></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('company_activity_detail',$vt_show_company_active->slug)}}">{{$vt_show_company_active->title}}</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Oct 30,2018</span>
                        </div>
                        <p>{!! $vt_show_company_active->excerpt !!}</p>
                        <a href="{{route('company_activity_detail',$vt_show_company_active->slug)}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination-wrapper">
            <nav aria-label="navigation">
                <ul class="pagination">
                    {{ $show_company_active->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Post Area End -->
@endsection