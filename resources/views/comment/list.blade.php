@extends('layouts.admin')
@section('title') Admin|Comment @endsection
@section('title2') Quản lý comment
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
  {!! Form::open(['method'=>'get','url'=>'admin/comment']) !!}
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
      <th>Post</th>
      <th>User</th>
      <th>Nội dung</th>
      <th >Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($list))
    @foreach($list as $key)
    <tr>
      <td>{{$key->id}}</td>
      <td>{{$key->product->name}} </td>
      <td>{{$key->user->name}} </td>
      <td>{{$key->comment}} </td>
      
      <td>
        {!! Form::open(['method'=>'delete','url'=>['admin/comment',$key->id]]) !!}
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



