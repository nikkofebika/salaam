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
	@stack('styles')
</head>

<body>
	@include('layouts.includes.header')
	@yield('content')
	@include('layouts.includes.footer')
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
	<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
	<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
	<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	@stack('scripts')
</body>
</html>