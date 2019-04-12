@extends('layouts.admin')
@section('title2')Thêm quyền mới @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/role']) !!}
	@include('role.form')
{!! Form::close() !!}
@endsection
