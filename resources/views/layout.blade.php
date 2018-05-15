
<!DOCTYPE html>
<html lang="vi"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <link href="https://fonts.googleapis.com/css?family=Elsie:400,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	
	@yield('title')
	
    <link rel="canonical" href="http://www.svanclinic.vn/trang-chu" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{Voyager::image('favicon.ico')}}" type="image/x-icon">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css')}}">
    <script src="{{ URL::to('js/jquery.min.js')}}"></script>
	
	<!-- Added by TinHo-->
	<style>
		.btn-primary {
    font-weight: bold;
    background-color: #3ab572;
    text-transform: uppercase;
}
		.btn-primary:hover{
			background-color: #CB262D;
			border-color: #CB262D;
		}
		
		.wrapper .intro-promotion .promotion-content  .promotion-right:before{
  display: none;
}
	</style>
    @if(isset($script->script1))
    
    {!! 
        $script->script1
    !!}
 
    @endif
    @if(isset($script->script2))
   
    {!! 
        $script->script2
    !!}
   
    @endif
    @if(isset($script->head))
   
    {!! 
        $script->head
    !!}
    
    @endif
    @yield('facebook_meta')
</head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{url('/')}}"><img width="100" src="{{Voyager::image('img/logo.png')}}" alt=""></a>
        <button class="navbar-toggler navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        </button>
      </nav>
<header class="header" id="navbarCollapse">
    <div class="menu">
        <div class="menu-container">
            <div class="right-container">
                <div class="menu-wrapper">
                    <ul>
                                    <li class="home">
                                    <a href="{{url('/')}}" class="home-link" rel="nofollow">
                                        <img width="auto" src="{{Voyager::image('img/logo.png')}}" alt=""> </a>
                                    </li>
                                    @foreach($menuhome as $key => $value)
                                            <?php
                                                $slug = "";
                                                if($value->themes == '1'){
                                                    $slug = 'c/';
                                                }
                                                if($value->themes == '2'){
                                                    $slug = 'n/';
                                                }
                                            ?>
                                        <li class="@if($value->child != '1' ) hassub @endif @if($value->slug == 'tin-tuc' ) hassub @endif"">
                                            <a href="{{url('/')}}/{{$slug}}{{$value->slug}}" rel="nofollow">{{ $value->name }}</a>
                                            <?php 
                                                if($value->child != null) {
                                                    $child = DB::table('categories')->where([['parent_id','=',$value->child],['hide','!=', '1']])->get();
                                                    $id_cate = DB::table('categories')->where('slug','=','dich-vu')->get();
                                                }
                                            ?>
                                            
                                            @if(isset($child)  && count($child) > 0 && $value->themes != '3')
                                            <span class="icon-caret"></span>
                                            <div class="submenu">
                                                <ul>
                                                    @foreach($child as $key => $values)
                                                    <?php
                                                        $slugs ='';
                                                        if($value->themes == '1'){
                                                            $slugs = 'dich-vu';
                                                        }
                                                        $categoryParent = DB::table('categories')->where('id','=',$values->parent_id)->first(); 
                                                        if($value->themes == '2'){
                                                            $slugs = 'n/'.$categoryParent->slug;
                                                        }
                                                    ?>
                                                        <li>
                                                            <a href="{{url('')}}/{{$slugs}}/{{$values->slug}}">{{ $values->name }}</a>
                                                            <?php 
                                                                // $childs = DB::table('categories')->where('parent_id','=',$values->id)->get();      
                                                            ?>
                                                                <!-- @if(isset($childs) && count($childs) > 0)
                                                                <div class="secondsub">
                                                                    <ul>
                                                                        @foreach($childs as $key => $valuess)
                                                                                <li><a href="{{url('/')}}/{{$values->slug}}/{{$valuess->slug}}">Giảm b&#233;o c&#244;ng nghệ Contri UltraShape</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                @endif -->
                                                            
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </li>
                                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<div class="btn-hotline" data-toggle="modal" data-target="#modal-19" style="cursor: pointer">
    <div class="icon">
        <div class="icon-img">
            <img src="{{Voyager::image('logo.png')}}" alt="">
        </div>
    </div>
    <div class="hotline-content">
        <h4>Tư Vấn Miễn Phí</h4>
    </div>
</div>
    
<a class="hotline-mobile" href="tel:0901690084">
    <img src="{{Voyager::image('icon-hotline.gif')}}" width="50px" alt="">
</a>
<div class="wrapper">
        <div class="flower-theme-default">
            <div class="bottom-flower"><img src="http://www.svanclinic.vn/Content/layout/images/flower/01.png" alt=""></div>
        </div>
      
    @yield('content')
