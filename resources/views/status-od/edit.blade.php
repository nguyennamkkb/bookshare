@extends('layouts.admin')
@section('title2')Edit @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($stod,['method'=>'patch','url'=>['admin/status-od',$stod->id],'files'=>true])!!}
	@include('status-od.form')
	{!!Form::close()!!}

</div>
@endsection
