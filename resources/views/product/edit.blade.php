@extends('layouts.admin')
@section('title2')Edit {{$product->name}}@endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($product,['method'=>'patch','url'=>['admin/product',$product->id],'files'=>true])!!}
	@include('product.form')
	{!!Form::close()!!}

</div>
@endsection
