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
                <form class="form-edit-add" role="form" action="http://localhost/svanclinic/public/admin/posts" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <!-- ### TITLE ### -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-character"></i> Post Title
                                    
                                    <span class="panel-desc"> The title for your post</span>
                                </h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="">
                                </div>
                            </div>
                            <!-- ### CONTENT ### -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="icon wb-book"></i> Post Content
                                    </h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div id="mceu_20" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px;">
                                    <div id="mceu_20-body" class="mce-container-body mce-stack-layout">
                                        <div id="mceu_21" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item mce-first" hidefocus="1" tabindex="-1" role="group">
                                            <div id="mceu_21-body" class="mce-container-body mce-stack-layout">
                                                <div id="mceu_22" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar">
                                                    <div id="mceu_22-body" class="mce-container-body mce-flow-layout">
                                                        <div id="mceu_23" class="mce-container mce-flow-layout-item mce-first mce-btn-group" role="group">
                                                            <div id="mceu_23-body">
                                                                <div id="mceu_0" class="mce-widget mce-btn mce-menubtn mce-first mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-haspopup="true">
                                                                    <button id="mceu_0-open" role="presentation" type="button" tabindex="-1">
                                                                        <span class="mce-txt">Formats</span>
                                                                        <i class="mce-caret"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" role="button"
                                                                aria-label="Bold">
                                                                    <button id="mceu_1-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-bold"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_2" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Italic">
                                                                    <button id="mceu_2-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-italic"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_3" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Underline">
                                                                    <button id="mceu_3-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-underline"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_24" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                            <div id="mceu_24-body">
                                                                <div id="mceu_4" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" tabindex="-1" aria-haspopup="true" aria-label="Text color">
                                                                    <button role="presentation" hidefocus="1" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-forecolor"></i>
                                                                        <span id="mceu_4-preview" class="mce-preview"></span>
                                                                    </button>
                                                                    <button type="button" class="mce-open" hidefocus="1"
                                                                    tabindex="-1">
                                                                        <i class="mce-caret"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_5" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" tabindex="-1" aria-haspopup="true" aria-label="Background color">
                                                                    <button role="presentation" hidefocus="1" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-backcolor"></i>
                                                                        <span id="mceu_5-preview" class="mce-preview"></span>
                                                                    </button>
                                                                    <button type="button" class="mce-open" hidefocus="1"
                                                                    tabindex="-1">
                                                                        <i class="mce-caret"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_25" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                            <div id="mceu_25-body">
                                                                <div id="mceu_6" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Align left">
                                                                    <button id="mceu_6-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-alignleft"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Align center">
                                                                    <button id="mceu_7-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-aligncenter"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_8" class="mce-widget mce-btn mce-last" tabindex="-1" role="button"
                                                                aria-label="Align right">
                                                                    <button id="mceu_8-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-alignright"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_26" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                            <div id="mceu_26-body">
                                                                <div id="mceu_9" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Bullet list">
                                                                    <button id="mceu_9-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-bullist"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_10" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Numbered list">
                                                                    <button id="mceu_10-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-numlist"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_11" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Decrease indent">
                                                                    <button id="mceu_11-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-outdent"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_12" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Increase indent">
                                                                    <button id="mceu_12-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-indent"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_27" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                            <div id="mceu_27-body">
                                                                <div id="mceu_13" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-label="Insert/edit link">
                                                                    <button id="mceu_13-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-link"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_14" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Insert/edit image">
                                                                    <button id="mceu_14-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-image"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_15" class="mce-widget mce-btn mce-menubtn" tabindex="-1" aria-labelledby="mceu_15"
                                                                role="button" aria-label="Table" aria-haspopup="true">
                                                                    <button id="mceu_15-open" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-table"></i>
                                                                        <i class="mce-caret"></i>
                                                                    </button>
                                                                </div>
                                                                <div id="mceu_16" class="mce-widget mce-btn" tabindex="-1" role="button"
                                                                aria-label="Insert Youtube video">
                                                                    <button id="mceu_16-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-none" style="background-image: url('http://localhost/svanclinic/public/vendor/tcg/voyager/assets/js/plugins/youtube/icon.png')"></i>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                id="mceu_17" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Giphy GIF Search">
                                                                    <button id="mceu_17-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-none" style="background-image: url('http://localhost/svanclinic/public/vendor/tcg/voyager/assets/js/plugins/giphy/html/img/giphy_icon_16.png')"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_28" class="mce-container mce-flow-layout-item mce-btn-group" role="group">
                                                            <div id="mceu_28-body">
                                                                <div id="mceu_18" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="Source code">
                                                                    <button id="mceu_18-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-code"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="mceu_29" class="mce-container mce-flow-layout-item mce-last mce-btn-group" role="group">
                                                            <div id="mceu_29-body">
                                                                <div id="mceu_19" class="mce-widget mce-btn mce-first mce-last" tabindex="-1" role="button" aria-label="Form điền thông tin">
                                                                    <button id="mceu_19-button" role="presentation" type="button" tabindex="-1">
                                                                        <i class="mce-ico mce-i-none" style="background-image: url('http://p.yusukekamiyamane.com/icons/search/fugue/icons/application-form.png')"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mceu_30" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;">
                                            <iframe id="richtextbody_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 600px; display: block;"></iframe>
                                        </div>
                                        <div id="mceu_31"
                                    class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;">
                                            <div id="mceu_31-body" class="mce-container-body mce-flow-layout">
                                                <div id="mceu_32" class="mce-path mce-flow-layout-item mce-first">
                                                    <div class="mce-path-item">&nbsp;</div>
                                                </div>
                                                <div id="mceu_33" class="mce-flow-layout-item mce-last mce-resizehandle">
                                                    <i class="mce-ico mce-i-resize"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <textarea class="form-control richTextBox" id="richtextbody" name="body" style="border: 0px; display: none;" aria-hidden="true"></textarea>
                            </div>
                            <!-- .panel -->
                            <!-- ### EXCERPT ### -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Excerpt 
                                        <small>Small description of this post</small>
                                    </h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <textarea class="form-control" name="excerpt"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                    <!-- ### DETAILS ### -->
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-clipboard"></i> Post Details</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">URL slug</label>
                                                                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" {="" data-slug-origin="title" data-slug-forceupdate="true}" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">Post Status</label>
                                <select class="form-control" name="status">
                                    <option value="PUBLISHED">published</option>
                                    <option value="DRAFT">draft</option>
                                    <option value="PENDING">pending</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Post Category</label>
                                <select class="form-control" name="category_id">
                                                                            <option value="1">Tin Tức</option>
                                                                            <option value="2">Tin Tức Dịch Vụ</option>
                                                                            <option value="3">Dịch Vụ</option>
                                                                            <option value="6">GIẢM CÂN &amp; GIẢM BÉO</option>
                                                                            <option value="7">Giảm béo công nghệ Contri UltraShape</option>
                                                                            <option value="8">Giới Thiệu</option>
                                                                            <option value="10">TRỊ LIỆU CÔNG NGHỆ CAO</option>
                                                                            <option value="11">Kiến Thức Làm Đẹp</option>
                                                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Featured</label>
                                <input type="checkbox" name="featured">
                            </div>
                        </div>
                    </div>

                    <!-- ### IMAGE ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                                                        <input type="file" name="image">
                        </div>
                    </div>

                    <!-- ### SEO CONTENT ### -->
                    <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Meta Description</label>
                                                                <textarea class="form-control" name="meta_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Meta Keywords</label>
                                                                <textarea class="form-control" name="meta_keywords"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Seo Title</label>
                                                                <input type="text" class="form-control" name="seo_title" placeholder="SEO Title" value="">
                            </div>
                        </div>
                    </div>
                </div>
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
