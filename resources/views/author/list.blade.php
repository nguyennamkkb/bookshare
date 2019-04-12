@extends('layouts.admin')
@section('title') Admin|Tác giả @endsection
@section('title2')Thêm Tác giả
<a href="{{ url("admin/author/create")}}"><button type="button" class="btn btn-default btn-sm">
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
  {!! Form::open(['method'=>'get','url'=>'admin/author']) !!}
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
      <th>Tên tác giả</th>
      <th>Thông tin</th>
      <th colspan="2">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($list))
    @foreach($list as $key)
    <tr>
      <td>{{$key->id}}</td>
      <td>{{$key->name}} </td>
      <td>{{$key->info}} </td>
      <td>
        <a href="{!! url('admin/author/'.$key->id.'/edit')!!}"> 
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-edit"></span> 
          </button>
        </a>
      </td>
      <td>
        {!! Form::open(['method'=>'delete','url'=>['admin/author',$key->id]]) !!}
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



