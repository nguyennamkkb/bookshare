@extends('layouts.admin')
@section('title2')Edit @endsection
@section('table-content')

<div class="panel panel-default">
	{!! Form::model($role,['method'=>'patch','url'=>['admin/role',$role->id],'files'=>true])!!}
	@include('role.form')
	{!!Form::close()!!}

</div>
@endsection
