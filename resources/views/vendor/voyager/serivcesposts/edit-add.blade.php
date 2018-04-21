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
                <form class="form-edit-add" role="form" action="{{ URL::to('/services/updating') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
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
                                        <input type="text" class="form-control" id="header-title" name="header_title" placeholder="Title" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">URL slug</label>
                                        <input type="text" class="form-control" id="header-slug" name="header_slug" placeholder="slug"  value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nội dung header</label>
                                        <textarea class="form-control" name="header_description" data-gramm="true" data-txt_gramm_id="f4f162e2-4765-9f5d-26b1-b73e1ac09da2" data-gramm_id="f4f162e2-4765-9f5d-26b1-b73e1ac09da2" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none; background: transparent !important;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input required type="file" class="form-control" name="header_images" placeholder="address" multiple>
                                    </div>
                                </div>
                            </div>
                    <!-- ### CONTENT ### -->
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">HIỆU QUẢ SAU KHI SỬ DỤNG DỊCH VỤ
                                    </h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input required type="file" class="form-control" name="result_images" placeholder="address" multiple>
                                    </div>
                                    <textarea class="form-control"  name="result_excerpt"></textarea>
                                </div>
                                
                            </div>
                            <!-- .panel -->
                            <!-- ### EXCERPT ### -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Quy Trình Dịch Vụ</h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-body__productive">
                                        <div class="form-group">
                                            <input required type="file" class="form-control" name="productive_images[]" placeholder="address" multiple>
                                        </div>
                                        <textarea class="form-control" name="productive_excerpt[]"></textarea>
                                    </div>
                                    <br>
                                    <a class="btn btn-sm btn-primary pull-right add-productive">Thêm quy trình</a>
                                </div>
                            </div>
                            <!-- ### EXCERPT ### -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">TẠI SAO NÊN CHỌN SVAN CLINIC & SPA
                                    </h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <textarea class="form-control" name="why"></textarea>
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
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
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
                            <input required type="file" class="form-control" name="services_images[]" placeholder="address" multiple>
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
                                <textarea class="form-control" name="technical_description"></textarea>
                            </div>
                            <div class="panel-body">
                                <input required type="file" class="form-control" name="technical_images" placeholder="">
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
                                <textarea class="form-control" name="why_description"></textarea>
                            </div>
                            <div class="panel-body">
                                <input required type="file" class="form-control" name="why_images" placeholder="">
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
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="name">Tên của khách hàng</label>
                                    <textarea class="form-control" name="name_feedback[]"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung</label>
                                    <textarea class="form-control" name="description_feedback[]"></textarea>
                                </div>
                                <input required type="file" class="form-control" name="images_feedback[]" placeholder="address">
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
                                <input required type="file" class="form-control" name="images_feedback[]" placeholder="address">
                            </div>
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
                                <textarea class="form-control" name="noted_description"></textarea>
                            </div>
                        </div>
                    </div>                              
                </div>
                <button type="submit" class="btn btn-primary pull-right"><i class="icon wb-plus-circle"></i> Create New Post</button>
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
