@extends('layouts.admin')
@section('title2')Edit {{ $img->name}}  @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($img,['method'=>'patch','url'=>['admin/image',$img->id],'files'=>true])!!}
	@include('image.form')
	{!!Form::close()!!}

</div>
@endsection
