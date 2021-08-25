
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name', 'Temukan') }}</title>

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
	<link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
	<meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
	<meta name="theme-color" content="#ffffff">

	<link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

	@stack('styles')
</head>

<body>
	<main class="main" id="top">
		<section class="bg-primary py-2 d-none d-sm-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-none d-lg-block">
						<p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>1600 Amphitheatre Parkway, CA 94043 </span></p>
					</div>
					<div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
						<ul class="list-unstyled list-inline my-2">
							<li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
							<li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
							<li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
							<li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
						</ul>
					</div>
					<div class="col-auto">
						<p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
					</div>
				</div>
			</div>
		</section>


		<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
			<div class="container">
				<!-- <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img/gallery/logo-n.png') }}" height="45" alt="logo" /></a> -->
				<a class="navbar-brand h1" href="/">Temukan.com</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
				<div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
						<li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
						<li class="nav-item px-2"><a class="nav-link" aria-current="page" href="pricing.html">Pricing</a></li>
						<li class="nav-item px-2"><a class="nav-link" aria-current="page" href="web-development.html">Web Development</a></li>
						<li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">User Research</a></li>
					</ul>
					@guest
					@if (! \Request::is('login'))  
					<a class="btn btn-primary order-1 order-lg-0" href="{{ url('login') }}">Login</a>
					@endif
					@else
					<a class="btn btn-primary order-1 order-lg-0" href="{{ route('logout') }}" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">Logout</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
					@endguest
					<form class="d-flex my-3 d-block d-lg-none">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
						<button class="btn btn-outline-primary" type="submit">Search</button>
					</form>
					<div class="dropdown d-none d-lg-block">
						<button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
						<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
							<form>
								<input class="form-control" type="search" placeholder="Search" aria-label="Search" />
							</form>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		@yield('content')
		<section class="bg-secondary">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0">
						<h1><a class="text-decoration-none" href="/">Temukan.com</a></h1>
						<p class="text-light my-4"> <i class="fas fa-map-marker-alt me-3"></i><span class="text-light">1500 Treat Ave, Suite 200  &nbsp;</span><a class="text-light" href="tel:+604-680-9785">+604-680-9785</a><br />San Francisco, CA 94110</p>
						<p class="text-light"> <i class="fas fa-envelope me-3"> </i><a class="text-light" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
						<p class="text-light"> <i class="fas fa-phone-alt me-3"></i><a class="text-light" href="tel:1-800-800-2299">1-800-800-2299 (Support)</a></p>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
						<h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Community </h5>
						<ul class="list-unstyled mb-md-4 mb-lg-0">
							<li class="lh-lg"><a class="text-200" href="#!">Learners</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Partners</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Developers</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Beta Testers</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Translators</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Tech Blog</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Teaching Center</a></li>
						</ul>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
						<h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Informations</h5>
						<ul class="list-unstyled mb-md-4 mb-lg-0">
							<li class="lh-lg"><a class="text-200" href="#!">About</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Pricing</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Careers</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
						</ul>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
						<h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> More</h5>
						<ul class="list-unstyled mb-md-4 mb-lg-0">
							<li class="lh-lg"><a class="text-200" href="#!">Press</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Investors</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Terms</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Privacy</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Help</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Accessibility</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Articles</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Directory</a></li>
							<li class="lh-lg"><a class="text-200" href="#!">Affiliates</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
	<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/@popperjs/popper.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/is/is.min.js') }}"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
	<script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
	<script src="{{ asset('assets/js/theme.js') }}"></script>
	@stack('scripts')
</body>
</html>