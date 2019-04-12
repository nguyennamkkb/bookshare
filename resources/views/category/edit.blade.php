@extends('layouts.admin')
@section('title2')Edit @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($cate,['method'=>'patch','url'=>['admin/category',$cate->id],'files'=>true])!!}
	@include('category.form')
	{!!Form::close()!!}

</div>
@endsection
