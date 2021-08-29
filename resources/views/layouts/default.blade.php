<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>{{ config('app.name', 'Salaam') }}</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
	<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<style type="text/css">
		.modal.fade.in .modal-body {
			bottom: 0; 
			opacity: 1;
		}
		.modal-body {
			background-color: red;
			position: absolute;
			bottom: -250px;
			right: 5%;
			padding: 30px 15px 15px;
			width: 275px;
			height: 250px;
			background-color: #e5e5e5;
			border-radius: 6px 6px 0 0;
			opacity: 0;
			-webkit-transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
			-moz-transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
			-o-transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
			transition: opacity 0.3s ease-out, bottom 0.3s ease-out;
		}
		.close {
			margin-top: -20px;
			text-shadow: 0 1px 0 #ffffff;
		}
		.popup-button {
			margin-left: 140px;
			margin-top: 77px;
			font-weight: bold;
		}
	</style>
	@stack('styles')
</head>

<body>
	@include('layouts.includes.header')
	@yield('content')
	@include('layouts.includes.footer')
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<div class="modal fade" id="slide-bottom-popup" data-keyboard="false" data-backdrop="false">
		<div class="modal-body">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<p>I'm a pop sliding from the bottom that's suppose to stick</p>
			<a href="" class="btn-primary btn-plain btn popup-button">CTA</a>
		</div>
	</div>
	<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
	<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
	<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
	<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function() {
				$('#slide-bottom-popup').modal('show');
			}, 1000);
		});
	</script>
	@stack('scripts')
</body>
</html>