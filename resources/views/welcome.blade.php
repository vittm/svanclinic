
@extends('layout')

@section('content')
<div class="btn-hotline">
        <div class="icon">
            <div class="icon-img">
                <img src="{{Voyager::image('logo.png')}}" alt="">
            </div>
        </div>
        <div class="hotline-content">
            <h4>1900.0117</h4>
        </div>
    </div>
<div id="svanslider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <!-- In case: Banners count == 1 => Do not show slide button -->
                        <li data-target="#svanslider" data-slide-to="0" class="active"></li>
                        <li data-target="#svanslider" data-slide-to="1"></li>
                        <li data-target="#svanslider" data-slide-to="2"></li>
                        <li data-target="#svanslider" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        @foreach($slides as $key => $value)
            <div class="item active">
                <a href="{{$value->link}}">
                    <div class="image" style="background-image:url('{{Voyager::image($value->images)}}')"></div>
                </a>
            </div>
        @endforeach
        </div>
        <div class="overlay"></div>
    </div>
    <div class="clearfix"> </div>   
    <div class="intro-why-chose">
    <div class="flower-theme-default">
        <div class="left-flower"><img src="http://www.svanclinic.vn/Content/layout/images/flower/01.png" alt=""></div>
        <div class="right-flower"><img src="http://www.svanclinic.vn/Content/layout/images/flower/02.png" alt=""></div>
    </div>   
        <div class="container">
            <div class="title">
                <h2>
                    <i>TẠI SAO N&#202;N CHỌN SVAN CLINIC &amp; SPA 
                            <span class="line-left"></span>
                        <span class="line-right"></span>
                    </i>

                </h2>
            </div>
            <div class="row intro-why-chose-content">
            @foreach($whyhomes as $key => $value)
                    <div class="col-xs-4">
                        <a href="">
                            <figure>
                                <img src="{{Voyager::image($value->images)}}" alt="" class="img-responsive center-block">
                                <figcaption><h3>{{ $value->text }}</h3></figcaption>
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
                        <i>DỊCH VỤ NỔI BẬT 
                                <span class="line-left"></span>
                            <span class="line-right"></span>
                        </i>

                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="service-slider">
                @foreach($servicesspecialists as $key => $value)
                        <div class="item">
                            <div class="service-wrapper">
                                <a href="{{'services/detail/'.$value->header_slug }}">
                                    <div class="service-img" style="background-image: url('{{Voyager::image($value->images)}}')"></div>
                                </a>
                                <div class="service-content">
                                    <div class="service-name">
                                       <h3><a href="{{ 'services/detail/'.$value->header_slug}}">{{ $value->title }}</a></h3>
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
                    <i>TIN TỨC 
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
                        <div class="col-xs-4">
                            <div class="news-item">
                                <div class="news-img">
                                    <a href="{{ 'posts/'.$value->slug }}">
                                        <img src="{{Voyager::image($value->images)}}" alt="Th&#225;ng v&#224;ng tri &#226;n" title="Th&#225;ng v&#224;ng tri &#226;n - giảm gi&#225; trực tiếp 50% tất cả c&#225;c dịch vụ l&#224;m đẹp">
                                    </a>
                                </div>
                                <div class="news-title">
                                    <h3><a href="{{ 'posts/'.$value->slug }}">{{$value->title}}</a> </h3>
                                </div>
                                <div class="news-description">
                                    <p><em><span style="color: rgb(61, 156, 116);">{{$value->content}}</em></p>

                                </div>
                                <div class="read-more">
                                    <a href="{{ 'posts/'.$value->slug }}">Xem Thêm</a>
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
                        <div class="col-xs-4">
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
                                    <span id="{{$value->link}}"></span> <span>&nbsp;Lượt xem</span>
                                    
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
        <div class="container">
            <div class="title">
                <h2>
                    <i>KH&#193;CH H&#192;NG N&#211;I G&#204; VỀ SVAN CLINIC &amp; SPA 
                            <span class="line-left"></span>
                        <span class="line-right"></span>
                    </i>

                </h2>
            </div>
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
                    <i>ĐỐI T&#193;C 
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
        <div class="col-xs-6 img_popup">
            <div class="close">
                <img src="/Content/layout/images/img_popup/close.png" alt="Close button">
            </div>
            <a href="http://www.svanclinic.vn/uu-dai-thang/"><img src="/Upload/Popup/45c655c8-dc15-4842-bcd2-df977e49f8a1/popup_web.png	" alt="http://www.svanclinic.vn/uu-dai-thang/" class="img-responsive"></a>
        </div>
        <div class="opacity"></div>

@endsection        
         

