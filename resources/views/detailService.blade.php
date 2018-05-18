
@extends('layout')
@section('title')
    <title>{{ $posts-> header_title }}</title>
@stop
@section('facebook_meta')
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{ $posts-> header_title }}" />
	<meta property="og:description"   content="{{ $posts-> header_content }}" />
	<meta property="og:image"         content="{{Voyager::image($posts->header_images)}}    " />
@endsection
@section('content')
<div class="service-detail">
        <div class="title">
            <h2>
                <i>Dịch vụ
                        <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>
            </h2>
        </div>
        <div class="service-detail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="other-service-wrapper">
                            <div class="other-service-title">
                                <span>DỊCH VỤ C&#211; THỂ BẠN MUỐN XEM</span>
                            </div>
                            <div class="other-service-nav"></div>
                            <div class="other-service-list">
                                @foreach($randomPost->chunk(2,0) as $key => $value)
                                    <div class="list-item">
                                    @foreach($value as $keys => $values)
                                        <div class="item">
                                            <a href="{{ URL::to('dich-vu')}}/{{ $categories->slug }}/{{$values->header_slug}}">
                                                <img src="{{Voyager::image($values->header_images)}}" alt="{{ $values-> header_title }}">
                                            </a>
                                            <div class="item-caption">
                                                <i class="small-logo"></i>
                                                <a href="{{ URL::to('dich-vu')}}/{{ $categories->slug }}/{{$values->header_slug}}">{{ $values-> header_title }}
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="service-name-wrapper">
                            <h1 class="service-name"><span>{{ $posts-> header_title }}</span></h1>
                                <p class="title-posts hidden">{{ $posts->id }}</p>
                                <p class="type-posts hidden">services</p>
                                <div class="service-name-text text-content">
                                    <p style="text-align: justify;">{{ $posts-> header_content }}</p>

                                    	<img src="{{Voyager::image($posts->header_images)}}" alt="{{ $posts-> header_title }}">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($posts->result_content))
                <div class="effective">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-detail-title">
                                    HIỆU QUẢ SAU KHI SỬ DỤNG DỊCH VỤ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="effective-left">
                                    <div class="effective-text-content text-content sroller">
                                     {!! $posts->result_content !!}
                                    </div>
                                </div>
                                <div class="btn-wrapper text-right">
									<button class="btn-icon btn-form"  data-toggle="modal" data-target="#modal-19">
										<span>ĐĂNG KÝ TƯ VẤN</span>
									</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="effective-right">
                                    <figure>
                                        <img src="{{Voyager::image($posts->result_images)}}">
                                        <figcaption></figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(count(json_decode($posts->images_before_after,JSON_BIGINT_AS_STRING)) > 0)
                <div class="effective-image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-detail-title">
                                    H&#204;NH ẢNH TRƯỚC V&#192; SAU KHI SỬ DỤNG DỊCH VỤ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="effective-image-slider">
                                     @foreach(json_decode($posts->images_before_after,JSON_BIGINT_AS_STRING) as $key => $value)
                                        <div class="item">
                                            <figure>
                                                <img src="{{Voyager::image($value['data'])}}">
                                                <figcaption></figcaption>
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="btn-wrapper text-center">
                                    <button class="btn-icon btn-form"  data-toggle="modal" data-target="#modal-19">
										<span>ĐĂNG KÝ TƯ VẤN</span>
									</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($posts->technical_description != '<p>&nbsp;<br></p>' && $posts->technical_description != NULL)
                <div class="technology">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-detail-title">
                                    NGUY&#202;N L&#221; - C&#212;NG NGHỆ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="technology-left">
                                    <figure>
                                        <img src="{{Voyager::image($posts->technical_images)}}">
                                        <figcaption></figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="technology-right">
                                    <div class="technology-text-content text-content sroller">
                                    {!! $posts->technical_description !!}

                                    </div>
                                    <div class="btn-wrapper text-left">
                                        <button class="btn-icon btn-form"  data-toggle="modal" data-target="#modal-19">
											<span>ĐĂNG KÝ TƯ VẤN</span>
										</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(JSON_decode($posts->productive,JSON_BIGINT_AS_STRING)['0']['name'] != " ") 
                    <div class="process">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="service-detail-title">
                                        QUY TR&#204;NH DỊCH VỤ
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="process-map">
                                    @foreach(JSON_decode($posts->productive,JSON_BIGINT_AS_STRING) as $key => $value)
                                        <div class="col-md-6">
                                            <div class="item">
                                                <span class="number"><i>{{ $key + 1 }}</i></span>
                                                <div class="content">
                                                    <span>{{$value['description']}}
                                                    </span>
                                                </div>
                                                <div class="image">
                                                    <img src="{{Voyager::image($value['name'])}}" alt="{{$value['description']}}">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($posts->why_description != '<p>&nbsp;<br></p>' &&  $posts->why_description != NULL)
                <div class="why-chose">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-detail-title">
                                    TẠI SAO N&#202;N CHỌN SVAN CLINIC &amp; SPA
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="why-chose-content">
                                    <div class="text-content">
                                    {!! $posts->why_description !!}    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(isset(JSON_decode($posts->feedback,JSON_BIGINT_AS_STRING)['0']['name'] ))
                <div class="feedback">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-detail-title">
                                    NHẬN X&#201;T CỦA KH&#193;CH H&#192;NG
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback-wrapper">
                        <div class="container">
                            <div class="row">
                            @foreach(json_decode($posts->feedback,JSON_BIGINT_AS_STRING) as $key => $value)
                                    <div class="col-md-6">
                                        <div class="item">
                                            <div class="image">
                                                <img src="{{Voyager::image($value['images'])}}" alt="{{$value['name']}}">
                                            </div>
                                            <div class="item-name">
                                                {{$value['name']}}
                                            </div>
                                            <div class="star-wrapper">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="item-content">
                                                <p><span style="text-align: justify;">{{$value['description']}}</span></p>
                                            </div>
                                        </div>
                                    </div> 
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($posts->noted != '<p>&nbsp;<br></p>' && $posts->noted != "" && $posts->noted != NULL )
                <div class="note">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="service-detail-title">
                                    LƯU &#221;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note-wrapper">
                        <div class="note-content-wrapper">
                            {!! $posts->noted !!}

                        </div>
                        <div class="note-btn-wrapper">
                            <div class="btn-wrapper">
                                <button class="btn-icon btn-form"  data-toggle="modal" data-target="#modal-19">
                                    <span>ĐĂNG KÝ TƯ VẤN</span>
                                </button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                @endif
        </div>
    </div>

</div>


@endsection
@section('javascript')
    <script>
        (function ($) {
            $(window).load(function () {
                $(".sroller").mCustomScrollbar({
                    theme: "rounded-dots-dark"
                }).on("mouseenter", function () {
                    $(this).find("iframe").css("pointer-events", "none");
                }).on("mouseup", function () {
                    if (!$(this).find(".mCSB_scrollTools_onDrag").length) return;
                    setTimeout(function () { $("#content").trigger("mouseenter"); }, 1);
                });
                $(window).on("blur", function () {
                    $("#content iframe").css("pointer-events", "auto");
                }).on("focus", function () {
                    $("#content").trigger("mouseenter");
                });
            });
            $('.other-service-list').not('.slick-initialized').slick({
                slidesToShow: 1,
                infinite:true,
                dots: false,
                centerMode: false,
                // autoplay: true,
                swipeToSlide:true,
                autoplaySpeed:5000,
                appendArrows: $('.other-service-nav')
                });
        })(jQuery);
    </script>
@endsection