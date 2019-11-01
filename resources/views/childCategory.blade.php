@extends('layout')
@section('title')
    <title>{{ $categories->name }}</title>
@stop
@section('facebook_meta')
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" itemprop="headline" content='{{$categories->name}}' />
    <meta property="og:description" content='{{ $categories->name}}' />
    <meta name="description" content='{{ $categories->name}}' />
    <meta property="og:site_name" content="SVAN CLINIC" />
    <meta property="og:image" content="{{Voyager::image($categories->images)}}"  />
@stop
@section('content')
<div class="service-list">
        <div class="title">
           <h2>
                <i>{{ $categories->name }}
                        <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>

            </h2>
        </div>
        <div class="service-group-name">
            <!-- Giảm C&#226;n &amp; Giảm B&#233;o -->
        </div>
        <div class="container service-list-wrapper">
            <div class="row">
            @foreach($news as $key => $value)
                <div class="col-md-4">
                    <div class="item">
                        <div class="item-image">
                            <a target="_blank" href="{{url('')}}{{App::isLocale('en')?"/en/services" : "/dich-vu"}}/{{ $categories->slug }}/{{$value->header_slug}}">
                                <img src="{{Voyager::image($value->header_images)}}" alt=""></a>
                            <h2 class="item-caption">
                                {{$value->header_title}}
                            </h2>
                        </div>
                        <div class="item-description">
                            {{ $value->header_content }}   
                        </div>
                        <div><a target="_blank" href="{{url('')}}{{App::isLocale('en')?"/en/services" : "/dich-vu"}}/{{ $categories->slug }}/{{$value->header_slug}}" class="readmore">{{ __('web.more') }}</a><div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection