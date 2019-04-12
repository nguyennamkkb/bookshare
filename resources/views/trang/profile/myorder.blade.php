@extends('layouts.index2')
@section('content')

<div class="container">
	<div class="col-lg-12 col-12">
		<div class="row">
			<div class="product__info__detailed">
				<div class="pro_details_nav nav justify-content-start" role="tablist">
					<a class="nav-item nav-link active"  data-toggle="tab" href="#nav-waitting" role="tab">Chờ xác nhận</a>
					<a class="nav-item nav-link " data-toggle="tab" href="#nav-ordered" role="tab">Đã đặt hàng</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-delivered" role="tab">Đã giao hàng</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-cancelled" role="tab">Đã hủy</a>
				</div>
				<div class="tab__container">
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade show active" id="nav-ordered" role="tabpanel">
						<div class="description__attribute">
							<<div class="col-md-12 col-sm-12 ol-lg-12">

								<div class="table-content wnro__table table-responsive">
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
											<tr>
												<td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/1.jpg" alt="product img"></a></td>
												<td class="product-name"><a href="#">Natoque penatibus</a></td>
												<td class="product-price"><span class="amount">$165.00</span></td>
												<td class="product-quantity"><input type="number" value="1"></td>
												<td class="product-subtotal">$165.00</td>
												<td class="product-remove"><a href="#">X</a></td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div class="cartbox__btn">
									<ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
										<li><a href="#">Coupon Code</a></li>
										<li><a href="#">Apply Code</a></li>
										<li><a href="#">Update Cart</a></li>
										<li><a href="#">Check Out</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="pro__tab_label tab-pane fade show active" id="nav-delivered" role="tabpanel">
						<div class="description__attribute">
							<p>Đã giao hangfcho vào đây</p>
							<ul>
								<li>• Two-tone gray heather hoodie.</li>
								<li>• Drawstring-adjustable hood. </li>
								<li>• Machine wash/dry.</li>
							</ul>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade" id="nav-waitting" role="tabpanel">
						<div class="review__attribute">
							<div class="table-content wnro__table table-responsive">
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

										@foreach ($billcxn as $cxn)
										<tr>
											<td class="product-thumbnail">{{$cxn->id}}</td>
											<td class="product-name"><a href="#">{{}}</a></td>
											<td class="product-price"><span class="amount">$165.00</span></td>
											<td class="product-quantity"><input type="number" value="1"></td>
											<td class="product-subtotal">$165.00</td>
										</tr>

										@endforeach
										
									</tbody>
								</table>
							</div>
							
						</div>
						
					</div>
					<div class="pro__tab_label tab-pane fade" id="nav-cancelled" role="tabpanel">
						<div class="review__attribute">
							<h1>Đã hủy</h1>
							<h2>Hastech</h2>
							
						</div>
						
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</div>
	</div>

</div>
@endsection