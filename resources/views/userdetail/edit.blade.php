@extends('layouts.admin')

@section('title2')Edit {{ $detail->fullname}}  @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($detail,['method'=>'patch','url'=>['admin/detail',$detail->id],'files'=>true])!!}
	@include('userdetail.form')
	{!!Form::close()!!}

</div>
@endsection
