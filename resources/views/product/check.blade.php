
@extends('layouts.admin')
@section('title') Admin|Tác phẩm @endsection
@section('title2')Duyệt tác phẩm 
<a href="{{ url("admin/product/create")}}"><button type="button" class="btn btn-default btn-sm">
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
	{!! Form::open(['method'=>'get','url'=>'admin/product']) !!}
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
			<th>Ảnh</th>
			<th>Tên tác phẩm</th>
			<th>Số lượng</th>
			<th>Danh mục</th>
			<th>Giá</th>
			<th colspan="3">Tác vụ</th>
		</tr>
	</thead>
	<tbody>
		@if(isset($check))
		@foreach($check as $key)
		<tr>
			<td>{{$key->id}}</td>
			<td><img src="{{url('uploads/product/'.$key->image)}}" style="width:100px;height:auto; "></td>
			<td><a href="{{ url('admin/product/'.$key->id.'/detail') }}" style="color:#426D70; font-weight: bold;">{{$key->name}}</a> @if ($key->id_status<>2)
				>><span class="glyphicon glyphicon-warning-sign"></span>
				@endif 
			</td>
			<td>{{$key->quantity}}</td>
			<td>{{$key->category->name}}</td>
			<td>{{$key->price}}</td>
			<td>
				<a href="{!! url('admin/product/'.$key->id.'/edit')!!}"> 
					<button type="button" class="btn btn-warning btn-sm">
						<span class="glyphicon glyphicon-edit"></span> 
					</button>
				</a>
			</td>
			<td>
				{!! Form::open(['method'=>'delete','url'=>['admin/product',$key->id]]) !!}
				<button type="submit" onclick="return confirm('Are you sure!')" class="btn btn-danger btn-sm">
					<span class="glyphicon glyphicon-trash"></span>
				</button>
				{!! Form::close() !!}
			</td>
			<td>
				<a href="{!! url('admin/product/'.$key->id.'/check')!!}"> 
					<button type="button" class="btn btn-info btn-sm">
						<span class="glyphicon glyphicon-ok" ></span> 
					</button>
				</a>
			</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>
@endsection



