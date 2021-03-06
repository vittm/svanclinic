
@extends('layout')
@section('title')
    <title>{{ $categories->name }}</title>
@stop
@section('facebook_meta')
    <meta name="keywords" content='spa quận 1, spa giảm cân, spa trắng da'>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" itemprop="headline" content='{{$categories->name}}' />
    <meta property="og:description" content='{{ $categories->name}}' />
    <meta name="description" content='{{ $categories->name}}' />
    <meta property="og:site_name" content="SVAN CLINIC" />
    <meta property="og:image" content="{{Voyager::image($categories->images)}}"  />
@stop
@section('content')
<div class="news-list">
        <div class="title">
            <h1>
                <i>
                    {{ $categories->name }}
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>

            </h1>
        </div>
        <div class="news-list-wrapper">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="news-list-title"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="news-list-item">
                        @foreach($news as $key => $value)
                        <?php 
                             $parent = DB::table('categories')->where('id','=',$categories->parent_id)->first();
                             $categoryParent= DB::table('menuhome_trans')->join('menuhomes','menuhomes.id','=','menuhome_trans.trans_id')->where([['menuhomes.child','=',$parent->id],['menuhome_trans.lang_code','=',App::isLocale('en')? 'en': 'vi']])->first();
                            
                        ?>
                                <div class="item">
                                    <div class="item-image">
                                        <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categoryParent->slug.'/'.$categories->slug.'/'.$value->slug}}">
                                        <div style="height: 300px;background-image: url('{{Voyager::image($value->image)}}');"></div>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-date">
                                            <div class="motnh">
                                            {!! Carbon\Carbon::parse($value->created_at)->format('m')  !!}
                                            </div>
                                            <div class="year">
                                            {!! Carbon\Carbon::parse($value->created_at)->format('y')  !!}
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-name">
                                                <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categoryParent->slug.'/'.$categories->slug.'/'.$value->slug}}"><h2 class="item-name__title">{{ $value->title}}</h2></a>
                                            </div>
                                            <div class="item-description">
                                                {!! $value->excerpt !!}
                                            </div>
                                            <div class="read-more">
                                                <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categoryParent->slug.'/'.$categories->slug.'/'.$value->slug}}" class="readmore">{{ __('web.more') }}</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $news->links() }}
                    </div>
  
                    <!-- <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class='pagination f-right'><li class='page-item active'><a rel='nofollow' class='page-link' href='#' >1</a></li><li class='page-item'><a rel='nofollow' class='page-link' href='/tin-tuc/tin-tuc-dich-vu/2'>2</a></li><li class='page-item'><a rel='nofollow' class='page-link' href='/tin-tuc/tin-tuc-dich-vu/3'>3</a></li><li class='page-item'><a rel='nofollow' class='page-link'>...</a></li><li class='page-item'><a rel='nofollow' class='page-link' href='/tin-tuc/tin-tuc-dich-vu/11'>11</a></li><li class='page-item'><a rel='nofollow' class='page-link' href='/tin-tuc/tin-tuc-dich-vu/12'>12</a></li><li class='page-item btn-next'><a rel='nofollow' class='page-link' aria-label='Next' href='/tin-tuc/tin-tuc-dich-vu/2' ></a></li></ul>
                            <div class="clearfix"></div>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection