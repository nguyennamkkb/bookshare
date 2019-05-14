@extends('layouts.index2')
@section('content')
<div class="container">
	<div class="row">
		@foreach ($userdt as $key)
		<div class="col-lg-12 col-sm-12">
			<div class="wn__single__product">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="wn__fotorama__wrapper">
							<div class="" data-nav="thumbs">
								<a href="1.jpg"><img src="{{url('uploads/user/'.$key->image)}}" style="width: 300px;height: auto;"></a>

							</div>
						</div>
					</div>

					<div class="col-lg-6 col-12">
						<div class="product__info__main">
							<h1>{{$user->name}}(<a href="{{url('customer/profile/'.$user->id.'/edit')}}" >edit</a>)
							</h1>
							<div class="product__overview" style="margin: 0;padding-top:10px;padding-bottom: 0">
								Tên đầy đủ : {{$key->fullname}}
							</div>
							<div class="product__overview" style="margin: 0;padding-top: 10px;padding-bottom: 0">
								Giới tính : {{$key->sex}}
							</div>
							<div class="product__overview" style="margin: 0;padding-top: 10px;padding-bottom: 0">
								Địa chỉ : {{$key->address}}
							</div>
							<div class="product__overview" style="margin: 0;padding-top: 10px;padding-bottom: 0">
								Ngày sinh : {{$key->birthday}}
							</div>
							<div class="product__overview" style="margin: 0;padding-top: 10px;padding-bottom: 0">
								Số liên lạc : {{$key->phone_number}}
							</div>

						</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="product__info__detailed">
				<div class="pro_details_nav nav justify-content-start" role="tablist">
					<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Sách chia sẻ</a>
					<a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab"></a>
				</div>
				<div class="row">

					<!-- Start Single Product -->
					@foreach($pro as $product)
					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="{{ url('product/'.$product->id.'/detail') }}" style="width: 269px;height: 210px; display: block;margin-left: auto;margin-right: auto;"><img src="{{url('uploads/product/'.$product->image)}}" alt="product image" style="height: 210px;width: auto; display: block;margin-left: auto;margin-right: auto;"></a>

						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.html">{{$product->name}}</a></h4>
							<ul class="prize d-flex">
								<li>{{number_format($product->price)}}VND</li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="wishlist" href="http://localhost:8080/bookshare/public/cart/add/1"><i class="bi bi-shopping-cart-full"></i></a></li>
										<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
										<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					
					<!-- End Single Product -->
					
				</div>
			</div>

		</div>
	</div>
</div>

@endsection
