@extends('layouts.default')
@section('content')
<main id="main">
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="index.html">Home</a></li>
				<li>Speakers</li>
			</ol>
			<h2>Speakers</h2>
		</div>
	</section>
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<header class="section-header">
				<h2>Speakers</h2>
				<p>Pendakwah</p>
			</header>
			<div class="row gy-4">
				@foreach ($pendakwah as $p)
				<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
					<div class="member">
						<div class="member-img">
							<img src="{{ asset($p->image) }}" class="img-fluid" alt="{{ $p->name }}">
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<a href="#"><h4>{{ $p->name }}</h4></a>
							<!-- <span>{{ $p->image }}</span> -->
							<p>{{ $p->description }}</p>
						</div>
					</div>
				</div>
				@endForeach
			</div>
		</div>
	</section>
</main>
@endsection