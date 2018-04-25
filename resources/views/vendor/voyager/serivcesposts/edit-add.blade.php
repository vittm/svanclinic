@extends('voyager::master')

@section('page_title', __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
            <div class="page-content container-fluid">
                <form class="form-edit-add" role="form" action="@if(!is_null($dataTypeContent->getKey())){{ URL::to('/services/editing-')}}{{$dataTypeContent->getKey()}}@else{{ URL::to('/services/updating') }}@endif" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <?php
                    if(!is_null($dataTypeContent->getKey())) {
                        $id = $dataTypeContent->getKey();
                        $post = DB::table('serivcesposts')->where('id','=',$dataTypeContent->getKey())->first();
                    }
                ?>
                    <div class="col-md-6">
                        <!-- ### TITLE ### -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-character"></i> Phần Header
                                </h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="name">Tiêu đề</label>
                                        <input type="text" class="form-control" id="header-title" name="header_title" placeholder="Title" value="@if(!is_null($dataTypeContent->getKey())){{$post->header_title}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">URL slug</label>
                                        <input type="text" class="form-control" id="header-slug" name="header_slug" placeholder="slug"  value="@if(!is_null($dataTypeContent->getKey())){{$post->header_slug}}@endif">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nội dung header</label>
                                        <textarea class="form-control" name="header_description" >@if(!is_null($dataTypeContent->getKey())){{$post->header_content}}@endif</textarea>
                                    </div>
                                    <div class="form-group">
                                        @if(isset($post->header_images))
                                            <img class="col-md-4" src="{{ filter_var($post->header_images, FILTER_VALIDATE_URL) ? $post->header_images : Voyager::image( $post->header_images ) }}" />
                                            <input type="hidden" class="form-control" name="header_images_hidden" value="@if(isset($post->header_images)) {{$post->header_images}} @endif" placeholder="address">
                                        @endif
                                        <input type="file" class="form-control" name="header_images" placeholder="address">
                                    </div>
                                </div>
                            </div>
                    
                            <div class="panel panel panel-bordered panel-warning">
                                <div class="panel-heading ">
                                    <h3 class="panel-title">HIỆU QUẢ SAU KHI SỬ DỤNG DỊCH VỤ
                                    </h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                    @if(!is_null($dataTypeContent->getKey()))
                                        @if(isset($post->result_images))
                                            <img  class="col-md-4" src="{{ filter_var($post->result_images, FILTER_VALIDATE_URL) ? $post->result_images : Voyager::image( $post->result_images ) }}" />
                                            <input type="hidden" class="form-control" name="result_images_hidden" value="@if(isset($post->result_images)) {{$post->result_images}} @endif" >
                                        @endif
                                    @endif
                                        <input type="file" class="form-control" value="@if(!is_null($dataTypeContent->getKey())){{ $post->result_images }}@endif"name="result_images" placeholder="address">
                                    </div>
                                    <textarea class="form-control richTextBox" id="richtextbody" name="result_excerpt" style="border:0px;">@if(!is_null($dataTypeContent->getKey())){!!$post->result_content!!}@endif</textarea>
                                </div>
                                
                            </div>
                            <!-- .panel -->
                            <!-- ### EXCERPT ### -->
                            <div class="panel panel-bordered panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Quy Trình Dịch Vụ</h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-body__productive">
                                    @if(!is_null($dataTypeContent->getKey()))
                                        <?php $productive = json_decode($post->productive,JSON_BIGINT_AS_STRING); ?>
                                        @if($productive && count($productive) > 0)
                                            @foreach ($productive as $key => $value)
                                                <div class="panel-body__productive__group">
                                                    <i class="voyager-x close-productive" style="font-size:25px;"></i>
                                                    <div class="form-group">
                                                    <input type="hidden" class="form-control" name="productive_images_hidden[]" value={{$value['name']}} placeholder="address">
                                                    <img  class="col-md-4" src="{{ filter_var($value['name'], FILTER_VALIDATE_URL) ? $value['name'] : Voyager::image( $value['name'] ) }}" />
                                                    </div>
                                                    <textarea class="form-control" name="productive_excerpt[]">{{ $value['description'] }}</textarea>
                                                    <input type="hidden" class="form-control" name="productive_excerpt_hidden[]" value={{ $value['description'] }} placeholder="address">
                                                    <input type="file" class="form-control" name="productive_images[]" placeholder="address">
                                                <br>
                                                </div>
                                            @endforeach
                                        @endif
                                    @else
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="productive_images[]" placeholder="address">
                                        </div>
                                        <textarea class="form-control" name="productive_excerpt[]"></textarea>
                                        <br>
                                    @endif
                                    </div>
                                    <a class="btn btn-sm btn-primary pull-right add-productive">Thêm quy trình</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                    <!-- ### DETAILS ### -->
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-clipboard"></i> Category</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Post Category</label>
                                <select class="form-control" name="category_id">
                                    <?php 
                                       $category = DB::table('categories')->get();
                                    ?>
                                    @foreach( $category as $key => $value)
                                        <option @if(!is_null($dataTypeContent->getKey()) && $value->id == $post->category_id ) selected="selected" @endif value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- ### IMAGE ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> Hình Ảnh trước và sau</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(!is_null($dataTypeContent->getKey()))
                                <?php $before = json_decode($post->images_before_after,JSON_BIGINT_AS_STRING); ?>
                                @if(count($before) > 0)
                                    @foreach($before as $key => $value)
                                        <img  class="col-md-4"  src="{{ filter_var($value['data'], FILTER_VALIDATE_URL) ? $value['data'] : Voyager::image( $value['data'] ) }}" />
                                        <input type="hidden" class="form-control" name="services_images_hidden" value='{{ $post->images_before_after }}' placeholder="address" multiple>
                                    @endforeach
                                @endif
                                <input type="file" class="form-control" name="services_images[]" placeholder="address" multiple>
                            @else
                                <input type="file" class="form-control" name="services_images[]" placeholder="address" multiple>
                            @endif
                            
                        </div>
                    </div>

                    <!-- ### SEO CONTENT ### -->
                    <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> Nguyên Lý và Công nghệ   </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">    
                                <label for="name">Mô tả</label>
                                <textarea class="form-control richTextBox" id="richtextbody" name="technical_description">@if(!is_null($dataTypeContent->getKey())){!!$post->technical_description!!}@endif</textarea>
                                
                            </div>
                            <div class="panel-body">
                                    @if(!is_null($dataTypeContent->getKey()))
                                        @if(isset($post->technical_images))
                                        <img  class="col-md-4"  src="{{ filter_var($post->technical_images, FILTER_VALIDATE_URL) ? $post->technical_images : Voyager::image( $post->technical_images ) }}" />
                                        <input type="hidden" class="form-control" name="technical_images_hidden" value="@if(isset($post->technical_images)) {{$post->technical_images}} @endif" placeholder="address">
                                        @endif
                                    @endif
                                <input type="file" class="form-control" name="technical_images" placeholder="">
                            </div>
                        </div>
                    </div>
                    
                     <!-- ### SEO CONTENT ### -->
                    <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> TẠI SAO NÊN CHỌN SVAN CLINIC & SPA   </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Mô tả</label>
                                <textarea class="form-control richTextBox" id="richtextbody" name="why_description">@if(!is_null($dataTypeContent->getKey())){!!$post->why_description!!}@endif</textarea>
                            </div>
                            <div class="panel-body">
                                    @if(!is_null($dataTypeContent->getKey()))
                                        @if(isset($post->why_images))
                                            <img  class="col-md-4" src="{{ filter_var($post->why_images, FILTER_VALIDATE_URL) ? $post->why_images : Voyager::image( $post->why_images ) }}" />
                                            <input type="hidden" class="form-control" name="why_images_hidden" value="@if(isset($post->why_images)) {{$post->why_images}} @endif" placeholder="address">
                                        @endif
                                    @endif
                                <input type="file" class="form-control" name="why_images" placeholder="">
                            </div>
                        </div>
                    </div> 
                      <!-- ### SEO CONTENT ### -->
                    <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> Phản hồi từ khách hàng   </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                       
                        @if(!is_null($dataTypeContent->getKey()) )
                         <?php $feedback = json_decode($post->feedback,JSON_BIGINT_AS_STRING); ?>
                                @if($feedback)   
                                    @foreach ($feedback as $key => $value)
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="name">Tên của khách hàng</label>
                                                <textarea class="form-control" name="name_feedback[]">{{$value['name']}}</textarea>
                                                <input type="hidden" class="form-control" name="name_feedback_hidden[]" value='{{$value['name']}}' placeholder="address">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Nội dung</label>
                                                <textarea class="form-control" name="description_feedback[]">{{$value['description']}}</textarea>
                                                <input type="hidden" class="form-control" name="description_feedback_hidden[]" value='{{$value['description']}}' placeholder="address">
                                            </div>
                                            <img  class="col-md-4" src="{{ filter_var($value['images'], FILTER_VALIDATE_URL) ? $value['images'] : Voyager::image( $value['images'] ) }}" />
                                            <input type="hidden" class="form-control" name="images_feedback_hidden[]" value='{{$value['images']}}' placeholder="address">
                                            <input type="file" class="form-control" name="images_feedback[]" value={{$value['images']}} placeholder="address">
                                        </div>
                                    @endforeach
                            @else
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="name">Tên của khách hàng</label>
                                    <textarea class="form-control" name="name_feedback[]"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung</label>
                                    <textarea class="form-control" name="description_feedback[]"></textarea>
                                </div>
                                <input type="file" class="form-control" name="images_feedback[]" placeholder="address">
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="name">Tên của khách hàng</label>
                                    <textarea class="form-control" name="name_feedback[]"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung</label>
                                    <textarea class="form-control" name="description_feedback[]"></textarea>
                                </div>
                                <input type="file" class="form-control" name="images_feedback[]" placeholder="address">
                            </div>   
                            @endif
                        @else
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="name">Tên của khách hàng</label>
                                    <textarea class="form-control" name="name_feedback[]"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung</label>
                                    <textarea class="form-control" name="description_feedback[]"></textarea>
                                </div>
                                <input type="file" class="form-control" name="images_feedback[]" placeholder="address">
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="name">Tên của khách hàng</label>
                                    <textarea class="form-control" name="name_feedback[]"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung</label>
                                    <textarea class="form-control" name="description_feedback[]"></textarea>
                                </div>
                                <input type="file" class="form-control" name="images_feedback[]" placeholder="address">
                            </div>    
                        @endif
                        </div>
                    </div>
                     <!-- ### SEO CONTENT ### -->
                     <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> LƯU Ý  </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Mô tả</label>
                                <textarea class="form-control richTextBox" id="richtextbody" name="noted_description">@if(!is_null($dataTypeContent->getKey())){!!$post->noted!!}@endif</textarea>
                            </div>
                        </div>
                    </div>                              
                </div>
                <button type="submit" class="btn btn-primary pull-right"><i class="icon wb-plus-circle"></i> @if(!is_null($dataTypeContent->getKey())) Cap Nhap @else Tao bai moi @endif</button>
                </form>
            </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('#slug').slugify();

        @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
        @endif
        });
    </script>
@stop
