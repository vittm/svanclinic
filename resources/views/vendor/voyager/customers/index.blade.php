@extends('voyager::master')
@section('content')

<div class="table-responsive">
   <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
   <br>
   
   <div class="col-sm-12">
   <p>Khi search ngày tháng ghi đầy đủ ngày tháng vd: 30/6/2017</p>
   <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
   <br>
   @if(empty($check))
   @else
     <i class="voyager-double-left" style="font-size: 15px; top: 2px; position: relative;"></i> <a href="{{ route('voyager.customers.index') }}">Quay lại Danh sách</a>
   @endif
   <form  action="{{ URL::to('/customers/search') }}" method="get" id="dataTable_filter" class="dataTables_filter">
        <label>Tìm Kiếm:<input type="search" name="search" class="form-control input-sm" placeholder="" aria-controls="dataTable"></label>
   </form>
   </div>
   <br>
      <div class="row">
         <div class="col-sm-12">
            <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
               <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        Date
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        status
                        : activate to sort column ascending" style="width: 100px;">
                        Name
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        Title
                        : activate to sort column ascending" style="width: 100px;">
                        Mobile
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        Link
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        UTM_Source
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        featured
                        : activate to sort column ascending" style="width: 58px;">
                        UTM_Medium
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        UTM_Campaign
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        Tình Trạng
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        Nhân Viên
                     </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($customers as $key => $value)
                  <tr role="row" class="even">
                     <td class="no-sort no-click" id="bread-actions">
                        {!! $value->created_at  !!}
                     </td>
                     
                     <td>
                     {{ $value-> name }}
                     </td>
                     <td>
                       {{ $value-> phone }}
                     </td>
                     <td class="no-sort no-click" id="bread-actions">
                    <?php
                        if($value->title) {
                            if($value->types == "posts"){
                                $post = DB::table('posts')->where('id','=',$value->title)->first(); 
                            }elseif($value->types == "services") {
                                $post = DB::table('serivcesposts')->where('id','=',$value->title)->first();
                            }elseif($value->types == 'null' || $value->types == "" || $value->types == 'contact') {
                                $post = '';
                            }
                            if($post) {
                                $category = DB::table('categories')->where('id','=',$post->category_id)->first(); 
                                $categoryParent = DB::table('categories')->where('id','=',$category->parent_id)->first(); 
                            }
                        }
                    ?>
                    <a target="_blank" style="font-size: 14px;text-align: left;" 
                       href="@if($post)
                                    @if($value->types == 'posts' )
                                        {{ URL::to(''.$categoryParent->slug.'/'.$category->slug.'/'.$post->slug) }} 
                                    @elseif($value->types == 'services') 
                                        {{ URL::to('/dich-vu/'.$category->slug.'/'.$post->header_slug) }} @endif @endif">
                        @if($post)
                                    @if($value->types == 'posts' && $post != "") 
                                        @if($post->title)
                                            {{ $post->title}}
                                        @endif 
                                    @elseif ($value->types == 'services') 
                                        {{ $post->header_title}} 
                                    @elseif ($value->types == 'contact') 
                                        'Form Liên Hệ' @endif @endif </a>
                                 
                     </td>
                     <td>
                        {{ $value-> source}}
                     </td>
                     <td>
                     {{ $value-> medium}}
                        
                     </td>
                     <td class="no-sort no-click" id="bread-actions">
                     {{ $value-> campaign}}
                     </td>
                     <td class="no-sort no-click" id="bread-actions">
                     @if(!$value->status) Chưa chăm sóc @else Đã Chăm Sóc @endif
                       
                     </td>
                     <td class="no-sort no-click" id="bread-actions">
                     @if(!$value->employer || $value->employer == 'NULL')
                        <select name="dataTable_length" aria-controls="dataTable" class="form-control selected-employer">
                            <option key-user="{{ $value->id }}" value="NULL">--- Chọn ---</option>
                            <option key-user="{{ $value->id }}" value="yes"> Chăm Sóc</option>
                        </select>
                    @else
                        {{$value->employer}}
                    @endif
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            <div class="row">
                <div class="col-sm-5">
                    
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection