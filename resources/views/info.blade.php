@extends('layout')
@section('title')
    <title>Giới thiệu Svan Clinic & Spa - Giảm béo và trị liệu da hàng đầu Việt Nam</title>
@stop
@section('facebook_meta')
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" itemprop="headline" content='Giới thiệu Svan Clinic & Spa - Giảm béo và trị liệu da hàng đầu Việt Nam' />
    <meta property="og:description" content='Spa hàng đầu Việt Nam về Giảm béo không phẫu thuật.Cam kết hiệu quả - Công nghệ tiên tiến - Không gian chuẩn 5 sao' />
    <meta name="description" content='Spa hàng đầu Việt Nam về Giảm béo không phẫu thuật.Cam kết hiệu quả - Công nghệ tiên tiến - Không gian chuẩn 5 sao' />
    <meta property="og:url" content="http://www.svanclinic.vn/gio-thieu" />
    <meta property="og:site_name" content="SVAN CLINIC" />
    <meta property="og:image" content="{{Voyager::image('imageLogo.png')}}"  />
@stop

@section('content')
<div class="wrapper">
            <div class="flower-theme-default">
                <div class="left-flower"><img src="/Content/layout/images/flower/01.png" alt=""></div>
                <div class="right-flower"><img src="/Content/layout/images/flower/02.png" alt=""></div>
            </div>
    <div class="introduce">
            <div class="title">
                <p>
                    <i>SVAN CLINIC &amp; SPA
                    </i>
                </p>
            </div>
        <div class="introduce-wrapper">
                <div class="intro-text">
                    <div class="intro-text-container">
                        <p>{{ __('web.about.pround') }}</p>

                    </div>
                </div>
                            <div class="intro-place">
                    <div class="intro-title">
                        <h2>
                            <span>{{ __('web.about.classBasic') }}</span>
                            <i><p>{{ __('web.about.fiveStar') }}</p>
</i>
                        </h2>
                    </div>
                    <div class="intro-place-container">
                        <div class="container">
                            <div class="row no-mg">
                                <div class="col-md-6 intro-place-left">
                                    <div class="intro-place-left-wrapper">
                                        <div class="intro-place-text">
                                            <p>{{ __('web.about.location') }}</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 intro-place-right">
                                    <div class="intro-place-right-wrapper">
                                        <div class="image-01">
                                            <a class="btn-fancy" rel="group-intro" title="" href="{{Voyager::image('info/intro-image-2.jpg')}}">
                                                <img src="{{Voyager::image('info/intro-image-1.jpg')}}" >
                                            </a>
                                        </div>
                                        <div class="image-02">
                                            <a class="btn-fancy" rel="group-intro" title="" href="{{Voyager::image('info/intro-image-2.jpg')}}">
                                                <img src="{{Voyager::image('info/intro-image-2.jpg')}}" >
                                            </a>
                                        </div>
                                        <div class="image-03">
                                            <a class="btn-fancy" rel="group-intro" title="" href="{{Voyager::image('info/intro-image-3.jpg')}}">
                                                <img src="{{Voyager::image('info/intro-image-3.jpg')}}" >
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                            <div class="intro-machine">
                    <div class="intro-title">
                        <h2>
                            <span>{{ __('web.about.modern') }}</span>
                            <i><p>{{ __('web.about.worldLeading') }}</p>
</i>
                        </h2>
                    </div>
                    <div class="intro-machine-container">
                        <div class="icon-machine-wrapper">
                                        <div class="icon-center">
                                            <a class="btn-fancy" rel="group-machine" title="" href="{{Voyager::image('info/machine-1.jpg')}}">
                                                <img src="{{Voyager::image('info/machine-2.jpg')}}" >
                                            </a>
                                        </div>
                                        <div class="icon-left">
                                            <a class="btn-fancy" rel="group-machine" title="" href="/Upload/News/7f6a23fc-e74a-4d31-b3a2-a5e63974e91c/machine-2.jpg">
                                                <img src="{{Voyager::image('info/machine-1.jpg')}}" >
                                            </a>
                                        </div>
                                        <div class="icon-right">
                                            <a class="btn-fancy" rel="group-machine" title="" href="{{Voyager::image('info/machine-3.jpg')}}">
                                                <img src="{{Voyager::image('info/machine-3.jpg')}}" >
                                            </a>
                                        </div>

                        </div>
                    </div>
                </div>
                            <div class="intro-text-2">
                    <div class="container intro-text-2-container">
                        <div class="row no-mg">
                            <div class="col-md-6 no-pd">
                                <div class="intro-text-left-container">
                                    <div class="intro-text-left-wrapper">
                                        <div class="intro-text-content">
                                            <p>{{ __('web.about.currently') }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 no-pd">
                                <div class="intro-text-right-container">
                                    <div class="image">
                                        <img src="{{Voyager::image('info/02.jpg')}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="intro-team">
                    <div class="intro-team-left-container">
                        <div class="intro-title">
                            <h2>
                                <span>{{ __('web.about.professionalStaff') }}</span>
                                <i><p>{{ __('web.about.professional') }}</p>
</i>
                            </h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="intro-team-right-container">
                        <div class="intro-team-text">
                            <p>{{ __('web.about.atSvan') }}</p>

                        </div>
                    </div>
                    <div class="intro-team-image">
                        <div class="image">
                            <img src="{{Voyager::image('info/intro-team.png')}}" >
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                            
        </div>
    </div>
</div>

@endsection