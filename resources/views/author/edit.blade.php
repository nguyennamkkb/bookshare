@extends('layouts.admin')
@section('title2')Edit {{ $au->name}}  @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($au,['method'=>'patch','url'=>['admin/author',$au->id],'files'=>true])!!}
	@include('author.form')
	{!!Form::close()!!}

</div>
@endsection
