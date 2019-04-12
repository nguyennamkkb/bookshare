@extends('layouts.admin')
@section('title2')Thêm mới hể loại @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/category']) !!}
	@include('category.form')
{!! Form::close() !!}
@endsection
