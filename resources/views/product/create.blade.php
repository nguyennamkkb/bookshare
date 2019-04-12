@extends('layouts.admin')
@section('title2')Thêm mới Tác phẩm @endsection
@section('table-content')

		<div class="panel panel-default">
			{!! Form::open(['method'=>'post','url'=>'admin/product','files'=>true])!!}
			@include('product.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>

@endsection
<script type="text/javascript">
	function themnxb(){
		var nxbname=document.getElementById('namenxb').value;
		$.get(
			'{{url('admin/themnxb')}}',
			{name:nxbname},
			function(){
				location.reload();
			}
			)
	}
	
	function themcate() {
		var catename=document.getElementById('namecate').value;
		$.get(
			'{{ url('admin/themcate')}}',
			{name:catename},
			function(){
				location.reload();
			}

			)
	}
	
	function themtacgia(){
		var nametg=document.getElementById('nametg').value;
		$.get(
			'{{url('admin/themtg')}}',
			{name:nametg},
			function(){
				location.reload();
			}
			)
	}
</script>