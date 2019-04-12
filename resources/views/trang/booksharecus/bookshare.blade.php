@extends('layouts.index2')
@section('content')

<div class="container">
	<div class="row">
		
		<div class="col-lg-12 col-12">
			<div class="wn__single__product">
				<div class="row">
					
					<div class="col-lg-12 title__be--2">
						<div class="section__title--3 text-center pb--30">
							<h2 title__be--2>@foreach ($usdt as $usdt)
								{{$user->name}}
							</h2>
							<p>the right people for your project</p>
						</div>
					</div>
					
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="content text-left text_style--2">
								<h2>{{$usdt->fullname}}</h2>
								<div class="skill-container">
									<!-- Start single skill -->
									<div class="single-skill">
										<p>Giới tính : {{$usdt->sex}}</p>
										<hr>
									</div>
									<!-- End single skill -->
									<!-- Start single skill -->
									<div class="single-skill">
										<p>Địa chỉ : {{$usdt->address}}</p>
										<hr>
									</div>
									<div class="single-skill">
										<p>Số liên lạc : {{$usdt->phone_number}}</p>
										<hr>
									</div>
									<div class="single-skill">
										<p>Năm sinh : {{$usdt->birthday}}</p>
										<hr>
									</div>
									<div class="single-skill">
										<p>Địa chỉ shop : {{$usdt->address}}</p>
										<hr>
									</div>
									<!-- End single skill -->
								</div>
							</div>
						</div>
						@endforeach
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="content">

								<h2>Giới thiệu về cửa hàng</h2>
								<p class="mt--20 mb--20">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

							</div>
						</div>

					</div>
				</div>
			</div>
			
			<div class="product__info__detailed">
				<hr style="margin-bottom: 20px;">
				<div class="tab__container">
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
						<div class="description__attribute">
							<div class="wn__related__product">
								<div class="section__title text-center">
									<h2 class="title__be--2">Cửa hàng cá nhân</h2>
								</div>
								<div class="row mt--60">
									<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
										<!-- Start Single Product -->
										@foreach ($pro as $pro)
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="{{ url('product/'.$pro->id.'/detail') }}"><img src="{{asset('uploads/product/'.$pro->image)}}" alt="product image" style="width: 270px;height: 270px;"></a>
												<
												
											</div>
											<div class="product__content content--center content--center">
												<h4><a href="single-product.html">{{$pro->name}}</a></h4>
												<ul class="prize d-flex">
													<li>{{$pro->price}}</li>
												</ul>
												<div class="action">
													<div class="actions_inner">
														<ul class="add_to_links">
															<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
															<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
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
										
										<!-- Start Single Product -->
										
									</div>
								</div>
							</div>
						</div>
					</div>
					

				</div>
			</div>

		</div>
	</div>
</div>



@endsection