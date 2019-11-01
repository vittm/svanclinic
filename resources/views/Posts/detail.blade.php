
@extends('layout')
<?php 
    $categories_btn = DB::table('categories')->where('id','=',$posts->category_id)->first();
    $categoryParent_btn = DB::table('categories')->where('id','=',$categories_btn->parent_id)->first();
?>    
@section('title')
<title>{{ $posts->title }}</title>
@endsection
@section('facebook_meta')
    <meta property="og:locale" content="vi_VN" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{ $posts->title }}" />
	@if($posts->meta_description != null)
	<meta property="og:description"   content="{{ $posts->meta_description}}" />
	<meta name="description"   content="{{ $posts->meta_description}}" />
	@endif
	@if($posts->meta_description == null)
	<meta property="og:description"   content="{!! $posts->excerpt !!}" />
	<meta name="description"   content="{!! $posts->excerpt !!}" />
	@endif
    <meta property="og:image"         content="{{Voyager::image($posts->image)}}    " />
    <meta name="keywords"             content="{{ $posts->meta_keywords}}"/>
    <meta property="og:url"          content="{{ URL::to(''.$categoryParent_btn->slug.'/'.$categories_btn->slug.'/'.$posts->slug)}}" />
@endsection
@section('content')
<!-- Page Content -->
<div class="container detail">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4 title__btn" style="font-size: 25px">{{ $posts->title }}</h1>
    <p class="title-posts hidden">{{ $posts->id }}</p>
    <p class="type-posts hidden">posts</p>
    <!-- Author -->
    <div class="author" ><p><i class="fa fa-calendar" style="position: relative; top: -1px;"></i> 
    {!! Carbon\Carbon::parse($posts->created_at)->format('d/m/Y')  !!}</p></div>


    <!-- Post Content -->
    <div class="hidden id__btn">{{$posts->slug}}</div>
    <div class="blog-content">
    {!! $posts -> body !!}
    </div>
    <!-- Your share button code -->
      <div class="fb-share-button" 
        data-href="{{ URL::to(''.$categoryParent_btn->slug.'/'.$categories_btn->slug.'/'.$posts->slug)}}" 
        data-layout="button_count">
      </div>

    <!-- List -->
    <br>
    <br>
    <h3>{{ __('web.relatedArticles') }}: </h3>
    <ul class="list-more">
        @foreach($more as $key => $value)
            <?php 
                $categories = DB::table('categories')->where('id','=',$value->category_id)->first();
                if($categories->parent_id != null){
                    $categoryParent = DB::table('categories')->where('id','=',$categories->parent_id)->first();
                }else {
                    $categoryParent = $categoriesSide;
                }
            ?>
            <li>
                <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categoryParent->slug.'/'.$categories->slug.'/'.$value->slug}}"> {{ $value->title}} <span style="color: #ccc; font-size: 12px; font-weight: 100;">({!! Carbon\Carbon::parse($value->created_at)->format('m/d/Y')  !!})</span></a>
            </li>
        @endforeach
    </ul>
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="siderbar-detail col-md-4 pl0 pr0">

    <!-- Side Widget -->
    <div class="card my-4">
      <h2 class="card-header" style="font-size:23px;padding-left:0;">{{ __('web.postNew') }}</h2>
      @foreach($randomPost->slice(0, 3) as $key => $value)
        <?php 
            $categoriesSide = DB::table('categories')->where('id','=',$value->category_id)->first();
            if($categoriesSide->parent_id != null){
                $categoryParentSide = DB::table('categories')->where('id','=',$categoriesSide->parent_id)->first();
            }else {
                $categoryParentSide = $categoriesSide;
            }
   
            $categoryParent= DB::table('menuhome_trans')->join('menuhomes','menuhomes.id','=','menuhome_trans.trans_id')->where([['menuhomes.child','=',$categoryParentSide->id],['menuhome_trans.lang_code','=',App::isLocale('en')? 'en': 'vi']])->first();
        ?>
        
        <a target="_blank" href="{{url('/')}}{{App::isLocale('en')? "/en" : ""}}/{{$categoryParentSide->slug.'/'.$categoriesSide->slug.'/'.$value->slug}}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl0 pr0" style="margin-top: 15px" data-aos="fade-right">
            <div class="col-lg-6 col-xs-12 pl0">
                <img src="{{Voyager::image($value->image)}}" alt="" width="100%">
            </div>
        
            <div class="col-lg-6 col-xs-12 pl0 pr0">
                    <div class="blog-column">
                    <h3>{{ $value->title }}</h3>
                        <span><i class="fa fa-calendar-alt"></i> {!! Carbon\Carbon::parse($value->created_at)->format('d/m/Y')  !!}</span>
                    <p>{!! $value->excerpt !!}</p>
                </div>
            </div>
        </a>
        @endforeach
        @if(isset($banner))
        <a target="_blank" class="col-md-12" href="{{$banner->link}}" style="margin-top: 30px; padding:0">
            <img src="{{Voyager::image($banner->images)}}" alt="" width="100%">
        </a>
        @endif
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection