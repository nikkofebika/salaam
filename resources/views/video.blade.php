@extends('layouts.default')
@section('content')
<main id="main">
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="index.html">Home</a></li>
				<li>Video</li>
			</ol>
			<h2>Video</h2>
		</div>
	</section>
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">
			<header class="section-header">
				<h2>Video</h2>
				<p>Our Video</p>
			</header>
			<div class="row gy-4">
				@foreach ($videos as $v)
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="member">
						<iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $v->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<p class="py-1"><strong>{{ $v->title }}</strong></p>
					</div>
				</div>
				@endForeach
			</div>
		</div>
	</section>
</main>
@endsection