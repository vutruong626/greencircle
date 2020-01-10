
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0px">
    <tbody>
        <tr>
            <td align="center" valign="top" style="padding-top:20px">

                <table width="700" border="0" align="center" cellpadding="0" style="background-color:#fff;width: 100%;"
                    cellspacing="0">

                    <tbody>
                        <tr>
                            <td align="center" valign="top" bgcolor="#0070ce"
                                style="border-left:1px solid #2e4d8d;border-right:1px solid #2e4d8d;border-top:1px solid black;padding:3px;color:#ffff; background: #0070ce; font-size:12px">
                                <a style="color:#fff" href="http://naturecircle.local/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://naturecircle.local&amp;source=gmail&amp;ust=1537777122118000&amp;usg=AFQjCNHs_vWG2wyOSVnO8DGbKy-LcQMn2Q">naturecircle.local</a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top"
                                style="border-left:1px solid #c9d7f1;border-right:1px solid #c9d7f1;padding:10px">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td align="left" valign="top" style="padding-bottom:10px">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" valign="top">

                                                                <div style="border:solid 1px black; padding:5px;font-size:12px;width:auto;margin:0px">
                                                                    Xin chào quý khách:&nbsp;
                                                                    <strong style="color:black; font-weight: bold; font-size: 15px">
                                                                      {{$bill->name}}
                                                                    </strong>
                                                                    <br>
                                                                    Thông tin đơn hàng của quý khách tại <a
                                                                        href="http://naturecircle.local/"
                                                                        style="color:#0070ce;text-decoration:none"
                                                                        target="_blank"
                                                                        data-saferedirecturl="https://www.google.com/url?q=http://naturecircle.local/&amp;source=gmail&amp;ust=1537777122118000&amp;usg=AFQjCNFR0uCvW0T9sxh5zUBPcp4MLyDZHw">naturecircle.local</a>
                                                                    <br>
                                                                    Mã đơn hàng:&nbsp;
                                                                    <strong style="color:black; font-weight: bold; font-size: 15px">
                                                                      {{$bill->code_bill}}
                                                                    </strong>
                                                                </div>
                                                                <br>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" valign="top">
                                                                <p></p>
                                                                <table cellpadding="0" cellspacing="0" width="100%"
                                                                    style="width:100%; border:solid 1px black; padding:25px">
                                                                    <thead style="background-color: #ddd;">
                                                                        <th style="border-bottom: 1px solid black">HÌNH</th>
                                                                        <th style="border-bottom: 1px solid black">TÊN SẢN PHẨM</th>
                                                                        <th style="border-bottom: 1px solid black">GIÁ</th>
                                                                        <th style="border-bottom: 1px solid black">SỐ LƯỢNG</th>
                                                                        <th style="border-bottom: 1px solid black">THÀNH TIỀN</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($cart_detail as $k=>$v)
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted black">
                                                                                <a href="" target="_blank" data-saferedirecturl="">
                                                                                    <?php
                                                                                        $img = $v->url_imgs;
                                                                                    ?>
                                                                                    <img 
                                                                                        src="{{asset('storage/'.$v->image)}}"
                                                                                        alt="{{$v->title}}" border="0"
                                                                                        width="50" height="60">
                                                                                </a>
                                                                            </td>
                                                                            <td style="border-bottom: 1px dotted black" align="left"><a href="" target="_blank" data-saferedirecturl="">{{$v->title}}</a></td>
                                                                            <td style="border-bottom: 1px dotted black" align="right">{{number_format($v->price,0)}} VNĐ</td>  
                                                                            <td style="border-bottom: 1px dotted black" align="center">{{$v->quantity}}</td>
                                                                            
                                                                            <td style="border-bottom: 1px dotted black" align="right">{{number_format($v->price*$v->quantity,0)}} VNĐ</td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr style="background-color: #ddd;">
                                                                            <td colspan="5" align="right"><b>Thanh toán</b></td>
                                                                            <td colspan="1" align="right">
                                                                                <strong style="color:red"> {{number_format($cart_total,0)}} VNĐ</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5" style="text-align:left">
                                                                                <table style="text-align:left;margin-top:20px; padding:25px" width="100%" class="info_cart_title_all" border="0" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                      <tr>
                                                                                          <td colspan="5" style="text-align:left">
                                                                                              <b>THÔNG TIN NGƯỜI MUA</b>
                                                                                          </td>
                                                                                      </tr>
                                                                                        <tr>
                                                                                            <td align="left" class="info_cart_title" valign="middle">HỌ VÀ TÊN:</td>
                                                                                            <td align="left" valign="top">{{$bill['name']}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" class="info_cart_title" valign="middle">SỐ ĐIỆN THOẠI LIÊN HỆ:</td>
                                                                                            <td align="left" valign="top">{{$bill['phone']}} </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" class="info_cart_title" valign="middle">EMAIL:</td>
                                                                                            <td align="left" valign="top"><a href="mailto:{{$bill['email']}}" target="_blank">{{$bill['email']}}</a> </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" class="info_cart_title" valign="middle">ĐỊA CHỈ:</td>
                                                                                            <td align="left" valign="top">{{$bill['address']}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" class="info_cart_title" valign="middle">TỈNH/THÀNH PHỐ:</td>
                                                                                            <td align="left" valign="top">{{$bill['city']}} </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left" class="info_cart_title" valign="middle">QUẬN/HUYỆN:</td>
                                                                                            <td align="left" valign="top">{{$bill['district']}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="5" style="text-align:left">Ghi chú về đơn hàng:</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="5"> {{$bill['note']}} </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                               
                                                                <br>
                                                                <p>CẢM ƠN QUÝ KHÁCH MUA HÀNG TẠI
                                                                  <a href="http://naturecircle.local/" style="color:#0070ce;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://naturecircle.local/&amp;source=gmail&amp;ust=1537777122118000&amp;usg=AFQjCNFR0uCvW0T9sxh5zUBPcp4MLyDZHw">naturecircle.local</a>
                                                                </p>
                                                                <br>
                                                                <p>
                                                                  <img src="{{asset('/img/logo/logo_mksg.png')}}" alt="">
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom:1px dotted #999999">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle" style="padding-top:10px">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#0070ce" height="20"
                                style="border-left:1px solid #2e4d8d;border-right:1px solid #2e4d8d;border-bottom:1px solid #2e4d8d;padding:4px;color:#5fef0a;>
                            </td>
                        </tr>
                        <tr>
                            <td height="20" align="left" valign="top" style="color:red;background-color:#f2f2f2;font-size:13px">
                                Chúng tôi thành thật xin lỗi nếu email này làm phiền bạn.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
