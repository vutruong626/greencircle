@extends('frontend.frontend')
@section('content')
@inject('PageCtrl', 'App\Http\Controllers\Frontend\PageController')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Tin Tức & Sự Kiện NatureCircle</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin Tức & Sự Kiện</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Post Area Start -->
<div class="post-area blog-area pt-110 pb-95 blog-column">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="row text-center">
                    @foreach($show_news as $vt_show_news)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="{{route('show_news_detail',[$vt_show_news->slug_parent,$vt_show_news->slug])}}">
                                <img src="{{asset('storage/'.$vt_show_news->image)}}" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="{{route('show_news_detail',[$vt_show_news->slug_parent,$vt_show_news->slug])}}">{{$vt_show_news->title}}</a></h4>
                                <div class="post-meta">
                                    <span class="author-name">Danh mục: <span>{{$vt_show_news->name}}</span></span>
                                    <span class="post-date"> | {{date('d-m-Y',strtotime($vt_show_news->created_at))}}</span>
                                </div>
                                <div class="cut-dong">{!! $vt_show_news->excerpt !!}</div>
                                <a href="{{route('show_news_detail',[$vt_show_news->slug_parent,$vt_show_news->slug])}}" class="default-btn">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination-wrapper">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            {{ $show_news->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <div class="sidebar-widget">
                        <h3>Danh Mục<!--  --></h3>
                        <div class="sidebar-widget-option-wrapper">
                            <?php $cate_new_child_1 = $PageCtrl->SelectCategory(null);
                                
                            ?>
                            @foreach($cate_new_child_1 as $vt_show_category_news)
                            <div class="sidebar-widget-option">
                                <a href="{{route('show_news', $vt_show_category_news->slug)}}" class="{{ url()->current() == route('show_news', $vt_show_category_news->slug) ? 'selected' : ''}}">{{$vt_show_category_news->name}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h3>Product Tags</h3>
                        <ul class="sidebar-widget-tag">
                            <li><a href="#">chilled</a></li>
                            <li><a href="#">Dark</a></li>
                            <li><a href="#">Euro</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">hardware</a></li>
                            <li><a href="#">hat</a></li>
                            <li><a href="#">hipster</a></li>
                            <li><a href="#">holidays</a></li>
                            <li><a href="#">light</a></li>
                            <li><a href="#">cup</a></li>
                            <li><a href="#">place</a></li>
                            <li><a href="#">t-shirt</a></li>
                            <li><a href="#">travel</a></li>
                            <li><a href="#">video-2</a></li>
                            <li><a href="#">white</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post Area End -->
@endsection