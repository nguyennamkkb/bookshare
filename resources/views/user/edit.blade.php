@extends('layouts.admin')
@section('title2')Edit {{ $user->name}}  @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($user,['method'=>'patch','url'=>['admin/user',$user->id],'files'=>true])!!}
	@include('user.form1')
	{!!Form::close()!!}

</div>
@endsection
