@extends('layouts.admin')
@section('title') Admin|Trạng thái sản phẩm@endsection
@section('title2')Thêm Trạng thái sản phẩm
<a href="{{ url("admin/status-pro/create")}}"><button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-new-window"></span> Thêm mới
</button>
</a> 
@endsection
@section('success') 
@if(Session::has('Success'))
<br>
<div class="alert alert-success">
  <strong>Success!</strong>{{Session::get('Success')}} 
</div>
@endif         
@endsection
@section('search')
<div class="form-search search-only">                        
  {!! Form::open(['method'=>'get','url'=>'admin/status-pro']) !!}
  <i class="search-icon glyphicon glyphicon-search"></i>
  {!! Form::text('keyword','',['class'=>'form-control search-query']) !!}
  {!! Form::close() !!}
</div>
@endsection
@section('table-content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Trạng thái sản phẩm</th>
      <th colspan="2">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($list))
    @foreach($list as $key)
    <tr>
      <td>{{$key->id}}</td>
      <td>{{$key->name}} </td>
      <td>
        <a href="{!! url('admin/status-pro/'.$key->id.'/edit')!!}"> 
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-edit"></span> 
          </button>
        </a>
      </td>
      <td>
        {!! Form::open(['method'=>'delete','url'=>['admin/status-pro',$key->id]]) !!}
        <button type="submit" onclick="return confirm('Are you sure!')" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>
        </button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection



