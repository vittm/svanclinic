
@extends('layout')

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
                    <div class="col-xs-4">
                        <div class="other-service-wrapper">
                            <div class="other-service-title">
                                <span>DỊCH VỤ C&#211; THỂ BẠN MUỐN XEM</span>
                            </div>
                            <div class="other-service-nav"></div>
                            <div class="other-service-list">
                                    <div class="list-item">
                                    @foreach($randomPost as $key => $value)
                                        <div class="item">
                                            <a href="{{ URL::to('services/detail')}}/{{$value-> header_slug}}">
                                                <img src="{{Voyager::image($value->header_images)}}" alt="{{ $value-> header_title }}">
                                            </a>
                                            <div class="item-caption">
                                                <i class="small-logo"></i>
                                                <a href="{{ URL::to('services/detail')}}/{{$value-> header_slug}}">{{ $value-> header_title }}
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-8">
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
                <div class="effective">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="service-detail-title">
                                    HIỆU QUẢ SAU KHI SỬ DỤNG DỊCH VỤ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
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
                            <div class="col-xs-6">
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
                            <div class="effective-image">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="service-detail-title">
                                    H&#204;NH ẢNH TRƯỚC V&#192; SAU KHI SỬ DỤNG DỊCH VỤ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="effective-image-slider">
                                     @foreach(array_slice(json_decode($posts->images_before_after,JSON_BIGINT_AS_STRING),0,2) as $key => $value)
                                        <div class="item">
                                            <figure>
                                                <img src="{{Voyager::image($value['data'])}}">
                                                <figcaption></figcaption>
                                            </figure>
                                        </div>
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
                            <div class="technology">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="service-detail-title">
                                    NGUY&#202;N L&#221; - C&#212;NG NGHỆ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="technology-left">
                                    <figure>
                                        <img src="{{Voyager::image($posts->technical_images)}}">
                                        <figcaption></figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xs-6">
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

                <div class="process">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="service-detail-title">
                                    QUY TR&#204;NH DỊCH VỤ
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="process-map">
                            @if($posts->productive)
                                @foreach(JSON_decode($posts->productive,JSON_BIGINT_AS_STRING) as $key => $value)
                                    <div class="col-xs-6">
                                        <div class="item">
                                            <span class="number"><i>1</i></span>
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
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="why-chose">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="service-detail-title">
                                    TẠI SAO N&#202;N CHỌN SVAN CLINIC &amp; SPA
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="why-chose-content">
                                    <div class="text-content">
                                    {!! $posts->why_description !!}    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feedback">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="service-detail-title">
                                    NHẬN X&#201;T CỦA KH&#193;CH H&#192;NG
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback-wrapper">
                        <div class="container">
                            <div class="row">
                            @if($posts->feedback)
                            @foreach(json_decode($posts->feedback,JSON_BIGINT_AS_STRING) as $key => $value)
                                    <div class="col-xs-6">
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
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="note">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
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
			<div class="container" >
                <div class="rate-wrapper">
	                <div class="rate-title">
		                <span>Đ&#225;nh gi&#225;</span>
	                </div>
	
	                <div class="rate-content">
		                <ul class="form">
                                <li class="rating">
				                    <input class="vote-radio" type="radio" name="rating" value="0" checked /><span class="hide"></span>
				                    <input class="vote-radio" type="radio" name="rating" value="1" onclick="vote(this.value);"/><span></span>
				                    <input class="vote-radio" type="radio" name="rating" value="2" onclick="vote(this.value);"/><span></span>
				                    <input class="vote-radio" type="radio" name="rating" value="3" onclick="vote(this.value);"/><span></span>
				                    <input class="vote-radio" type="radio" name="rating" value="4" onclick="vote(this.value);"/><span></span>
				                    <input class="vote-radio" type="radio" name="rating" value="5" onclick="vote(this.value);"/><span></span>
			                    </li>
		                </ul> 
		                <div class="rate-value">
			                5 &#x2215; 5 (9 votes)
		                </div>
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
                    <h4 class="modal-title">ĐĂNG KÝ TƯ VẤN</h4>
                </div>
                <form id="consultant-form" action="/ConsultantSubmit" method="get">
                {{ csrf_field() }}
                    <div class="modal-body">
                            <div class="form-group">
                                <input id="username-customer" type="text" name="name" class="form-control" placeholder="Họ t&#234;n">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone-customer" name="phone" class="form-control" placeholder="Số điện thoại (bắt buộc)" data-val="true" data-val-regex="Số điện thoại không hợp lệ" data-val-regex-pattern="^[0-9]{10,11}$" data-val-required="Vui lòng nhập số điện thoại!">
                                <span class="field-validation-valid" data-valmsg-for="phone" data-valmsg-replace="false"></span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="content" style="resize:none" rows="6" cols="30" placeholder="Nội dung"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đ&#243;ng</button>
                        <button type="submit" class="btn btn-primary btn-customer">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection