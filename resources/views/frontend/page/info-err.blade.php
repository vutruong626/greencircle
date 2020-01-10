<!-- Login -->
@if ($message = Session::get('err'))
<div class="panel-body">
    <div class="alert alert-warning alert-index" role="alert">
        {{$message}}
    </div>
</div>
<div class="clearfix"></div>
@endif
@if ($message = Session::get('success_login'))
<div class="panel-body">
    <div class="alert alert-warning alert-index" role="alert">
        {{$message}}
    </div>
</div>
<div class="clearfix"></div>
@endif
@if ($message = Session::get('success'))
<div class="panel-body">
    <div class="alert alert-warning alert-index" role="alert">
        {{$message}}
    </div>
</div>
<div class="clearfix"></div>
@endif
<!-- End Login -->
<!-- mail contact -->
@if ($message = Session::get('submit_mail'))
<div class="panel-body">
    <div class="alert alert-warning alert-index" role="alert">
        {{$message}}
    </div>
</div>
<div class="clearfix"></div>
@endif
<!-- end mail contact -->
<!-- zalo -->
<div class="icon-bar cehfgy">
    <a href="{!! $info_contact['show_contact']->fanpage !!}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="{!! $info_contact['show_contact']->skype !!}" target="_blank" class="skype"><i
            class="fa fa-skype"></i></a>
    <a href="{!! $info_contact['show_contact']->youtube !!}" target="_blank" class="youtube"><i
            class="fa fa-youtube"></i></a>
    <br>
    <br>
    <br>
    <br>

</div>
<div class="zalo-chat-widget zalo-chat-cp" data-oaid="4534277754399676367"
    data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"
    style="bottom: 100px !important;"></div>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>