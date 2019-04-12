@extends('layouts.admin')
@section('title2')Thêm mới Tác giả @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/author']) !!}
	@include('author.form')
{!! Form::close() !!}
@endsection
