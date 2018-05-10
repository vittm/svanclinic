@extends('layout')

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