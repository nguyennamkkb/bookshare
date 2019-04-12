@extends('layouts.admin')
@section('title2')Thêm mới Trạng thái Order @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/status-od']) !!}
	@include('status-od.form')
{!! Form::close() !!}
@endsection
