@extends('layouts.admin')
@section('title') Admin|Tai khoản @endsection
@section('title2')Thêm tài khoản học sinh Pdu
<a href="{{ url("admin/pduStudent")}}"><button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-new-window"></span> Thêm mới
</button>
</a> 
@endsection
@section('success') 
@if(Session::has('succcess'))
<br>
<div class="alert alert-success">
  <strong>Success!</strong>{{Session::get('succcess')}} 
</div>
@endif         
@endsection
@section('search')
<div class="form-search search-only">                        
  {!! Form::open(['method'=>'get','url'=>'admin/user']) !!}
  <i class="search-icon glyphicon glyphicon-search"></i>
  {!! Form::text('keyword','',['class'=>'form-control search-query']) !!}
  {!! Form::close() !!}
</div>
@endsection
@section('table-content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Tên Tài khoản</th>
      <th>Quyền</th>
      <th colspan="2">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($list))
    @foreach($list as $key)
    <tr>
      <td>{{$key->id}}</td>
      <td>{{$key->name}} <a href="{!! url('admin/user/'.$key->id.'/detail')!!}" style="border: 1px solid red;border-radius: 10px;padding: 2px">More</a></td>
      <td>{{$key->role->name}} </td>
      <td>
        <a href="{!! url('admin/user/'.$key->id.'/edit')!!}"> 
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-edit"></span> 
          </button>
        </a>
      </td>
      <td>
        {!! Form::open(['method'=>'delete','url'=>['admin/user',$key->id]]) !!}
        <button type="submit" onclick="return confirm('Are you sure!')" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>
        </button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection



