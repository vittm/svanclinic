@extends('layout')

@section('content')
<div class="service-list">
        <div class="title">
           <h2>
                <i>Dịch vụ
                        <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>

            </h2>
        </div>
        <div class="service-group-name">
            Giảm C&#226;n &amp; Giảm B&#233;o
        </div>
        <div class="container service-list-wrapper">
            <div class="row">
            @foreach($news as $key => $value)
                <div class="col-xs-4">
                    <div class="item">
                        <div class="item-image">
                            <a href="{{ URL::to('posts/')}}/{{$value->slug}}">
                                <img src="{{Voyager::image($value->image)}}" alt=""></a>
                            <div class="item-caption">
                                {{$value->title}}
                            </div>
                        </div>
                        <div class="item-description">
                            <p style="text-align: justify;"></p>
                            {!!$value->excerpt!!}    
                        </div>
                        <div><a href="{{ URL::to('posts/')}}/{{$value->slug}}" class="readmore">Chi tiết</a><div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection