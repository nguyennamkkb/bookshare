@extends('layouts.admin')
@section('title') Admin|Tai khoản @endsection
@section('title2') Thông tin cá nhân @endsection
@section('success') 
@if(Session::has('succcess'))
<br>
<div class="alert alert-success">
  <strong>Success!</strong>{{Session::get('succcess')}} 
</div>
@endif         
@endsection
{{-- @section('search')
<div class="form-search search-only">                        
  {!! Form::open(['method'=>'get','url'=>'admin/user']) !!}
  <i class="search-icon glyphicon glyphicon-search"></i>
  {!! Form::text('keyword','',['class'=>'form-control search-query']) !!}
  {!! Form::close() !!}
</div>
@endsection --}}
@section('table-content')
@if(isset($list))
@foreach($list as $key)
<div class="row" >
  <div class="col-sm-3"><td><img src="{{url('uploads/user/'.$key->image)}}" class="img-thumbnail" alt="{{$key->fullname}}"></td></div>
  <div class="col-sm-9" style="">
    <div class="row">
      <table class="table" >
        <tbody>
          <tr>
            <td>Tên tài khoản :</td>
            <td>{{$user->name}}({{$user->role->name}})</td>
          </tr>
          <tr>
            <td>Tên Đầy đủ :</td>
            <td>{{$key->fullname}}</td>
          </tr>
          <tr>
            <td>Giới tính :</td>
            <td>{{$key->sex}}</td>
          </tr>
          <tr>
            <td>Địa chỉ :</td>
            <td>{{$key->address}}</td>
          </tr>

          <tr>
            <td>Ngày sinh :</td>
            <td>{{$key->birthday}}</td>
          </tr>

          <tr>
            <td>Số điện thoại :</td>
            <td>{{$key->phone_number}}</td>
          </tr>

          <tr>
            <td>Email:</td>
            <td>{{$user->email}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <a href="{!! url('admin/detail/'.$user->id.'/edit')!!}"> 
    <button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-edit"> Thay đổi thông tin</span> 
    </button>
  </a>
  <a href="{!! url('admin/user')!!}"> 
    <button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-step-backward">Trở về</span> 
    </button>
  </a>


</div>

@endforeach
@endif

@endsection



