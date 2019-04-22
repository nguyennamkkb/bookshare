@extends('layouts.admin')
@section('title') Admin| Bill @endsection
@section('success') 
@if(Session::has('succcess'))
<br>
<div class="alert alert-success">
  <strong>Success!</strong>{{Session::get('succcess')}} 
</div>
@endif         
@endsection
@section('search')
<div class="form-search search-only">                        
  {!! Form::open(['method'=>'get','url'=>'admin/user']) !!}
  <i class="search-icon glyphicon glyphicon-search"></i>
  {!! Form::text('keyword','',['class'=>'form-control search-query']) !!}
  {!! Form::close() !!}
</div>
@endsection
@section('table-content')
<table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
  <thead>
    <tr role="row">
      <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" >ID</th>
      <th class="sorting_asc col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Tên người order</th>
      <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Địa chỉ</th>
      <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Ngày đặt hàng</th>
      <th>Email</th>
      <th>Trạng thái</th>
      <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Action</th>
      <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Xóa</th></tr>
    </thead>
    <tbody>
      @foreach($bill as $bill)
      <tr>
        <td>{{ $bill->id }}</td>
        <td>{{ $bill->customers->name }}</td>
        <td>{{ $bill->customers->address }}</td>
        <td>{{ $bill->created_at }}</td>
        <td>{{ $bill->customers->email }}</td>
        <td>{{ $bill->statusod->name}}</td>
        <td><a href="{{ url('admin/bill')}}/{{ $bill->id }}/edit">Detail</a></td>
        <td>
         {!! Form::open(['method'=>'delete','url'=>['admin/bill',$bill->id]]) !!}
         <button type="submit" onclick="return confirm('Are you sure!')" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>
        </button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection



