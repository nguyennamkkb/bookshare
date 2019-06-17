
@extends('layouts.index2')

@section('content')

<div class="col-md-12 col-sm-12 ol-lg-12">
	<form action="#">               
		<div class="table-content wnro__table table-responsive">
			<table>
				<thead>
					<tr class="title-top">
						<th class="product-thumbnail">Ảnh</th>
						<th class="product-name">Sản phẩm</th>
						<th class="product-price">Giá</th>
						<th class="product-quantity">Số lượng</th>
						<th class="product-subtotal">Tổng tiền</th>
						<th class="product-remove">Xóa</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($items as $key)
					<tr>
						<td class="product-thumbnail"><a href="#"><img src="{{ asset('uploads/product/'.$key->options->image) }}" alt="product img" width="100px"></a></td>
						<td class="product-name"><a href="#">{{$key->name}}</a></td>
						<td class="product-price"><span class="amount">{{number_format($key->price,0,',','.') }}</span></td>
						<td class="product-quantity"><input type="number" value="{{$key->qty}}" onchange="updateCart(this.value,'{{$key->rowId}}')"></td>
						<td class="product-subtotal">{{number_format($key->price*$key->qty,0,',','.') }}</td>
						<td class="product-remove"><a href="{{ url('cart/delete/'.$key->rowId) }}">X</a></td>
					</tr>

					@endforeach
					<tr>
						<td colspan="4" class="product-name" >Tổng tiền</td>
						<td class="product-remove"><a >{{$total}}</a></td>
					</tr>
					
					
				</tbody>
			</table>
		</div>
	</form> 
	<div class="cartbox__btn">
		<ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
			<li><a href="{{ url('cart/delete/all') }}">Xóa giỏ hàng</a></li>
			
		<li><a onclick="thanhtoan('{{(int)Cart::total()}}')" 
			{{-- href="{{ url('cart/checkout') }}" --}}>Thanh toán</a></li>
		</ul>
	</div>
</div>
<script type="text/javascript">
			function updateCart(qty,rowId) {
				$.get(
					'{{ url('cart/update') }}',
					{qty:qty,rowId:rowId},
					function () {
						location.reload();
					}
					);
			}
			function thanhtoan(total){
				var money = document.getElementById('money');
				var total=total+"000";
				if(Number(total)<Number(money.innerHTML)){
					window.location.href="{{ url('cart/checkout') }}";
				
				}else{
					alert('Tài khoản của bạn không đủ để mua đơn hàng này, vui lòng nạp thêm tiền');
      				return false;
				}

			}

		</script>
@endsection