@extends('layouts.index2')
@section('content')
<div class="container">
	<div class="row">
		@foreach ($userdt as $key)
		<div class="col-lg-9 col-12">
			<div class="wn__single__product">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="wn__fotorama__wrapper">
							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
								<a href="1.jpg"><img src="{{url('uploads/user/'.$key->image)}}" alt=""></a>

							</div>
						</div>
					</div>

					<div class="col-lg-6 col-12">
						<div class="product__info__main">
							<h1>{{$user->name}}
							</h1>
							<div class="product__overview" style="margin: 0;padding-top:10px;padding-bottom: 0">
								Tên đầy đủ : {{$key->fullname}}
							</div>
							<div class="product__overview" style="margin: 0;padding-top: 10px;padding-bottom: 0">
								Giới tính : {{$key->sex}}
							</div>
							<div class="product__overview" style="margin: 0;padding-top: 10px;padding-bottom: 0">
								Địa chỉ : {{$key->addres}}
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
				<div class="tab__container">
					<!-- Start Single Tab Content -->
					<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
						<div class="description__attribute">
							<div class="wn__related__product">
								<div class="section__title text-center">
									<h2 class="title__be--2">upsell products</h2>
								</div>
								<div class="row mt--60">
									<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
										<!-- Start Single Product -->
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
												<div class="hot__box">
													<span class="hot-label">BEST SALLER</span>
												</div>
											</div>
											<div class="product__content content--center">
												<h4><a href="single-product.html">robin parrish</a></h4>
												<ul class="prize d-flex">
													<li>$35.00</li>
													<li class="old_prize">$35.00</li>
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
										<!-- Start Single Product -->
										<!-- Start Single Product -->
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/3.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/4.jpg" alt="product image"></a>
												<div class="hot__box color--2">
													<span class="hot-label">HOT</span>
												</div>
											</div>
											<div class="product__content content--center">
												<h4><a href="single-product.html">The Remainng</a></h4>
												<ul class="prize d-flex">
													<li>$35.00</li>
													<li class="old_prize">$35.00</li>
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
										<!-- Start Single Product -->
										<!-- Start Single Product -->
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/7.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/8.jpg" alt="product image"></a>
												<div class="hot__box">
													<span class="hot-label">HOT</span>
												</div>
											</div>
											<div class="product__content content--center">
												<h4><a href="single-product.html">Lando</a></h4>
												<ul class="prize d-flex">
													<li>$35.00</li>
													<li class="old_prize">$50.00</li>
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
										<!-- Start Single Product -->
										<!-- Start Single Product -->
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/9.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/10.jpg" alt="product image"></a>
												<div class="hot__box">
													<span class="hot-label">HOT</span>
												</div>
											</div>
											<div class="product__content content--center">
												<h4><a href="single-product.html">Doctor Wldo</a></h4>
												<ul class="prize d-flex">
													<li>$35.00</li>
													<li class="old_prize">$35.00</li>
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
										<!-- Start Single Product -->
										<!-- Start Single Product -->
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/11.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
												<div class="hot__box">
													<span class="hot-label">BEST SALER</span>
												</div>
											</div>
											<div class="product__content content--center content--center">
												<h4><a href="single-product.html">Animals Life</a></h4>
												<ul class="prize d-flex">
													<li>$50.00</li>
													<li class="old_prize">$35.00</li>
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
										<!-- Start Single Product -->
										<!-- Start Single Product -->
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/6.jpg" alt="product image"></a>
												<div class="hot__box">
													<span class="hot-label">BEST SALER</span>
												</div>
											</div>
											<div class="product__content content--center content--center">
												<h4><a href="single-product.html">Olio Madu</a></h4>
												<ul class="prize d-flex">
													<li>$50.00</li>
													<li class="old_prize">$35.00</li>
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