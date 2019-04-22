
@extends('layouts.index2')

@section('content')





	
	<div class="col-lg-6 col-12">
		<div class="customer_details">
			<h3>Chi tiết thanh toán</h3>
			<div class="customar__field">
				<form action="{{ url('cart/checkout') }}" method="post" >
					@csrf
					<div class="margin_between">

						<div class="input_box space_between">
							<label>Họ<span>*</span></label>
							<input type="text" name="ho">
						</div>
						<div class="input_box space_between">
							<label>Tên <span>*</span></label>
							<input type="text" name="ten">
						</div>
					</div>
					<div class="input_box">
						<label>Thành phố<span>*</span></label>
						<input type="" name="thanhpho">
					</div>


					<div class="input_box">
						<label>Quận/huyện<span>*</span></label>
						<input type="" name="quan">
					</div>
					<div class="input_box">
						<label>Xã<span>*</span></label>
						<input type="" name="phuong">
					</div>
					<div class="input_box">
						<label>Địa chỉ nhận hàng <span>*</span></label>
						<input type="text" name="diachinhan">
					</div>
					<div class="margin_between">
						<div class="input_box space_between">
							<label>Điện thoại liên hệ <span>*</span></label>
							<input type="text" name="phone">
						</div>

						<div class="input_box space_between">
							<label>Địa chỉ Email<span>*</span></label>
							<input type="email" name="email">
						</div>
					</div>
					<div class="input_box">
						<button class="select__option btn-info">Xác nhận đặt hàng</button>
					</div>
				</form>
			</div>
			
		</div>
		
	</div>
	<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
		<div class="wn__order__box">
			<h3 class="onder__title">Your order</h3>
			<ul class="order__total">
				<li>Product</li>
				<li>Total</li>
			</ul>
			<ul class="order_product">
				@foreach ($items as $item)
				<li>{{$item->name}}× {{$item->qty}}<span>{{number_format($item->qty*$item->price)}}</span></li>
				@endforeach        						
			</ul>
			<ul class="shipping__method">
				
				<li>Shipping :30k</li>
			</ul>
			<ul class="total__amount">
				<li>Tổng tiền <span>{{Cart::total()}}</span></li>
			</ul>
		</div>



	</div>
</div>
</div>
</section>
@endsection