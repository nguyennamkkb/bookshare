@extends('layouts.index2')
@section('title2')Edit {{$product->name}}@endsection
@section('content')

<div class="panel panel-default">
	{!! Form::model($product,['method'=>'patch','url'=>['customer/sharebook',$product->id],'files'=>true])!!}
	@include('trang.booksharecus.form')
	{!!Form::close()!!}

</div>
@endsection
