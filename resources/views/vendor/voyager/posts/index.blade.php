@extends('voyager::master')

@section('content')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-file-text"></i> Bài Viết
    </h1>
    <a href="{{ URL::to('/admin/posts/create')}}" class="btn btn-success btn-add-new">
        <i class="voyager-plus"></i> <span>Thêm mới</span>
    </a>
    <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Xoá</span></a>

    <!-- /.modal -->

</div>
<div id="voyager-notifications"></div>
<div class="page-content browse container-fluid">
    <div class="alerts">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                @if(empty($check))
                                @else
                                    <i class="voyager-double-left" style="font-size: 15px; top: 2px; position: relative;"></i> <a href="{{ route('voyager.customers.index') }}">Quay lại Danh sách</a>
                                @endif
                                </div>
                                <div class="col-sm-6">
                                    <div id="dataTable_filter" class="dataTables_filter">
                                    <form  action="{{ URL::to('posts/search')}}" method="get" id="dataTable_filter" class="dataTables_filter">
                                        {{ csrf_field() }}    
                                        <label>Tìm Kiếm:
                                            <input type="search" name="search" class="form-control input-sm" placeholder="" aria-controls="dataTable">
                                        </label>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                                        <thead>
                                        <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 5px;"></th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                                                                    Tiêu đề
                                                                                                                                : activate to sort column ascending" style="width: 747px;">
                                                    Tiêu đề
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                                                                    status
                                                                                                                                : activate to sort column ascending" style="width: 59px;">
                                                    status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                                                                    created_at
                                                                                                                                : activate to sort column ascending" style="width: 139px;">
                                                    created_at
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                                                                    users
                                                                                                                                : activate to sort column ascending" style="width: 47px;">
                                                    users
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                                                                    categories
                                                                                                                                : activate to sort column ascending" style="width: 129px;">
                                                    categories
                                                </th>
                                                <th class="actions sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Thiết lập: activate to sort column ascending" style="width: 239px;">Thiết lập</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($news as $key => $value)
                                        
                                            <tr role="row" class="odd">
                                                <td>
                                                    <input type="checkbox" name="row_id" id="checkbox_1" value="1">
                                                </td>

                                                <td>
                                                    <div class="readmore" style="max-height: none;">{{ $value->title }}</div>
                                                </td>

                                                <td>

                                                    {{$value->status}}

                                                </td>
                                                <td>

                                                    {{$value->created_at}}

                                                </td>
                                                <?php
                                                    $user = DB::table('users')->where('id','=',$value->author_id)->first();
                                                    $category = DB::table('categories')->where('id','=',$value->category_id)->first();
                                                    $categoryParent = DB::table('categories')->where('id','=',$category->parent_id)->get(); 
                                                    foreach ($categoryParent as $key => $values) {
                                                        $slug = $values->slug;
                                                    }
                                                ?> 
                                                <td>
                                                    {{optional($user)->name}}
                                                </td>

                                                <td>
                                                    {{$category->name}}
                                                </td>
                                                <td class="no-sort no-click" id="bread-actions">
                                                <form action="{{ URL::to('/admin/posts')}}/{{$value->id}}/{{'delete'}}" method="get">
                                                    {{ csrf_field() }}   
                                                    <button type="submit" title="Xoá" class="btn btn-sm btn-danger pull-right delete" style="padding:3px 15px">
                                                        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Xoá</span>
                                                    </button>
                                                </form>
                                                    <a href="{{ URL::to('/admin/posts')}}/{{$value->id}}/{{'edit'}}" title="Chỉnh sửa" class="btn btn-sm btn-primary pull-right edit">
                                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Chỉnh sửa</span>
                                                    </a>

                                                    <a target="_blank" href="{{ URL::to(''.$slug.'/'.$category->slug.'/'.$value->slug)}}" title="Xem" class="btn btn-sm btn-warning pull-right">
                                                        <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Xem</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                        {{ $news->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
