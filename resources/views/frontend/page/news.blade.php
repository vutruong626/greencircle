@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Tin tức & Sự kiện <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Post Area Start -->
<div class="post-area blog-area pt-110 pb-95 blog-column-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('news_detail')}}"><img src="{{$common_data['hosts'].'/assets/img/blog/1.jpg'}}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('news_detail')}}">Coconut improve heart and immunity.</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Oct 30,2018</span>
                        </div>
                        <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk make it
                            quite popular.</p>
                        <a href="{{route('news_detail')}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('news_detail')}}"><img src="{{$common_data['hosts'].'/assets/img/blog/2.jpg'}}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('news_detail')}}">The most healthful food you can eat.</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Sep 11,2018</span>
                        </div>
                        <p>Health benefits of apple include improved digestion, prevention of stomach disorders,
                            gallstones.</p>
                        <a href="{{route('news_detail')}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('news_detail')}}"><img src="{{$common_data['hosts'].'/assets/img/blog/5.jpg'}}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('news_detail')}}">The most healthful food you can eat.</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Sep 11,2018</span>
                        </div>
                        <p>Health benefits of apple include improved digestion, prevention of stomach disorders,
                            gallstones.</p>
                        <a href="{{route('news_detail')}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('news_detail')}}"><img src="{{$common_data['hosts'].'/assets/img/blog/2.jpg'}}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('news_detail')}}">The most healthful food you can eat.</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Sep 11,2018</span>
                        </div>
                        <p>Health benefits of apple include improved digestion, prevention of stomach disorders,
                            gallstones.</p>
                        <a href="{{route('news_detail')}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('news_detail')}}"><img src="{{$common_data['hosts'].'/assets/img/blog/3.jpg'}}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('news_detail')}}">Delicious and nutritious vegetable.</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Apr 22,2018</span>
                        </div>
                        <p>Research shows drinking beetroot juice benefit digestion, boost athletic performance. They
                            are a good source.</p>
                        <a href="{{route('news_detail')}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="{{route('news_detail')}}"><img src="{{$common_data['hosts'].'/assets/img/blog/4.jpg'}}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="{{route('news_detail')}}">Coconut improve heart and immunity.</a></h4>
                        <div class="post-meta">
                            <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                            <span class="post-date"> - Oct 30,2018</span>
                        </div>
                        <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk make it
                            quite popular.</p>
                        <a href="{{route('news_detail')}}" class="default-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-wrapper">
            <nav aria-label="navigation">
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">></a></li>
                    <li class="page-item"><a class="page-link" href="#">>|</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Post Area End -->
@endsection