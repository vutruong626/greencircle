@extends('frontend.frontend')
@section('content')
@inject('PageCtrl', 'App\Http\Controllers\Frontend\PageController')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Hoạt Động Công Ty</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Công Ty NatureCirle</li>
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
                    @foreach($show_company as $vt_show_company)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="{{route('company_activity_detail',[$vt_show_company->slug_parent,$vt_show_company->slug])}}"><img src="{{asset('storage/'.$vt_show_company->image)}}" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="{{route('company_activity_detail',[$vt_show_company->slug_parent,$vt_show_company->slug])}}">{{$vt_show_company->title}}</a></h4>
                                <div class="post-meta">
                                    <span class="author-name">Danh mục: <span>{{$vt_show_company->name}}</span></span>
                                    <span class="post-date"> -| {{$vt_show_company->created_at}}</span>
                                </div>
                                {!! $vt_show_company->description !!}
                                <a href="{{route('company_activity_detail',[$vt_show_company->slug_parent,$vt_show_company->slug])}}" class="default-btn">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination-wrapper">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            {{ $show_company->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-wrapper">
                    
                    <div class="sidebar-widget">
                        <h3>Danh mmục tin tức</h3>
                        <?php $cate_company_child_1 = $PageCtrl->SelectCategoryCompany(null);?>
                        <div class="sidebar-widget-option-wrapper">
                            @foreach($cate_company_child_1 as $vt_cate_company_child_1)
                            <div class="sidebar-widget-option">
                                <a href="{{route('company_activity',$vt_cate_company_child_1->slug)}}" >{{$vt_cate_company_child_1->name}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post Area End -->
@endsection