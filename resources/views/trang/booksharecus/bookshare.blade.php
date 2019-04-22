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
			<br><br>
			<div class="row">

				<!-- Start Single Product -->
				@if(isset($pro))
				@foreach($pro as $key)
				<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12" >
					<div class="product__thumb"  >
						<a class="first__img" href="{{ url('product/'.$key->id.'/detail') }}"  style="width: 269px;height: 210px; display: block;margin-left: auto;margin-right: auto;"><img src="{{url('uploads/product/'.$key->image)}}" alt="product image" style="height: 210px;width: auto; display: block;margin-left: auto;margin-right: auto;" ></a>

					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">{{$key->name}}</a></h4>
						<ul class="prize d-flex">
							<li>{{$key->price}} VND</li>
							<li class="old_prize">$35.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="wishlist" href="{{ url('cart/add/'.$key->id) }}"><i class="bi bi-shopping-cart-full"></i></a></li>
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
				@endif
			</div>
			<!-- Start Single Product -->

		</div>


	</div>
</div>

</div>
</div>
</div>



@endsection