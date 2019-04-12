<div class="row" >
	<div class="col-sm-3">

		@if(isset($detail))
		<img src="{{url('uploads/user/'.$detail->image)}}"  class="img-thumbnail">
		@endif
	</div>
	<div class="col-sm-9">
		<div class="row">
			<table class="table" >
				<tbody>
					<tr>
						<td>{!!Form::label('Tên đầy đủ',null,[])!!}</td>
						<td>{!!Form::text('fullname',null,['id'=>'','class'=>'form-control'])!!}</td>
					</tr>
					<tr>
						<td>{!!Form::label('Giói tính',null,[])!!}</td>
						<td>{!!Form::select('sex',['Nam'=>'Nam','Nữ'=>'Nữ'],null,['class'=>'form-control'])!!}</td>
					</tr>
					<tr>
						<td>{!!Form::label('Địa chỉ',null,[])!!}</td>
						<td>{!!Form::text('address',null,['id'=>'','class'=>'form-control'])!!}</td>
					</tr>
					<tr>
						<td>{!!Form::label('Ngày sinh',null,[])!!}</td>
						<td>{!!Form::date('birthday', \Carbon\Carbon::now(),['id'=>'','class'=>'form-control'])!!}</td>
					</tr>

					<tr>
						<td>{!!Form::label('Số điện thoại',null,[])!!}</td>
						<td>{!!Form::text('phone_number',null,['id'=>'','class'=>'form-control'])!!}</td>
					</tr>

					<tr>
						<td>Ảnh đại diện</td>
						<td>{!!Form::file('image',null,['id'=>'','class'=>'form-control'])!!}</td>
					</tr>
					<tr>
						<td>
							{!!Form::submit('save',['class'=>'btn btn-info'])!!}
							<a href="{{ url('admin/user/'.$detail->id_user.'/detail')}}">
								<button type="button" class="btn btn-default btn-sm">
									Trở về
								</button>
							</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
