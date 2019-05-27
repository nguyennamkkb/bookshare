@extends('layouts.index2')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-8">
			<div class="wn__single__product">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="wn__fotorama__wrapper">
							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
								<a href="1.jpg"><img src="{{url('uploads/product/'.$pro->image)}}" alt=""></a>
								<a href="2.jpg"><img src="{{url('uploads/product/'.$pro->image)}}" alt="" ></a>

							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="product__info__main">
							<p style="font-size: 30px; font-weight: bold">	 {{$pro->name}}</p>
							<br>
							
							@if($pro->user->id_role <> 1)
							<div class="price-box">
								<h5>Giá PDF: <font color="#b93a3a" id="price">{{$pro->price}} </font> <font color="#b93a3a"  >vnd</font>	 </h5>
							</div>
							@else
							<div class="price-box">
								<h5>Giá sách: <font color="#b93a3a" >{{$pro->price}} </font> <font color="#b93a3a"  >vnd</font>	 </h5>
								<h5>Giá PDF: <font color="#b93a3a" id="price">{{$pro->price*0.3}} </font> <font color="#b93a3a"  >vnd</font>	 </h5>
							</div>
							@endif
							<div class="box-tocart d-flex">

								@if (Auth::user())
								<button type="button" class="btn btn-success" onclick="trutien('{{Auth::user()->id}}','{{$pro->id_user}}','{{$pro->price}}','{{$pro->id}}','{{$pro->bookfull
								
								}}')" >
									{{-- <a href="{{ url('uploads/bookfull/'.$pro->bookfull) }}" style="color: #FFFFFF" >Đọc sách</a> --}}
									 Đọc PDF
								</button>
								@if($pro->user->id_role <> 2)
								<button type="button" class="btn btn-warning" style=" margin-left: 20px;"><a href="{{ url('cart/add/'.$pro->id) }}" style="color: #FFFFFF;" >Mua sách</a>
								</button>
								@endif
								
								
								
								@endif

								<button type="button" class="btn btn-info" style="margin-left: 10px" ><a href="{{ url('uploads/bookdemo/'.$pro->bookdemo) }}" style="color: #FFFFFF" >Đọc thử</a>
								</button>
								


								



							</div>
							<div class="product_meta">
								<table class="table">
									<tbody>
										<tr>
											<td>Danh mục sách:</td>
											<td>{{$pro->category->name}}</td>
										</tr>
										<tr>
											<td>Tác giả</td>
											<td>{{$pro->author->name}}</td>
										</tr>
										<tr>
											<td>Nhà xuất bản</td>
											<td>{{$pro->publishing->name}}</td>
										</tr>
										<tr>
											<td>Nhà cung cấp</td>
											<td>{{$pro->user->name}}</td>
										</tr>

									</tbody>
								</table>

							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="product__info__detailed">
				<div class="pro_details_nav nav justify-content-start" role="tablist">
					<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
				</div>
				<div class="tab__container">
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
						<div class="description__attribute">
							{!!$pro->noidung!!}
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
						<div class="review__attribute">
							<div class="review__ratings__type d-flex">
								<div class="review-ratings">


									@foreach ($comment as $cm)

									<div class="rating-summary d-flex">
										<font color="#2501FF" style="margin-right: 5px;padding-right: 5px;"><b>{{$cm->user->name  }} </b>:</font> <p> {{ $cm->comment}}</p>
									</div>
									<hr style="margin-bottom: 10px">
									@endforeach

								</div>

							</div>
						</div>
						<div class="review-fieldset">
							<h2>Nhận sét sản phẩm:</h2>
							<div class="review-field-ratings">

							</div>
							<div class="review_form_field">

								{!! Form::model($pro,['method'=>'patch','url'=>['customer/reviewct',$pro->id],'files'=>true])!!}


								<div class="input_box">
									<textarea name="reviewct" class="form-control" rows="5" id="comment"></textarea>

								</div>
								<div class="review-form-actions">
									<br>
									{!! Form::submit('Gửi nhận xét', ['class' =>'btn btn-default']) !!}
									{!! Form::close() !!}
								</div>


							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>

		</div>

		<div class="col-lg-3" style="padding-left: 40px;display: block;">
			<aside class="wedget__categories ">
				<h3 class="wedget__title">Sách mới</h3>
				@foreach($allpro as $allpro1)
				<div class="media">

					<div class="media-left">
						<img src="{{url('uploads/product/'.$allpro1->image)}}" style="width: 60px;height: auto;margin-right: 10px;margin-bottom: 5px;">
					</div>
					<div class="media-body">
						<h5 class="media-heading"><a href="{{ url('product/'.$allpro1->id.'/detail') }}">{{$allpro1->name}}</a></h5>
						<p style="color: #b93a3a">{{number_format($allpro1->price)}} VND</p>
					</div>
				</div>
				<hr>
				@endforeach



			</ul>
		</aside>
	</div>
</div>

</div>
</div>
@endsection