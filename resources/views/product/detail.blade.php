@extends('layouts.admin')
@section('title') Admin|Tác phẩm @endsection
@section('title2')Thông tin tác tác phẩm
@endsection
@section('success')   
@endsection
@section('search')
@endsection
@section('table-content')
@if (isset($list))
@foreach ($list as $key)

<div class="row">
	<div class="col-md-4">
		<img src="{{url('uploads/product/'.$key->image)}}" style="width:400px;height:auto; ">
	</div>
	<div class="col-md-7">
		<p><h2>{{$key->name}}</h2></p>
		<p>Đánh giá</p>
		<p>Tác giả:{{$key->author->name}}, NXB:{{$key->publishing->name}}</p>
		<hr>
		<p>Giá :{{$key->price}}VND</p>
	</div>
</div>
<div class="row"style="margin-left: 50px;">
	<table >
		<tr>
			<td>Nhà xuất bản</td>
			<td>{{$key->publishing->name}}</td>
		</tr>
		<tr>
			<td>Tác giả</td>
			<td>{{$key->author->name}}</td>
		</tr>
		<tr>
			<td>Ngày xuất bản</td>
			<td>{{$key->publication_date}}</td>
		</tr>
		<tr>
			<td>Danh mục sách</td>
			<td>{{$key->category->name}}</td>
		</tr>
		<tr>
			<td>Người chia sẻ</td>
			<td>{{$key->user->name}}</td>
		</tr>
	</table>
	<br>
	{!! $key->noidung!!}
</div>
@endforeach
@endif
@endsection



