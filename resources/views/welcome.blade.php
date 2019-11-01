
@extends('layout')
@section('title')
    <title>Svan Clinic & Spa - Giảm béo và trị liệu da hàng đầu Việt Nam</title>
@stop
@section('facebook_meta')
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" itemprop="headline" content='Svan Clinic & Spa - Giảm béo và trị liệu da hàng đầu Việt Nam' />
    <meta property="og:description" content='Spa hàng đầu Việt Nam về Giảm béo không phẫu thuật.Cam kết hiệu quả - Công nghệ tiên tiến - Không gian chuẩn 5 sao' />
    <meta name="description" content='Spa hàng đầu Việt Nam về Giảm béo không phẫu thuật.Cam kết hiệu quả - Công nghệ tiên tiến - Không gian chuẩn 5 sao' />
    <meta property="og:url" content="https://www.svanclinic.vn" />
    <meta property="og:site_name" content="SVAN CLINIC" />
    <meta property="og:image" content="{{Voyager::image('imageLogo.png')}}"  />
@stop
@section('content')
<div id="svanslider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        
        <ol class="carousel-indicators">
            <!-- In case: Banners count == 1 => Do not show slide button -->
            @foreach($slides as $key => $value)
            <li data-target="#svanslider" class="@if($key == 0 ) active @endif" data-slide-to="{{ $key}}" ></li>
            @endforeach
        </ol>
       
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        @foreach($slides as $key => $value)
            <div class="item @if($key == 0 ) active @endif">
                <a href="{{$value->link}}">
                    <img src="{{Voyager::image($value->images)}}" class="image">
                </a>
            </div>
        @endforeach
        </div>
        <div class="overlay"></div>
    </div>
    <div class="clearfix"> </div>   
    <div class="intro-why-chose">
    <div class="flower-theme-default">
        <div class="left-flower"><img src="{{Voyager::image('01.png')}}" alt=""></div>
        <div class="right-flower"><img src="{{Voyager::image('02.png')}}" alt=""></div>
    </div>   
        <div class="container">
            <div class="title" style="margin-bottom: 60px">
                <h1>
                    <i>{{ __('web.welcome.why') }}
                            <span class="line-left"></span>
                        <span class="line-right"></span>
                    </i>

                </h1>
            </div>
            <div class="intro-why-chose-content">
            @foreach($whyhomes as $key => $value)
                    <div class="col-md-4">
                        <a href="">
                            <figure>
                                <img src="{{Voyager::image($value->images)}}" alt="" class="img-responsive center-block">
                                <!--<figcaption><h3>{{ $value->text }}</h3></figcaption>-->
                            </figure>
                        </a>
                    </div>
            @endforeach     
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="intro-service">
        <div class="intro-service-content">
            <div class="container">
                <div class="title" style="padding-top: 40px">
                    <h2>
                        <i>{{ __('web.welcome.hotServices') }} 
                                <span class="line-left"></span>
                            <span class="line-right"></span>
                        </i>

                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="service-slider">
                @foreach($servicesspecialists as $key => $value)
                        <?php
                            $postService = DB::table('serivcesposts')->where('id','=',$value->link)->first();
                            if( $postService != null){
                            $categoriesService = DB::table('categories')->where('id','=',$postService->category_id)->first();
                            }
                        ?>
                        <div class="item">
                            <div class="service-wrapper">
                                <a href="{{ URL::to('/')}}{{App::isLocale('en')?"/en/services/" : "/dich-vu/"}}{{ $categoriesService->slug }}/{{$value->header_slug}}">
                                    <div class="service-img" style="background-image: url('{{Voyager::image($value->images)}}')"></div>
                                </a>
                                <div class="service-content">
                                    <div class="service-name">
                                       <h3><a href="{{ URL::to('/')}}{{App::isLocale('en')?"/en/services/" : "/dich-vu/"}}{{ $categoriesService->slug }}/{{$value->header_slug}}">{{ $value->title }}</a></h3>
                                    </div>
                                    <div class="service-text">
                                        <p>{{ $value->content }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                  @endforeach      
                </div>
            </div>
        </div>
    </div>
    <div class="intro-news">
        <div class="container">
            <div class="title">
                <h2>
                    <i>{{ __('web.welcome.news') }}
                            <span class="line-left"></span>
                        <span class="line-right"></span>
                    </i>

                </h2>
            </div>
        </div>
        <div class="intro-news-wrapper">
            <div class="container">
                <div class="row">
                @foreach($news as $key => $value)
                <?php 
                    $categories = DB::table('categories')->where('id','=',$value->category_id)->first();
                ?>
                        <div class="col-md-4">
                            <div class="news-item">
                                <div class="news-img">
                                    <a href="{{ URL::to('/')}}{{App::isLocale('en')?"/en/news/" : "/tin-tuc/"}}{{$categories->slug}}/{{$value->slug}}">
                                        <img src="{{Voyager::image($value->image)}}" alt="Th&#225;ng v&#224;ng tri &#226;n" title="Th&#225;ng v&#224;ng tri &#226;n - giảm gi&#225; trực tiếp 50% tất cả c&#225;c dịch vụ l&#224;m đẹp">
                                    </a>
                                </div>
                                <div class="news-title">
                                    <h3><a href="{{ URL::to('/')}}{{App::isLocale('en')?"/en/news/" : "/tin-tuc/"}}{{$categories->slug}}/{{$value->slug}}">{{$value->title}}</a> </h3>
                                </div>
                                <div class="news-description">
                                    <p><em><span style="color: rgb(61, 156, 116);">{!!$value->excerpt!!}</em></p>

                                </div>
                                <div class="read-more">
                                    <a href="{{ URL::to('/')}}{{App::isLocale('en')?"/en/news/" : "/tin-tuc/"}}{{$categories->slug}}/{{$value->slug}}">{{ __('web.more') }}</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                @endforeach      
                </div>
            </div>
        </div>
    </div>
    <div class="intro-video">
        <div class="container">
            <div class="title">
                <h2>
                    <i>video
                            <span class="line-left"></span>
                        <span class="line-right"></span>
                    </i>

                </h2>
            </div>
        </div>
        <div class="intro-video-wrapper">
            <div class="container">
                <div class="row">
                @foreach($videos as $key => $value)
                        <div class="col-md-4">
                            <div class="video-container">
                                <a href="#" class="video-btn" data-toggle="modal" data-target="#videoModal" data-thevideo="{{$value->link}}">
                                    <img src="{{Voyager::image($value->images)}}">
                                </a>
                            </div>
                            <div class="video-title">
                                <h3><a href="#" class="video-btn" data-toggle="modal" data-target="#videoModal" data-thevideo="{{$value->link}}">{{ $value->title}}
                                </a></h3>
                            </div>
                            <div class="video-info">
                                <div class="view">
                                    <span id="{{$value->link}}"></span> <span>{{$value->view}}&nbsp; {{ __('web.view') }}</span>
                                    
                                </div>
                                <div class="created">
                                    {!! Carbon\Carbon::parse($value->created_at)->format('m/d/Y')  !!}
                                </div>
                            </div>
                        </div>
                @endforeach  
                </div>
            </div>
        </div>
    </div>
    <div class="intro-feedback">
        <div class="title">
            <h2>
                <i>{{ __('web.welcome.feedback') }} 
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>

            </h2>
        </div>
        <div class="intro-feedback-wrapper">
            <div class="container">
                <div class="feedback-img-slider">
                @foreach($feedbacks as $key => $value)
                        <div class="item">
                            <img src="{{Voyager::image($value->images)}}" class="img-responsive">
                        </div>
                @endforeach
                </div>
                <div class="feedback-content-slider">
                @foreach($feedbacks as $key => $value)
                        <div class="item">
                            <div class="client-name">
                                <h3>{{ $value->name }}</h3>
                            </div>
                            <div class="client-content">
                                <div class="text-content">
                                    <p style="text-align: justify;">{{ $value->content }}</p>

                                </div>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="intro-partner">
        <div class="container">
            <div class="title">
                <h2>
                    <i>{{ __('web.welcome.partner') }} 
                            <span class="line-left"></span>
                        <span class="line-right"></span>
                    </i>

                </h2>
            </div>
        </div>
        <div class="container">
            <div class="intro-partner-slider">
            @foreach($partners as $key => $value)
                    <div class="item">
                        <div class="item-image">
                            <img src="{{Voyager::image($value->images)}}" alt="ultra">
                        </div>
                    </div> 
            @endforeach
            </div>
        </div>
    </div>
    @if(isset($banners))
    <div class="opacity"></div>
    <div class="col-xs-12 col-md-6 img_popup">
         @foreach($banners as $key => $value)
            <div class="img_popup__group">
                <div class="close">
                <img src="{{Voyager::image('close.png')}}" alt="Close button">
                </div>
                <a href="{{$value->link}}"><img src="{{Voyager::image($value->images)}}" alt="" class="img-responsive"></a>
            </div>
        @endforeach
    </div>
    @endif
@endsection
         

