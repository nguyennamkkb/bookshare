<div class="row">
	<div class="col-lg-8" style=" border-right: 0.5px solid #FF2929; ">
		<div class="panel-body">
			<div class="form-horizontal">
				<div class="form-group">
					{!!Form::label('Tên tác phẩm',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::text('name',null,['id'=>'txtname','class'=>'form-control'])!!}
					</div>
				</div>
				{!! $errors->first('name','<p style="color:#761b18;">:message</p>') !!} 

				<div class="form-group">
					{!!Form::label('Giá',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::number('price',null,['id'=>'txtgia','class'=>'form-control'])!!}
					</div>
				</div>
				{!! $errors->first('price','<p style="color:#761b18;">:message</p>') !!} 

				<div class="form-group">
					{!!Form::label('Nội dung',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::textarea ('noidung',null,['id'=>'txtsoluong','class'=>'ckeditor'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Ngày xuất bản',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::date('publication_date',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Thể loại sách',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::select('id_category',$cate,null,['class'=>'form-control'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Số lượng',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::number('quantity',null,['id'=>'','class'=>'form-control'])!!}
					</div>
				</div>

				<div class="form-group">
					{!!Form::label('Nhà xuất bản',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::select('id_publishing',$pub,null,['id'=>'','class'=>'form-control'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Tác giả',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::select('id_author',$auth,null,['id'=>'','class'=>'form-control'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Ảnh',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::file('image',null,['id'=>'','class'=>'form-control'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Book demo',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::file('bookdemo',null,['id'=>'','class'=>'form-control'])!!}
					</div>
				</div>
				<div class="form-group">
					{!!Form::label('Book Full',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!!Form::file('bookfull',null,['id'=>'','class'=>'form-control'])!!}
					</div>
				</div>
				@if(isset($product))
				<div class="form-group">
					{!!Form::label('Ảnh bìa sách','',['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						<img src="{{url('uploads/product/'.$product->image)}}" style="width:200px;height: auto; ">
					</div>
				</div>
				@endif
				@if(isset($stt))
				<div class="form-group">
					{!!Form::label('Trạng thái',null,['class'=>'col-md-2 control-label'])!!}
					<div class="col-md-10">
						{!! Form::select('id_status',$stt,null,['class'=>'form-control']) !!}
					</div>
				</div>
				@endif

				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						{!!Form::submit('save',['class'=>'btn btn-info'])!!}
						<a href="{{ url("admin/")}}"><button type="button" class="btn btn-default btn-sm">
						Trở về </a>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4">
	<div class="form-group">
		{!!Form::label('Thêm thể loại mới',null,['class'=>'ontrol-label'])!!}
		<input type="text" class="form-control" id="namecate" placeholder="Tên danh mục"><br>
		<div class="">
			<button class="btn btn-success" type="button"  onclick="themcate()">Thêm</button>  
		</div>
	</div>
	<hr>
	<br>
	<div class="form-group">
		{!!Form::label('Thêm nhà xuất bản mới',null,['class'=>'ontrol-label'])!!}
		<input type="text" class="form-control" id="namenxb" placeholder="Tên nxb"><br>
		<div class="">
			<button class="btn btn-success" type="button" onclick="themnxb()">Thêm</button>  
		</div>
	</div>
	<hr>
	<br>
	<div class="form-group">
		{!!Form::label('Thêm Tác giả mới',null,['class'=>'ontrol-label'])!!}
		<input type="text" class="form-control" id="nametg" placeholder="Tên tác giả"><br>
		<div class="">
			<button class="btn btn-success" type="button"  onclick="themtacgia()">Thêm</button>  
		</div>
	</div>
	<hr>

</div>

