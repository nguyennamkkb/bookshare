@extends('layouts.admin')
@section('title') Admin|Tai khoản @endsection
@section('success') 
@if(Session::has('succcess'))
<br>
<div class="alert alert-success">
  <strong>Success!</strong>{{Session::get('succcess')}} 
</div>
@endif         
@endsection
{{-- @section('search')
<div class="form-search search-only">                        
  {!! Form::open(['method'=>'get','url'=>'admin/user']) !!}
  <i class="search-icon glyphicon glyphicon-search"></i>
  {!! Form::text('keyword','',['class'=>'form-control search-query']) !!}
  {!! Form::close() !!}
</div>
@endsection --}}
@section('table-content')

<a href="{!! url('admin/user/'.$user->id.'/detail')!!}"> 
    <button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-edit"> Nhập thông tin</span> 
    </button>
  </a>
@endsection