</div>
<footer class="footer">
        <div class="footer-2">
            <div class="container">
                <div class="row">
                        <ul class="footer-menu col-md-6">
                            <li><img width="45" height="45" src="{{Voyager::image('img/placeholder.png')}}" alt=""><span>363 – 365, Phạm Ngũ Lão, Phường Phạm Ngũ Lão, Quận 1, TP. HCM</span></li>
                            <li><img width="45" height="45" src="{{Voyager::image('img/placeholder.png')}}" alt=""><span>61 - City Land Center Hill - Trần Thị Nghỉ, Phường 7, Quận Gò Vấp, Tp.HCM</span></li>
                            <li><img width="35" height="35" src="{{Voyager::image('img/phone-call.png')}}" alt=""><span>Hotline: 19000117</span></li>
                            <li><img width="30" height="30" src="{{Voyager::image('img/calendar.png')}}" alt=""><span>Thời gian làm việc | T2 -CN 8:00 - 20:00 </span></li>
                        </ul>
                        <div class="col-md-6">
                        <div class="fb-page" 
                            data-href="https://www.facebook.com/svanclinic.vn"
                            data-width="380" 
                            data-hide-cover="false"
                            data-show-facepile="false"></div>
                            <div class="fb-page" 
  data-tabs="timeline,events,messages"
  data-href="https://www.facebook.com/YoloBookStore"
  data-width="380" 
  data-hide-cover="false"></div>
                        <ul class="social-network social-circle ">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google"></i></a></li>
                        </ul>
                        </div>
                </div>
            </div>
        </div> 
    <div id="dmca">
        <div class="dmca-wrapper">
			<span>*Kết quả c&#243; thể đa dạng t&#249;y theo cơ địa mỗi người</span></br>
			<span>&copy; Copyright 2016 by </span>
			<a href="http://www.svanclinic.vn">Svan Clinic & Spa</a>
            <a href="http://www.dmca.com/Protection/Status.aspx?ID=228fcea9-a20d-4b48-9b62-7186a46f564b" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-09.png?ID=228fcea9-a20d-4b48-9b62-7186a46f564b" alt="DMCA.com Protection Status"></a> </script>
        </div>
    </div>
			
		
</footer>


<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<button class="totop" titlle="Đầu trang"> </button>
<div class="custom-form style-2" >
    <div class="modal fade in" id="modal-20">
        <div class="modal-dialog" style="margin-top:150px;">
            <div class="modal-content" style="margint: auto">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">ĐĂNG KÝ</h4>
                </div>
                
                    <div class="modal-body" style="background: url('{{Voyager::image('background.jpg')}}') no-repeat left">
                            <p> Cảm ơn bạn đã đăng ký, chúng tôi sẽ sớm liên hệ lại với bạn. </p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đ&#243;ng</button>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="custom-form style-2">
    <div class="modal fade in" id="modal-19">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">ĐĂNG KÝ NHẬN ƯU ĐÃI <br>& TƯ VẤN MIỄN PHÍ</h4>
                </div>
                <form id="consultant-form" method="get">
                    <div class="modal-body" style="background: url('{{Voyager::image('background.jpg')}}') no-repeat left">
                            <div class="form-group">
                                <input id="username-customer" type="text" name="name" class="form-control" placeholder="Họ t&#234;n">
                            </div>
                            
                            <div class="form-group">
                           
                                <input  onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;" type="tel" pattern="[0-9]" id="phone-customer" name="phone" maxlength="11" class="form-control" placeholder="Số điện thoại (bắt buộc)" require>
                            </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-customer">Đăng Ký</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <div id="button">
        <div class="button">
            <!--<button class="btn btn-default" data-toggle="modal" data-target="#modal-19">
                <img src="/Content/layout/mobile/images/icon/mobile-icon-1.png" alt="">
                Ưu Đ&#227;i
            </button>-->
            <a href="http://www.svanclinic.vn/uu-dai-thang/" class="btn btn-default">
                <img src="{{Voyager::image('discount.png')}}" alt="" style="position:relative;top: -2px;">
                Ưu Đãi
            </a>
        </div>
        <div class="button">
            <button class="btn btn-default subiz-expand" onclick="_sbzq.push(['expandWidget']);">
                <img src="{{Voyager::image('chat.png')}}" alt="">
                chat
            </button>
        </div>
    </div>
		<!--<script type="text/javascript">window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push([&quot;_setAccount&quot;,47095]);var n=e.location.protocol==&quot;https:&quot;?&quot;https:&quot;:&quot;http:&quot;;var r=document.createElement(&quot;script&quot;);r.type=&quot;text/javascript&quot;;r.async=true;r.src=n+&quot;//static.subiz.com/public/js/loader.js&quot;;var i=document.getElementsByTagName(&quot;script&quot;)[0];i.parentNode.insertBefore(r,i)}(window);</script>-->
        <!-- Jquery core JavaScript -->
        <script src="{{ URL::to('js/bootstrap.js')}}"></script>
        <script src="{{ URL::to('js/slick.min.js')}}"></script>
        <script src="{{ URL::to('js/wow.js')}}"></script>
        <!-- my core JavaScript-->
        <script src="{{ URL::to('js/main.js')}}"></script>
        <script src="{{ URL::to('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<script>
		setTimeout(function () {
            $(".img_popup").addClass("display");
            $(".opacity").addClass("opacity1");
        }, 5000);
        $("html").click(function () {
            $(".img_popup").addClass("hidden");
            $(".opacity").css('display', 'none');
        });
        </script>
        @yield('javascript')
		<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
        <script src="https://apis.google.com/js/platform.js" async defer>
          {lang: 'vi'}
        </script>
    </body>
</html>