<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop-Grid | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('br/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('br/images/icon.png') }}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('br/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('br/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('br/style.css') }}">

	<!-- Cusom css -->
	<link rel="stylesheet" href="{{ asset('br/css/custom.css') }}">

	<!-- Modernizer js -->
	<script src="{{ asset('br/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

</head>
<body>
	
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<div>
		<!-- Header -->
		@include('trang.partials.header')
		<!-- End Bradcaump area -->
		<!-- Start Shop Page -->
		<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
			<div class="container">
				<div class="row">


					@yield('left')



					@yield('content')

				</div>
			</div>
		</div>
		</div>
	</div>

	@include('trang.partials.footer')
		<!-- End Shop Page -->

		<!-- Footer Area -->

		
		<!-- //Footer Area -->
		<!-- QUICKVIEW PRODUCT -->
		
		<!-- END QUICKVIEW PRODUCT -->

		<!-- //Main wrapper -->

		<!-- JS Files -->
		<script src="{{ asset('br/js/vendor/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('br/js/popper.min.js') }}"></script>
		<script src="{{ asset('br/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('br/js/plugins.js') }}"></script>
		<script src="{{ asset('br/js/active.js') }}"></script>
		
	</body>
	</html>