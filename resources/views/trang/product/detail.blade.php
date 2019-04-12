@extends('layouts.index2')
@section('content')

<div class="container">
	<div class="col-lg-9 col-12">
		<div class="wn__single__product">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="wn__fotorama__wrapper">
						<div class="fotorama wn__fotorama__action" data-nav="thumbs">
							<a href="1.jpg"><img src="{{url('uploads/product/'.$pro->image)}}" alt=""></a>
							<a href="2.jpg"><img src="{{url('uploads/product/'.$pro->image)}}" alt=""></a>

						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="product__info__main">
						<h1>{{$pro->name}}</h1>
						<div class="product-reviews-summary d-flex">
							<ul class="rating-summary d-flex">
								<li><i class="zmdi zmdi-star-outline"></i></li>
								<li><i class="zmdi zmdi-star-outline"></i></li>
								<li><i class="zmdi zmdi-star-outline"></i></li>
								<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
								<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
							</ul>
						</div>
						<div class="price-box">
							<span>{{$pro->price}} VND</span>
						</div>
						<div class="box-tocart d-flex">

							<div class="addtocart__actions">
								<a href="{{ url('uploads/bookfull/'.$pro->bookfull) }}" ><button class="tocart" style="background-color: #59DE59" type="submit" title="Add to Cart">Đọc</button></a>
							</div>
							<div class="addtocart__actions">
								<a href="{{ url('cart/add/'.$pro->id) }}"><button class="tocart" type="submit" title="Add to Cart">Add</button></a>
							</div>
							<div class="product-addto-links clearfix">
								<a class="wishlist" href="#"></a>
								<a class="compare" href="#"></a>
							</div>
						</div>
						<div class="product_meta">
							<span class="posted_in">Categories: 
								<a href="#">{{$pro->category->name}}</a>

							</span>
						</div>
						<div class="product-share">
							<ul>
								<li class="categories-title">Share :</li>
								<li>
									<a href="#">
										<i class="icon-social-twitter icons"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-tumblr icons"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-facebook icons"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-linkedin icons"></i>
									</a>
								</li>
							</ul>
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
								<div class="rating-summary d-flex">
									<span>Đánh giá</span>
									<ul class="rating d-flex">
										<li><i class="zmdi zmdi-star"></i></li>
										<li><i class="zmdi zmdi-star"></i></li>
										<li><i class="zmdi zmdi-star"></i></li>
										<li class="off"><i class="zmdi zmdi-star"></i></li>
										<li class="off"><i class="zmdi zmdi-star"></i></li>
									</ul>
								</div>

								@foreach ($comment as $cm)
								<hr style="margin-bottom: 10px">
								<div class="rating-summary d-flex">
									<font color="#2501FF" style="margin-right: 5px;padding-right: 5px;"><b>{{$cm->user->name  }} </b>:</font> <p> {{ $cm->comment}}</p>
								</div>
								@endforeach
								
							</div>

						</div>
					</div>
					<div class="review-fieldset">
						<h2>Nhận sét sản phẩm:</h2>
						<div class="review-field-ratings">
							<div class="product-review-table">
								<div class="review-field-rating d-flex">
									<span>Đánh giá</span>
									<ul class="rating d-flex">
										<li class="off"><i class="zmdi zmdi-star"></i></li>
										<li class="off"><i class="zmdi zmdi-star"></i></li>
										<li class="off"><i class="zmdi zmdi-star"></i></li>
										<li class="off"><i class="zmdi zmdi-star"></i></li>
										<li class="off"><i class="zmdi zmdi-star"></i></li>
									</ul>
								</div>

							</div>
						</div>
						<div class="review_form_field">

							{!! Form::model($pro,['method'=>'patch','url'=>['customer/reviewct',$pro->id],'files'=>true])!!}

							{!! Form::label('Đánh giá sản phẩm', null, []) !!}
							<div class="input_box">
								<textarea name="reviewct" style="height: 70px;width: 400px"></textarea>
							</div>
							<div class="review-form-actions">
								{!! Form::submit('Gửi đánh giá', []) !!}
								{!! Form::close() !!}
							</div>
							
							
						</div>
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</div>
				{{-- <div class="wn__related__product pt--80 pb--50">
					<div class="section__title text-center">
						<h2 class="title__be--2">Related Products</h2>
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
				</div> --}}
			</div>
		</div>
	</div>
</div>
@endsection