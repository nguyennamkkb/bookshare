@extends('layouts.admin')
@section('title2')Thêm mới Trạng thái Product @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/status-pro']) !!}
	@include('status-pro.form')
{!! Form::close() !!}
@endsection
