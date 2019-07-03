@extends('layouts.admin')
@section('title2')Thêm mới hể loại @endsection
@section('table-content')

<div class="panel panel-default">
{!! Form::open(['method'=>'post','url'=>'admin/pduStudent/register']) !!}
	@include('user.form')
{!! Form::close() !!}
@endsection
