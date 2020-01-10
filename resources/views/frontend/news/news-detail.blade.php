@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>{{$show_news->title}}</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$show_news->title}}</li>
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
                <div class="single-post-item text-center pb-70">
                    {!! $show_news->body !!}
                    <div class="single-post-tag">
                        <a href="#" class="scroll-down">3 comments</a>
                        <div class="single-post-tag-link">
                            <span> / Tags:</span>
                            <a href="#">hipster,</a>
                            <a href="#">holidays,</a>
                            <a href="#">light,</a>
                            <a href="#">place,</a>
                            <a href="#">video-2</a>
                        </div>
                    </div>
                    <h4 class="single-post-share">Share this post</h4>
                    <div class="post-social-link">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-pinterest"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="post-comment-area pt-90 scroll-area">
                    <!-- <h4 class="post-title">Có {{ $show_comment_news->count() }} comments</h4> -->
                    <div class="post-comment-container">
                        @foreach($show_comment_news as $vt_show_comment_news)
                        @if($vt_show_comment_news->id == $show_news->id)
                        <div class="single-post-comment">
                            <div class="single-post-image">
                                <img src="{{asset('assets/img/icon/logo.jpg')}}" alt="">
                            </div>
                            <div class="single-post-content">
                                <div class="single-post-info">
                                    <a href="#">{{$vt_show_comment_news->name}}</a>
                                    <span>{{$vt_show_comment_news->created_at}}</span>
                                    {!! $vt_show_comment_news->body !!}
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <form action="{{route('show_news_comment')}}" method="post" class="post-comment-form" id="respond">
                    {{ csrf_field() }} 
                    <input type="hidden" name="id" value="{{$show_news->id}}">
                    <input type="hidden" name="news_id" value="{{$show_news->id}}">
                    <h4 class="post-title">Để lại một lời bình luận cho chúng tôi</h4>
                    <label for="post-text">Comment</label>
                    <textarea name="body" id="post-text" cols="30" rows="10"></textarea>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="post-name">Tên *</label>
                            
                            <input type="text" id="post-name" name="name" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="post-email">Email *</label>
                            <input type="email" id="post-email" name="email" required>
                        </div>

                    </div>
                    <button type="submit" class="default-btn">post comment</button>
                </form>
                <br>
                @if ($message = Session::get('success'))
                <div class="panel-body">
                    <div class="alert alert-warning" role="alert">
                        {{$message}}
                    </div>
                </div>
                <div class="clearfix"></div>
                @endif
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    <div class="sidebar-widget">
                        <h3>Bài viết gần đây</h3>
                        <div class="sidebar-widget-option-wrapper">
                            @foreach($show_news_list as $vt_show_news_list)
                            <div class="sidebar-widget-option">
                                <a href="{{route('show_news_detail',[$vt_show_news_list->slug_parent,$vt_show_news_list->slug])}}"
                                    style="display: flex;">
                                    <img src="{{asset('storage/'.$vt_show_news_list->image)}}" alt="" width="90">&ensp;
                                    <span>{{$vt_show_news_list->title}}</span> </a>
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
</div>
<!-- Post Area End -->
@endsection