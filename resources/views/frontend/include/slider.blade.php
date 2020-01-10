<!-- Hero Area Start -->
<div class="ht-hero-section fix">
    <div class="ht-hero-slider">
        <!-- Single Slide Start -->
        @foreach($show_slider as $vt_show_slider)
        @if(isset($vt_show_slider->active) && $vt_show_slider->active ==1)
        <div class="ht-single-slide" style="background-image: url('{{asset('storage/'.$vt_show_slider->image)}}')">
            <div class="ht-hero-content-one container">
                <h1 class="cssanimation leDoorCloseLeft sequence">{{$vt_show_slider->title}}</h1>
                <p>{!! $vt_show_slider->excerpt !!}</p>
                <a href="{{$vt_show_slider->link}}" class="default-btn">Chi tiết</a>
            </div>
        </div>
        @endif
        @endforeach
        <!-- Single Slide End -->
    </div>
</div>
<!-- Hero Area End -->