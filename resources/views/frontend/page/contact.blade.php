@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Liên Hệ</h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Google Map Area Start -->
<div class="google-map-area">
{!! $show_contact->map!!}
</div>
<!-- Google Map Area End -->
<!-- Contact Area Start -->
<div class=" contact-area fix mb-95">
    <div class="container contact-form pt-110">
        <h1 class="contact-title">Để lại lời nhắn cho chúng tôi biết bạn cần gì</h1>
        <form action="{{route('post_contact')}}" method="post">
            {{ csrf_field() }} 
            <label for="fname">Họ & Tên</label>
            <input type="text" id="name" name="name" placeholder="Họ và tên ..">
            <label for="fname">Số Điện Thoại</label>
            <input type="text" id="fname" name="phone" placeholder="Số điện thoại ..">
            <label for="fname">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">
            <label for="subject">Nội dung </label>
            <textarea id="message" name="message" placeholder="Nội dung.." style="height:140px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
    
    <div class="contact-address pt-110 pb-100">
        <h1 class="contact-title">Liên Hệ Với Chúng Tôi</h1>
        <div class="contact-info">
            {!! $show_contact->title !!}
            <div class="contact-list-wrapper">
                <div class="contact-list">
                    <i class="fa fa-fax"></i>
                    <span>Địa chỉ : {{$show_contact->address}}</span>
                </div>
                <div class="contact-list">
                    <i class="fa fa-phone"></i>
                    <span>Số điện thoại : <a href="tel:+{{$show_contact->phone}}">{{$show_contact->phone}}</a> </span>
                </div>
                <div class="contact-list">
                    <i class="fa fa-envelope-o"></i>
                    <span>Email : <a href="mailto:{{$show_contact->email}}">{{$show_contact->email}}</a></span>
                </div>
            </div>
        </div>
        <div class="working-time">
            {!! $show_contact->working_hours !!}
        </div>
    </div>
</div>
<!-- Contact Area End -->
@endsection