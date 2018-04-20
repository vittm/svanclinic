
@extends('layout')

@section('content')
<!-- Page Content -->
<div class="container detail">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4 title-posts">{{ $posts->title }}</h1>
    <!-- Author -->
    <div class="author" ><p><i class="fa fa-calendar" style="position: relative; top: -1px;"></i> 
    {!! Carbon\Carbon::parse($posts->created_at)->format('m/d/Y')  !!}</p><p ><i class="fa fa-user"></i> by <a href="">{{ $users->name}}</a></p></div>


    <!-- Post Content -->
    <div class="blog-content">
    {!! $posts -> body !!}
    </div>      
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4 pl0">

    <!-- Side Widget -->
    <div class="card my-4">
      <h2 class="card-header font-elsie ">Recent News</h2>
      
      @foreach($randomPost as $key => $value)
        <a href="{{ URL::to('/posts/'.$value->slug) }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl0" style="margin-top: 15px" data-aos="fade-right">
            <div class="col-lg-6 col-xs-12 pl0">
                <img src="{{Voyager::image($value->image)}}" alt="" width="100%">
            </div>
        
            <div class="col-lg-6 col-xs-12 pl0 pr0">
                    <div class="blog-column">
                    <h3>{{ $value->title }}</h3>
                        <span><i class="fa fa-calendar-alt"></i> {!! Carbon\Carbon::parse($posts->created_at)->format('m/d/Y')  !!}</span>
                    <p>{{ $value->excerpt }}</p>
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