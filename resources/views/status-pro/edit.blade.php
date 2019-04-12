@extends('layouts.admin')
@section('title2')Edit @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($stpro,['method'=>'patch','url'=>['admin/status-pro',$stpro->id],'files'=>true])!!}
	@include('status-pro.form')
	{!!Form::close()!!}

</div>
@endsection
