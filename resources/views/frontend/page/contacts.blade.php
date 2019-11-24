@extends('frontend.frontend')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-12 text-center">
    <div class="container">
        <h1>Liên Hệ <span style="color: #78a206;">Greencircle</span></h1>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Google Map Area Start -->
<div class="google-map-area">
    <div id="contacts" class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7643941040656!2d106.58364321434634!3d10.752632862573776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c54c5a45679%3A0x95ad6eb0f2830073!2zNDQ0OSBOZ3V54buFbiBD4butdSBQaMO6LCBUw6JuIFThuqFvIEEsIELDrG5oIFTDom4sIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1574526106042!5m2!1svi!2s"
            width="600" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen=""></iframe>
    </div>
</div>
<!-- Google Map Area End -->
<!-- Contact Area Start -->
<div class="contact-area fix mb-95">
    <div class="contact-form pt-110">
        <h1 class="contact-title">NÓI CHO CHÚNG TÔI BIẾT BẠN CÓ THẮC MẮC GÌ ?</h1>
        <form id="contact-form" action="https://demo.hasthemes.com/naturecircle-preview/naturecircle/mail.php"
            method="post">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" id="name" placeholder="First Name *">
                </div>
                <div class="col-md-6">
                    <input type="text" name="l_name" id="l_name" placeholder="Last Name *">
                </div>
                <div class="col-md-6">
                    <input type="text" name="email" id="email" placeholder="Email *">
                </div>
                <div class="col-md-6">
                    <input type="text" name="subject" id="subject" placeholder="Subject *">
                </div>
            </div>
            <textarea name="message" id="message" placeholder="Message *"></textarea>
            <button type="submit" class="submit-btn default-btn">
                <span>Send Email</span>
            </button>
            <p class="form-messege"></p>
        </form>
    </div>
    <div class="contact-address pt-110 pb-100">
        <h1 class="contact-title">LIÊN HỆ CHÚNG TÔI</h1>
        <div class="contact-info">
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
                quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
            <div class="contact-list-wrapper">
                <div class="contact-list">
                    <i class="fa fa-fax"></i>
                    <span>Address : 40 Baria Sreet 133/2 NewYork City</span>
                </div>
                <div class="contact-list">
                    <i class="fa fa-phone"></i>
                    <span>Info@naturecircle.com</span>
                </div>
                <div class="contact-list">
                    <i class="fa fa-envelope-o"></i>
                    <span>0(1234) 567 890</span>
                </div>
            </div>
        </div>
        <div class="working-time">
            <h2>Giờ làm việc</h2>
            <span><span>Monday – Saturday:</span> 08AM – 22PM</span>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection