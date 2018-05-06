
@extends('layout')

@section('content')

    <div class="news">
        <div class="title">
            <p>
                <i>
                    {{ $categories->name }}
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </i>

            </p>
        </div>
        @foreach($news as $key => $value)
        <div class="container news-container">
            <div class="row">
                <div class="news-tab">
                    <a href="{{ URL::to('news/lists')}}/{{$value->slug}}"><h2>{{ $value-> name }}</h2></a>
                </div>
            </div>
            <div class="row news-list-wrapper">
                <?php
                    $post = DB::table('posts')->where('category_id','=',$value->id)->get();  
                ?>
                @foreach($post as $key => $value)
                    <div class="col-md-4">
                        <div class="item" style="margin-top: 60px">
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
                                
                                <a href="{{ URL::to('posts/')}}/{{$value->slug}}"><h1>{{ $value->title }}</h1></a>
                            </div>
                            <div class="item-image">
                                <a href="{{ URL::to('posts')}}/{{$value->slug}}">
                                <img src="{{Voyager::image($value->image)}}"></a>
                            </div>
                            <div class="item-description">
                                <span><p><em>{{ $value->excerpt }}</em></p>
</span>
                            </div>
                            <div class="read-more">
                                <a href="{{ URL::to('posts/')}}/{{$value->slug}}" class="readmore">Xem Thêm</a>
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