@extends('layouts.index2')
@section('title2')Chia sẻ @endsection
@section('content')

		{!! Form::open(['method'=>'post','url'=>'customer/sharebook','files'=>true,'class'=>'col-lg-12'])!!}
		@include('trang.booksharecus.form')
		{!!Form::close()!!}
@endsection

