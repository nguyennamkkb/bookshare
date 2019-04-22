@extends('layouts.index2')
@section('content')

<div class="container">
	<div class="col-lg-12 col-12">
		<div class="row">
			<div class="product__info__detailed">
				<div class="pro_details_nav nav justify-content-start" role="tablist">
					<a class="nav-item nav-link active"  data-toggle="tab" href="#nav-waitting" role="tab">Chờ xác nhận</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-delivery" role="tab">đang giao hàng</a>
					<a class="nav-item nav-link " data-toggle="tab" href="#nav-ordered" role="tab">Đơn hàng đã mua</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-cancelled" role="tab">Đã hủy</a>
				</div>
				<div class="tab__container">
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade show " id="nav-ordered" role="tabpanel">
						<div class="description__attribute">
							
							<div class="col-md-12 col-sm-12 ol-lg-12">

								<div class="table-content wnro__table table-responsive">
									@if(isset($billdagiao1))
									
									<table>
										<thead>
											<tr class="title-top">
												<th class="product-thumbnail">Stt</th>
												<th class="product-name">Mã đơn hàng</th>
												<th class="product-price">Ngày đặt</th>
												<th class="product-quantity">Nhà cung cấp</th>
												<th class="product-subtotal">Số Tiền</th>
											</tr>
										</thead>
										<tbody>
											@php
											$key=0;
											@endphp
											@foreach($billdagiao as $dagiaohang)
											<tr>
												<td class="product-name">{{$key++}}</td>
												<td class="product-name"><a href="{{url('customer/detailod/'.$dagiaohang->id)}}">{{$dagiaohang->id}}</a></td>
												<td class="product-name">{{$dagiaohang->date_order}}</td>
												<td class="product-name">{{$dagiaohang->user->name}}</td>
												<td class="product-name">{{$dagiaohang->total}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									@else
									Không có đơn hàng nào !
									@endif
									
								</div>
								
							</div>
						</div>
					</div>
					<div class="pro__tab_label tab-pane fade show " id="nav-delivery" role="tabpanel">
						<div class="description__attribute">
							<div class="col-md-12 col-sm-12 ol-lg-12">

								<div class="table-content wnro__table table-responsive">
									@if($billdanggiao1)

									<table>
										<thead>
											<tr class="title-top">
												<th class="product-thumbnail">Stt</th>
												<th class="product-name">Mã đơn hàng</th>
												<th class="product-price">Ngày đặt</th>
												<th class="product-quantity">Nhà cung cấp</th>
												<th class="product-subtotal">Số Tiền</th>
											</tr>
										</thead>
										<tbody>
											@php
											$key=0;
											@endphp
											@foreach($billdanggiao as $dagiao)
											<tr>
												<td class="product-name">{{$key++}}</td>
												<td class="product-name"><a href="{{url('customer/detailod/'.$dagiao->id)}}">{{$dagiaohang->id}}</a></td>
												<td class="product-name">{{$dagiao->date_order}}</td>
												<td class="product-name">{{$dagiao->user->name}}</td>
												<td class="product-name">{{$dagiao->total}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									@else
									Không có đơn hàng nào !
									@endif
								</div>
								
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade show active" id="nav-waitting" role="tabpanel">
						<div class="review__attribute">
							
							<div class="table-content wnro__table table-responsive">
								
								@if($billcxn1)
								<table>
									<thead>
										<tr class="title-top">
											<th class="product-thumbnail">Stt</th>
											<th class="product-name">Mã đơn hàng</th>
											<th class="product-price">Ngày đặt</th>
											<th class="product-quantity">Nhà cung cấp</th>
											<th class="product-subtotal">Số Tiền</th>
										</tr>
									</thead>
									<tbody>
										@php
										$key=0;
										@endphp
										@foreach($billcxn as $choxn)
										<tr>
											<td class="product-name">{{$key++}}</td>
											<td class="product-name"><a href="{{url('customer/detailod/'.$choxn->id)}}">{{$dagiaohang->id}}</a></td>
											<td class="product-name">{{$choxn->date_order}}</td>
											<td class="product-name">{{$choxn->user->name}}</td>
											<td class="product-name">{{$choxn->total}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								@else
								Không có đơn hàng nào !
								@endif
							</div>
							
						</div>
						
					</div>
					<div class="pro__tab_label tab-pane fade show" id="nav-cancelled" role="tabpanel">
						<div class="review__attribute">
							<div class="table-content wnro__table table-responsive">
								@if(isset($billhuy1))
								<table>
									<thead>
										<tr class="title-top">
											<th class="product-thumbnail">Key</th>
											<th class="product-name">Mã đơn hàng</th>
											<th class="product-price">Ngày đặt</th>
											<th class="product-quantity">Địa chỉ</th>
											<th class="product-subtotal">Số Tiền</th>
										</tr>
									</thead>
									<tbody>
										@php
										$key=0;
										@endphp
										@foreach($billhuy as $huy)
										<tr>
											<td class="product-name">{{$key++}}</td>
											<td class="product-name"><a href="{{url('customer/detailod/'.$huy->id)}}">{{$dagiaohang->id}}</a></td>
											<td class="product-name">{{$huy->date_order}}</td>
											<td class="product-name">{{$huy->user->name}}</td>
											<td class="product-name">{{$huy->total}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								@else
								Không có đơn hàng nào !
								@endif

							</div>
							
						</div>
						
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</div>
	</div>

</div>
@endsection