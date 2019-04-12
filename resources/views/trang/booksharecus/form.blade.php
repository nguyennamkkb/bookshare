

<div class="col-lg-12 col-12">
	<div class="customer_details">
		<h3>Chia sẻ sách của bạn</h3>
		<div class="customar__field">
			<div class="margin_between">
				<div class="input_box space_between">
					{!!Form::label('Tên tác phẩm',null,[])!!}
					{!!Form::text('name',null,['id'=>'txtname'])!!}
					{!! $errors->first('name','<p style="color:#761b18;">:message</p>') !!} 
				</div>
				<div class="sinput_box space_between">
					{!!Form::label('Giá',null,[])!!}
					{!!Form::number('price',null,['class'=>'select__option'])!!}
				</div>
			</div>
			<div class="input_box">
				{!!Form::label('Nội dung',null,[])!!}
				{!!Form::textarea ('noidung',null,['id'=>'txtsoluong','class'=>'ckeditor'])!!}
			</div>
			<div class="input_box">
				{!!Form::label('Tác giả',null,[])!!}

				{!!Form::select('id_author',$auth,null,['class'=>'select__option'])!!}
			</div>
			<div class="input_box">
				{!!Form::label('Nhà xuất bản',null,[])!!}

				{!!Form::select('id_publishing',$pub,null,['class'=>'select__option'])!!}
			</div>
			<div class="input_box">
				{!!Form::label('Danh mục',null,[])!!}

				{!! Form::select('id_category', $cate1,null, ['class'=>'select__option']) !!}
			</div>
			<div class="input_box">
				{!!Form::label('Ngày xuất bản',null)!!}

				{!!Form::date('publication_date',\Carbon\Carbon::now(),[])!!}
			</div>
			
			<div class="input_box">
				{!!Form::label('Số lượng',null,[])!!}

				{!!Form::number('quantity',null,['id'=>'',])!!}
			</div>
			<div class="input_box">
				{!!Form::label('Image',null,[])!!}

				{!!Form::file('image',null,['id'=>'',])!!}
			</div>
			<div class="margin_between">
				<div class="input_box space_between">
					{!!Form::label('Book demo',null,[])!!}

					{!!Form::file('bookdemo',null,['id'=>'',])!!}
				</div>

				<div class="input_box space_between">
					{!!Form::label('Book Full',null,[])!!}

					{!!Form::file('bookfull',null,['id'=>'',])!!}
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						{!!Form::submit('save',['class'=>'btn btn-info'])!!}
						<a href="{{ url("/")}}"><button type="button" class="btn btn-default btn-sm">
							Trở về
						</button>
					</div>
				</div>
			</div>
			@if(isset($product))
			<div class="form-group">
				{!!Form::label('Ảnh bìa sách','',[])!!}

				<img src="{{url('uploads/product/'.$product->image)}}" style="width:200px;height: auto; ">
			</div>
		</div>
		@endif
	</div>
	
</div>

