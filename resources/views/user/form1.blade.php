<div class="panel-body">
	<div class="form-horizontal">
		<div class="form-group">
			{!!Form::label('Tên tài khoản',null,['class'=>'col-md-2 control-label'])!!}
			<div class="col-md-10">
				{!!Form::text('name',null,['id'=>'txtname','class'=>'form-control'])!!}
			</div>
		</div>
		<div class="form-group">
			{!!Form::label('Cập nhật quyền',null,['class'=>'col-md-2 control-label'])!!}
			<div class="col-md-10">
				{!!Form::select('id_role',$role,null,['class'=>'form-control'])!!}
			</div>
		</div>
		

		{!! $errors->first('name','<p style="color:#761b18;">:message</p>') !!} 
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				{!!Form::submit('save',['class'=>'btn btn-info'])!!}
				<a href="{{ url("admin/user")}}"><button type="button" class="btn btn-default btn-sm">
					Trở về
				</button>
			</div>
		</div>
	</div>
</div>