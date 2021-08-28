@extends('layouts.default')
@section('content')
<main id="main">
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="{{ url('/') }}">Beranda</a></li>
				<li>Pendakwah</li>
			</ol>
			<h2>Pendakwah</h2>
		</div>
	</section>
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<header class="section-header">
				<!-- <h2>Pendakwah</h2> -->
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
							<a href="{{ url('pendakwah/'.$p->id.'/'.Str::slug($p->name, '-')) }}"><h4>{{ $p->name }}</h4></a>
							<!-- <span>{{ $p->image }}</span> -->
							<p class="fst-italic">{{ $p->description }}</p>
						</div>
					</div>
				</div>
				@endForeach
			</div>
			<div class="d-flex justify-content-center">
				{{ $pendakwah->links('vendor.pagination.custom') }}
			</div>

			<!-- <div class="blog-pagination mt-5">
				<ul class="justify-content-center">
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</div> -->
		</div>
	</section>
</main>
@endsection