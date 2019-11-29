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
<div class="post-area blog-area pt-110 pb-95 blog-column">
    <div class="container">
        <div class="row">
            <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8">
                <div class="row text-center ajax-showdata">
                    @foreach($show_news as $vt_show_news)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="{{route('news_detail',$vt_show_news->slug)}}">
                                    <img src="{{$common_data['hosts'].'/storage/'.$vt_show_news->image}}" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="{{route('news_detail',$vt_show_news->slug)}}">{{$vt_show_news->title}}</a></h4>
                                <div class="post-meta">
                                    <!-- <span class="author-name">post by: <span>Naturecircle Themes</span></span> -->
                                    <span class="post-date"> {{$vt_show_news->created_at}}</span>
                                </div>
                                <p>{!! $vt_show_news->excerpt !!}</p>
                                <a href="{{route('news_detail',$vt_show_news->slug)}}" class="default-btn">Xem thêm</a>
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
                        <h3>Danh Mục Tin Tức</h3>
                        <div class="sidebar-widget-option-wrapper">
                            @foreach($show_cate_news as $vt_show_cate_news)
                            <div class="sidebar-widget-option item-click" data-id="{{$vt_show_cate_news->id}}">
                                <a>{{$vt_show_cate_news->name}} <span>( {{$vt_show_cate_news->order}} )</span></a>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).on('click', '.item-click', function() {
    //active or remove menu
    $(".item-click").removeClass("active-menu");
    $(this).addClass("active-menu");
    var id = $(this).attr('data-id');
    $.ajax({
        url: '/getAjaxCategoryNews/' + id,
        type: "GET",
        dataType: 'html',
        async: false,
        data: {},
        success: function(res) {
            data = JSON.parse(res);
            console.log(data);
            var element = '';
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    var slug = data[i].slug;
                    element +=
                        '<div class="col-lg-6 col-md-6">'+
                            '<div class="single-blog">'+
                                '<div class="blog-image">'+
                                    '<a href="{{asset('chi-tiet-tin-tuc','') }}/'+ slug +'">'+
                                        '<img src="public/storage/' + data[i].image +'" alt="">'+
                                    '</a>'+
                                '</div>'+
                                '<div class="blog-text">'+
                                    '<h4>'+
                                        '<a href="{{asset('chi-tiet-tin-tuc','') }}/'+ slug +'">'+data[i].title+
                                        '</a>'+
                                    '</h4>'+
                                    '<div class="post-meta">'+
                                        '<span class="author-name">'+'post by:' +'<span>'+'Naturecircle Themes'+'</span></span>'+
                                        '<span class="post-date">'+ '- Oct 30,2018'+'</span>'+
                                    '</div>'+
                                    '<p>'+data[i].excerpt+'</p>'+
                                    '<a href="{{asset('chi-tiet-tin-tuc','') }}/'+ slug +'" class="default-btn">'+'Xem thêm'+'</a>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                }
                $('.ajax-showdata').html(element);
            }
        }
    });
    console.log($(this).attr('data-id'));
});
</script>
<!-- Post Area End -->
@endsection