
<!DOCTYPE html>
<html lang="vi"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <link href="https://fonts.googleapis.com/css?family=Elsie:400,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	@yield('title')
	<meta property="fb:app_id" content="233253610499667" />
	@yield('facebook_meta')
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
</head>
    <body>
        @if(isset($script->body))
    
        {!! 
            $script->body
        !!}
     
        @endif
        
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{url('/')}}{{App::isLocale('en')?"/en" : ""}}"><img width="100" src="{{Voyager::image('img/logo.png')}}" alt=""></a>
         <div class="language">
            <a href="https://www.svanclinic.vn/en/" class="lang-en"><img src="https://www.svanclinic.vn/img/en.png" width="31"></a>
            <a href="https://www.svanclinic.vn" class="lang-vi"><img src="https://www.svanclinic.vn/img/vi.png"  width="31"></a>
        </div>
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
                                    <a href="{{url('/')}}{{App::isLocale('en')?"/en" : ""}}" class="home-link" rel="nofollow">
                                        <img width="auto" src="{{Voyager::image('img/logo.png')}}" alt=""> </a>
                                    </li>
                                    @foreach($menuhome as $key => $value)
                                        
                                        <li class="@if($value->child != '1' ) hassub @endif @if($value->slug == App::isLocale('en')? "news" : "tin-tuc"  ) hassub @endif"">
                                            <a href="{{url('/')}}{{App::isLocale('en')?"/en" : ""}}/{{$value->slug}}" rel="nofollow">{{ $value->name }}</a>
                                            <?php 
                                            
                                                if($value->child != null) {
                                                    if(App::isLocale('en')){
                                                        $child = DB::table('categories')->where([['parent_id','=',$value->child],['lang_code','=','en'],['hide','!=', '1']])->get(); 
                                                    }else {
                                                        $child = DB::table('categories')->where([['parent_id','=',$value->child],['lang_code','=','vi'],['hide','!=', '1']])->get(); 
                                                    }
                                                
                                                    $id_cate = DB::table('categories')->where('slug','=', App::isLocale('en')? "services" : "dich-vu")->get();
                                                }
                                            ?>
                                            
                                            @if(isset($child)  && count($child) > 0 && $value->themes != '3')
                                            <span class="icon-caret"></span>
                                            <div class="submenu">
                                                <ul>
                                                   
                                                    @foreach($child as $key => $values)
                                                        <li>
                                                            <a href="{{url('')}}{{App::isLocale('en')?"/en" : ""}}/{{$value->slug}}/{{$values->slug}}">{{ $values->name }}</a>
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
                                    <li class="lang">
                                        <div class="language">
                                            <a href="https://www.svanclinic.vn/en/" class="lang-en"><img src="https://www.svanclinic.vn/img/en.png" width="31"></a>
                                            <a href="https://www.svanclinic.vn" class="lang-vi"><img src="https://www.svanclinic.vn/img/vi.png"  width="31"></a>
                                        </div>
                                    </li>
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
        <h4>{{ __('web.support') }}</h4>
    </div>
</div>
    
<a class="hotline-mobile" href="tel:0903041597"  onclick="ga('send', 'event', 'Phone Call Tracking', 'Click to Call', '0903041597', 0);">
    <img src="{{Voyager::image('icon-hotline.gif')}}" width="70px" alt="">
</a>
<div class="wrapper">
        <div class="flower-theme-default">
            <div class="bottom-flower"><img src="{{Voyager::image('01.png')}}" alt=""></div>
        </div>
      
    @yield('content')
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<footer class="footer">
        <div class="footer-2">
            <div class="container">
                <div class="row">
                        <ul class="footer-menu col-md-6">
                            <li><img width="45" height="45" src="{{Voyager::image('img/placeholder.png')}}" alt=""><span>{{ __('web.address1') }}</span></li>
                            <li><img width="45" height="45" src="{{Voyager::image('img/placeholder.png')}}" alt=""><span>{{ __('web.address2') }}</span></li>
                            <li><img width="35" height="35" src="{{Voyager::image('img/phone-call.png')}}" alt=""><span>Hotline: 0903041597</span></li>
                            <li><img width="30" height="30" src="{{Voyager::image('img/calendar.png')}}" alt=""><span>{{ __('web.working') }} | {{ __('web.timeWorking') }} 8:00 - 20:00 </span></li>
                        </ul>
                        <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-10">
                            <div class="fanpage">
                                <div class="fb-page" 
                                  data-href="https://www.facebook.com/svanclinic.vn"
                                  data-hide-cover="false"
                                  data-width="380"
                                  data-show-facepile="false" 
                                  data-show-posts="false">
                                </div>
                            </div>
                            <br>
                            <ul class="social-network social-circle ">
                                <li><a href="https://www.facebook.com/svanclinic.vn" class="icoFacebook" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCcgNpU8MzgEuEpgbWVhvLCw" class="icoGoogle" title="Twitter"><i class="fa fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <div id="dmca">
        <div class="dmca-wrapper">
			<span>*Kết quả c&#243; thể đa dạng t&#249;y theo cơ địa mỗi người</span></br>
			<span>&copy; Copyright 2016 by </span>
			<a href="https://www.svanclinic.vn">Svan Clinic & Spa</a>
            <a href="//www.dmca.com/Protection/Status.aspx?ID=d12f7f70-e0ca-4715-876b-8b3bd01a27e4" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca-badge-w150-5x1-10.png?ID=d12f7f70-e0ca-4715-876b-8b3bd01a27e4"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
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
                <form id="consultant-form" method="get">
                    <div class="modal-body" style="background: url('{{Voyager::image('background.png')}}') no-repeat left">
                            <img class="modal-header__logo" src="{{Voyager::image('DK-01.png')}}" width="100">
                             <img src="{{Voyager::image('DK-03.png')}}" width="100%" style="margin-top: 60px;margin-bottom: 30px">
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
            <a href="https://www.svanclinic.vn/uu-dai-thang/" class="btn btn-default">
                <img src="{{Voyager::image('discount.png')}}" alt="" style="position:relative;top: -2px;">
                Ưu Đãi
            </a>
        </div>
        <div class="button">
            <button class="btn btn-default" data-toggle="modal" data-target="#modal-19">
                <img src="{{Voyager::image('add-user.png')}}" alt="">
                Đăng Ký
            </button>
        </div>
    </div>
        <!--End of tawk.to Status Code -->
        <!-- Jquery core JavaScript -->
        <script src="{{ URL::to('js/bootstrap.js')}}"></script>
        <script src="{{ URL::to('js/slick.min.js')}}"></script>
        <script src="{{ URL::to('js/wow.js')}}"></script>
        <!-- my core JavaScript-->
        <script src="{{ URL::to('js/main.js')}}"></script>
        <script src="{{ URL::to('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!--End of Tawk.to Script-->
		<script>
		setTimeout(function () {
            $(".img_popup").addClass("display");
            $(".opacity").addClass("opacity1");
        }, 5000);
        $("html").click(function () {
            $(".img_popup").addClass("hidden");
            $(".opacity").css('display', 'none');
        });
        console.log('Develop by Witayl (witayl.com)');
        </script>
        @yield('javascript')
		<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
        <script src="https://apis.google.com/js/platform.js" async defer>
          {lang: 'vi'}
        </script>
    </body>
</html>