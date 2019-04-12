@extends('layouts.admin')
@section('title') Admin|Quyền @endsection
@section('title2')Thêm Quyền 
<a href="{{ url("admin/role/create")}}"><button type="button" class="btn btn-default btn-sm">
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
  {!! Form::open(['method'=>'get','url'=>'admin/role']) !!}
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
      <th>Quyền</th>
      <th>Nghĩa vụ</th>
      <th colspan="2">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($list))
    @foreach($list as $key)
    <tr>
      <td>{{$key->id}}</td>
      <td>{{$key->name}} </td>
      <td>{{$key->permission}} </td>
      <td>
        <a href="{!! url('admin/role/'.$key->id.'/edit')!!}"> 
          <button type="button" class="btn btn-default btn-sm" style="background-color: #07AC3D;">
            <span class="glyphicon glyphicon-edit"></span> 
          </button>
        </a>
      </td>
      <td>
        {!! Form::open(['method'=>'delete','url'=>['admin/role',$key->id]]) !!}
        <button type="submit" onclick="return confirm('Are you sure!')" class="btn btn-default btn-sm" style="background-color: #FF0000;">
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



