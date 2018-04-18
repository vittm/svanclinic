@extends('voyager::master')
@section('content')

<div class="table-responsive">
   <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <div class="row">
         
         <div class="col-sm-12">
            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTable"></label></div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
               <thead>
                  <tr role="row">
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        Title
                        : activate to sort column ascending" style="width: 100px;">
                        Điện Thoại
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        Post Image
                        : activate to sort column ascending" style="width: 74px;">
                        Email
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        status
                        : activate to sort column ascending" style="width: 100px;">
                        Họ Và Tên
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
                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                        seo_title
                        : activate to sort column ascending" style="width: 56px;">
                        Ngày
                     </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($customers as $key => $value)
                  <tr role="row" class="even">
                     
                     <td>
                       {{ $value-> phone }}
                     </td>
                     <td>
                     {{ $value-> email }}
                     </td>
                     <td>
                     {{ $value-> name}}
                        
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
                     @if(!$value->status || $value->status === 'NULL') Chưa chăm sóc @else Đã Chăm Sóc @endif
                       
                     </td>
                     <td class="no-sort no-click" id="bread-actions">
                     @if(!$value->employer || $value->employer === 'NULL')
                        <select name="dataTable_length" aria-controls="dataTable" class="form-control selected-employer">
                            <option key-user="{{ $value->id }}" value="NULL">--- Chọn ---</option>
                            <option key-user="{{ $value->id }}" value="yes"> Chăm Sóc</option>
                        </select>
                    @else
                        {{$value->employer}}
                    @endif
                        
                     </td>
                     <td class="no-sort no-click" id="bread-actions">
                        {{ $value->updated_at }}
                     </td>
                     
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-5">
            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
         </div>
         <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
               <ul class="pagination">
                  <li class="paginate_button previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0">Previous</a></li>
                  <li class="paginate_button active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0">1</a></li>
                  <li class="paginate_button next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0">Next</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection