@extends('layouts.admin')
@section('title2')Edit {{ $pul->name}}  @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($pul,['method'=>'patch','url'=>['admin/publisher',$pul->id],'files'=>true])!!}
	@include('publisher.form')
	{!!Form::close()!!}

</div>
@endsection
