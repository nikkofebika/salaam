@extends('layouts.default')
@section('content')
<main id="main">
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="{{ url('/') }}">Beranda</a></li>
				<li><a href="{{ url('pendakwah') }}">Pendakwah</a></li>
			</ol>
			<h2>Tentang Pendakwah</h2>
		</div>
	</section>
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<div class="row gy-4">
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
					<img src="{{ asset($pendakwah->image) }}" class="img-fluid"  alt="{{ asset($pendakwah->name) }}">
				</div>
				<div class="col-md-8" data-aos="fade-down" data-aos-delay="200">
					<h1 class="fs-3 fw-bold">{{ $pendakwah->name }}</h1>
					<hr class="m-0">
					<p class="mt-2">{{ $pendakwah->description }}</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection