
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
    <meta property="og:image" content="{{Voyager::image($imgCate->images)}}"  />
@stop
@section('content')

    <div class="news">
        <div class="title">
            <h1>
                <i>
                    {{ $categories->name }}
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>

            </h1>
        </div>
        @foreach($news as $key => $values)
        <div class="container news-container">
            <div class="row">
                <div class="news-tab">
                    <a target="_blank" href="{{url('/')}}{{App::isLocale('en')?"/en" : ""}}/{{ $categories->slug }}/{{$values->slug}}"><h2>{{ $values-> name }}</h2></a>
                </div>
            </div>
            <div class="row news-list-wrapper">
                <?php
                    $post = DB::table('posts')->where([['category_id','=',$values->id]])->limit('3')->orderBy('id', 'desc')->get();
                ?>
                @foreach($post as $key => $value)
                    <div class="col-md-4">
                        <div class="item">
                            <div class="item-date">
                                <div class="date-wrapper">
                                    <div class="motnh">
                                    {!! Carbon\Carbon::parse($value->created_at)->format('m')  !!}
                                    </div>
                                    <div class="year">
                                    {!! Carbon\Carbon::parse($value->created_at)->format('Y')  !!}
                                    </div>
                                </div>
                            </div>
                            <div class="item-title">
                                
                            <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categories->slug.'/'.$values->slug.'/'.$value->slug}}"><h3>{{ $value->title }}</h3></a>
                            </div>
                            <a target="_blank" class="item-image" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categories->slug.'/'.$values->slug.'/'.$value->slug}}">
                            <img src="{{Voyager::image($value->image)}}"></a>

                            <div class="item-description">
                                {!! $value->excerpt !!}
                            </div>
                            <div class="read-more">
                            <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categories->slug.'/'.$values->slug.'/'.$value->slug}}" class="readmore">{{ __('web.more') }}</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>
        @endforeach
    </div>



@endsection