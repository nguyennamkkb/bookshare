@extends('layouts.admin')
@section('title2')Edit {{ $eva->name}}  @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($eva,['method'=>'patch','url'=>['admin/evaluate',$eva->id],'files'=>true])!!}
	@include('evaluate.form')
	{!!Form::close()!!}

</div>
@endsection
