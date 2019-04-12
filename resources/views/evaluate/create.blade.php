@extends('layouts.admin')
@section('title2')Thêm đánh giá @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/evaluate']) !!}
	@include('evaluate.form')
{!! Form::close() !!}
@endsection
