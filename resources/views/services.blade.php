@extends('layout')
@section('title')
    <title>Dịch Vụ Svan Clinic & Spa - Giảm béo và trị liệu da hàng đầu Việt Nam</title>
@stop
@section('facebook_meta')
    <meta name="description" content='Spa hàng đầu Việt Nam về Giảm béo không phẫu thuật.Cam kết hiệu quả - Công nghệ tiên tiến - Không gian chuẩn 5 sao'>
    <meta name="keywords" content='dich vu,spa quận 1, spa giảm cân, spa trắng da'>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" itemprop="headline" content='Dịch Vụ Svan Clinic & Spa - Giảm béo và trị liệu da hàng đầu Việt Nam' />
    <meta property="og:description" content='Spa hàng đầu Việt Nam về Giảm béo không phẫu thuật.Cam kết hiệu quả - Công nghệ tiên tiến - Không gian chuẩn 5 sao' />
    <meta property="og:url" content="http://www.svanclinic.vn/lien-he" />
    <meta property="og:site_name" content="SVAN CLINIC" />
    <meta property="og:image" content="{{Voyager::image('imageLogo.png')}}"  />
@stop
@section('content')
<div class="service">
        <div class="title">
            <h2>
                <i>DỊCH VỤ 
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>
            </h2>
        </div>
        <div class="container service-group">
            @foreach($news as $key => $value)
                <div class="col-md-6">
                    <div class="item">
                        <div class="item-image">
                            <div class="border-circle">&nbsp;</div>
                            <a href="{{ URL::to('dich-vu')}}/{{$value->slug}}">
                                <img src="{{Voyager::image($value->images)}}" alt="">
                            </a>
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                <div class="item-title-wrapper">
                                    <a href="{{ URL::to('dich-vu')}}/{{$value->slug}}">{{ $value->name}}</a>
                                </div>
                            </div>
                                <div class="item-list">
                                    {!! $value->content!!}
                                </div>
                                <div>
                                    <a href="{{ URL::to('dich-vu')}}/{{$value->slug}}" class="readmore">Xem Thêm</a><div class="clearfix"></div>
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection