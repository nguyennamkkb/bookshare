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
	<style type="text/css">
		.bt {
			display: block;
			padding: 10px;

		}

		/* The popup form - hidden by default */
		.form-popup {
			margin-top: 60px;
			display: none;
			position: fixed;


			border: 3px solid #f1f1f1;
			z-index: 9;
		}

		/* Add styles to the form container */
		.form-container {
			max-width: 300px;
			padding: 10px;
			background-color: white;
		}

		/* Full-width input fields */
		.form-container input[type=text],
		.form-container input[type=password] {
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			border: none;
			background: #f1f1f1;
		}

		/* When the inputs get focus, do something */
		.form-container input[type=text]:focus,
		.form-container input[type=password]:focus {
			background-color: #ddd;
			outline: none;
		}

		/* Set a style for the submit/login button */


		/* Add a red background color to the cancel button */
		.form-container .cancel {
			background-color: red;
		}

		/* Add some hover effects to buttons */
		.form-container .btn:hover,
		.open-button:hover {
			opacity: 1;
		}
	</style>

</head>
<body>
	<div id="app">
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
		<script src="{{ asset('br/js/vue.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		
	</div>
</body>
</html>