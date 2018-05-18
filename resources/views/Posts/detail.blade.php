
@extends('layout')
    
@section('title')
<title>{{ $posts->title }}</title>
@endsection
@section('facebook_meta')
    <meta property="og:locale" content="vi_VN" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{ $posts->title }}" />
	@if($posts->meta_description != null)
	<meta property="og:description"   content="{{ $posts->meta_description}}" />
	@endif
	@if($posts->meta_description == null)
	<meta property="og:description"   content="{!! $posts->excerpt !!}" />
	@endif
    <meta property="og:image"         content="{{Voyager::image($posts->image)}}    " />
    <meta name="keywords"             content="{{ $posts->meta_keywords}}"/>
@endsection
@section('content')
<!-- Page Content -->
<div class="container detail">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4" style="font-size: 25px">{{ $posts->title }}</h1>
    <p class="title-posts hidden">{{ $posts->id }}</p>
    <p class="type-posts hidden">posts</p>
    <!-- Author -->
    <div class="author" ><p><i class="fa fa-calendar" style="position: relative; top: -1px;"></i> 
    {!! Carbon\Carbon::parse($posts->created_at)->format('m/d/Y')  !!}</p><p ><i class="fa fa-user"></i> by <a href="">{{ $users->name}}</a></p></div>


    <!-- Post Content -->
    <div class="blog-content">
    {!! $posts -> body !!}
    </div>
    <!-- List -->
    <br>
    <br>
    <h3>Bài viết liên quan: </h3>
    <ul class="list-more">
        
        @foreach($more as $key => $value)
            <?php 
                $categories = DB::table('categories')->where('id','=',$value->category_id)->first();
                $categoryParent = DB::table('categories')->where('id','=',$categories->parent_id)->first();
            ?>
            <li>
                <a href="{{ URL::to(''.$categoryParent->slug.'/'.$categories->slug.'/'.$value->slug)}}"> {{ $value->title}} <span style="color: #ccc; font-size: 12px; font-weight: 100;">({!! Carbon\Carbon::parse($posts->created_at)->format('m/d/Y')  !!})</span></a>
            </li>
        @endforeach
    </ul>   
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="siderbar-detail col-md-4 pl0">

    <!-- Side Widget -->
    <div class="card my-4">
      <h2 class="card-header" style="font-size:23px;padding-left:0;">Tin Mới Nhất</h2>
      @foreach($randomPost as $key => $value)
        <?php 
            $categories = DB::table('categories')->where('id','=',$value->category_id)->first();
            $categoryParent = DB::table('categories')->where('id','=',$categories->parent_id)->first();
        ?>
        <a href="{{ URL::to(''.$categoryParent->slug.'/'.$categories->slug.'/'.$value->slug)}}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl0" style="margin-top: 15px" data-aos="fade-right">
            <div class="col-lg-6 col-xs-12 pl0">
                <img src="{{Voyager::image($value->image)}}" alt="" width="100%">
            </div>
        
            <div class="col-lg-6 col-xs-12 pl0 pr0">
                    <div class="blog-column">
                    <h3>{{ $value->title }}</h3>
                        <span><i class="fa fa-calendar-alt"></i> {!! Carbon\Carbon::parse($posts->created_at)->format('m/d/Y')  !!}</span>
                    <p>{!! $value->excerpt !!}</p>
                </div>
            </div>
        </a>
        @endforeach
        
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection

@section('javascript')
    <script>
        var stickyOffset = $('.siderbar-detail').height();
        var body = $('body').height() - $('.footer').height() - 150;
        $(window).scroll(function(){    
            var scroll = $(window).scrollTop() + $('.footer').height();
            if ( body >= stickyOffset) $('.siderbar-detail > .card').addClass('fixed');
            else $('.siderbar-detail').removeClass('fixed');
            if( scroll >= body) $('.siderbar-detail > .card').removeClass('fixed'); else $('.siderbar-detail > .card').addClass('fixed');
        });
    </script>
@stop