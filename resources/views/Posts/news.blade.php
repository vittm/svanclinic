
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
        @foreach($news as $key => $values)
        <div class="container news-container">
            <div class="row">
                <div class="news-tab">
                    <a href="{{ URL::to('n/')}}/{{ $categories->slug }}/{{$values->slug}}"><h2>{{ $values-> name }}</h2></a>
                </div>
            </div>
            <div class="row news-list-wrapper">
                <?php
                    $post = DB::table('posts')->where('category_id','=',$values->id)->get();
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
                                
                            <a href="{{ URL::to('n/'.$categories->slug.'/'.$values->slug.'/'.$value->slug)}}"><h1>{{ $value->title }}</h1></a>
                            </div>
                           
                            <a class="item-image" href="{{ URL::to('n/'.$categories->slug.'/'.$values->slug.'/'.$value->slug)}}">
                            <img src="{{Voyager::image($value->image)}}"></a>

                            <div class="item-description">
                                {{ $value->excerpt }}
                            </div>
                            <div class="read-more">
                            <a href="{{ URL::to('n/'.$categories->slug.'/'.$values->slug.'/'.$value->slug)}}" class="readmore">Xem Thêm</a>
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