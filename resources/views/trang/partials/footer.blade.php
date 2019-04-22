
<footer id="wn__footer" class="col-lg-12">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer__widget footer__menu">
					<div class="ft__logo">
						<a href="index.html">
							<img src="{{ asset('br/images/logo/3.png') }}" alt="logo">
						</a>
						<p align="center">Chia sẻ sách và tài liệu đến với mọi người</p>
					</div>
					<div class="footer__content">
						<ul class="social__net social__net--2 d-flex justify-content-center">
							<li><a href="#"><i class="bi bi-facebook"></i></a></li>
							<li><a href="#"><i class="bi bi-google"></i></a></li>
							<li><a href="#"><i class="bi bi-twitter"></i></a></li>
							<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
							<li><a href="#"><i class="bi bi-youtube"></i></a></li>
						</ul>
						<ul class="mainmenu d-flex justify-content-center">
							<li class="drop with--one--item"><a href="{{ url('/') }}">Home</a></li>
							<li class="drop with--one--item"><a href="{{ url('/') }}">Home</a></li>
							<li class="drop"><a href="{{ url('/') }}" >Books</a></li>
							@if (Route::has('login'))
							@if (Auth::user())
							<li class=""><a href="{{ url('booksharecus/'.Auth::user()->id) }}">My Shop</a>
								@endif

								<li class=""><a href="{{ url('customer/sharebook/create') }}">Share book</a>
									@auth
									@else
									<li><a href="{{ route('login') }}">Login</a></li> 
									@if (Route::has('register'))
									<li><a href="{{ route('register') }}">Register</a></li>
									@endif
									@endauth
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copyright">
						<div class="copy__right__inner text-left">
							<p>Nguyễn Lương Nam	: 515100036. Khoa công nghệ thông tin và truyền thông.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="payment text-right">
						Xấy dựng ứng dụng đọc sách trực tuyến.
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>