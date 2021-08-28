@extends('layouts.default')
@section('content')
<section id="hero" class="hero d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex flex-column justify-content-center">
				<h1 data-aos="fade-up">The preferred Indonesian muslim channel</h1>
				<h2 data-aos="fade-up" data-aos-delay="400">The preferred Indonesian muslim channel The preferred Indonesian muslim channel</h2>
				<div data-aos="fade-up" data-aos-delay="600">
					<div class="text-center text-lg-start">
						<a href="javascript:void(0)" class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
							<span>Get Started</span>
							<i class="bi bi-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
				<img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>
<main id="main">
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
			<center><a href="{{ url('pendakwah') }}" class="btn-buy rounded mt-5">Selengkapnya</a></center>
		</div>
	</section>

	<section id="values" class="values">

		<div class="container" data-aos="fade-up">

			<header class="section-header">
				<h2>Our Values</h2>
				<p>Odit est perspiciatis laborum et dicta</p>
			</header>

			<div class="row">

				<div class="col-lg-4">
					<div class="box" data-aos="fade-up" data-aos-delay="200">
						<img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="">
						<h3>Ad cupiditate sed est odio</h3>
						<p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0">
					<div class="box" data-aos="fade-up" data-aos-delay="400">
						<img src="{{ asset('assets/img/values-2.png') }}" class="img-fluid" alt="">
						<h3>Voluptatem voluptatum alias</h3>
						<p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0">
					<div class="box" data-aos="fade-up" data-aos-delay="600">
						<img src="{{ asset('assets/img/values-3.png') }}" class="img-fluid" alt="">
						<h3>Fugit cupiditate alias nobis.</h3>
						<p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
					</div>
				</div>

			</div>

		</div>

	</section><!-- End Values Section -->

	<!-- ======= Counts Section ======= -->
	<!-- <section id="counts" class="counts">
		<div class="container" data-aos="fade-up">

			<div class="row gy-4">

				<div class="col-lg-3 col-md-6">
					<div class="count-box">
						<i class="bi bi-emoji-smile"></i>
						<div>
							<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
							<p>Happy Clients</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="count-box">
						<i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
						<div>
							<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
							<p>Projects</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="count-box">
						<i class="bi bi-headset" style="color: #15be56;"></i>
						<div>
							<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
							<p>Hours Of Support</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="count-box">
						<i class="bi bi-people" style="color: #bb0852;"></i>
						<div>
							<span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
							<p>Hard Workers</p>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section> -->

	<!-- ======= Features Section ======= -->
	<!-- <section id="features" class="features">

		<div class="container" data-aos="fade-up">

			<header class="section-header">
				<h2>Features</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
			</header>

			<div class="row">

				<div class="col-lg-6">
					<img src="{{ asset('assets/img/features.png') }}" class="img-fluid" alt="">
				</div>

				<div class="col-lg-6 mt-5 mt-lg-0 d-flex">
					<div class="row align-self-center gy-4">

						<div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
							<div class="feature-box d-flex align-items-center">
								<i class="bi bi-check"></i>
								<h3>Eos aspernatur rem</h3>
							</div>
						</div>

						<div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
							<div class="feature-box d-flex align-items-center">
								<i class="bi bi-check"></i>
								<h3>Facilis neque ipsa</h3>
							</div>
						</div>

						<div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
							<div class="feature-box d-flex align-items-center">
								<i class="bi bi-check"></i>
								<h3>Volup amet voluptas</h3>
							</div>
						</div>

						<div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
							<div class="feature-box d-flex align-items-center">
								<i class="bi bi-check"></i>
								<h3>Rerum omnis sint</h3>
							</div>
						</div>

						<div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
							<div class="feature-box d-flex align-items-center">
								<i class="bi bi-check"></i>
								<h3>Alias possimus</h3>
							</div>
						</div>

						<div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
							<div class="feature-box d-flex align-items-center">
								<i class="bi bi-check"></i>
								<h3>Repellendus mollitia</h3>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="row feature-icons" data-aos="fade-up">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>

				<div class="row">

					<div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
						<img src="{{ asset('assets/img/features-3.png') }}" class="img-fluid p-4" alt="">
					</div>

					<div class="col-xl-8 d-flex content">
						<div class="row align-self-center gy-4">

							<div class="col-md-6 icon-box" data-aos="fade-up">
								<i class="ri-line-chart-line"></i>
								<div>
									<h4>Corporis voluptates sit</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>

							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
								<i class="ri-stack-line"></i>
								<div>
									<h4>Ullamco laboris nisi</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>

							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
								<i class="ri-brush-4-line"></i>
								<div>
									<h4>Labore consequatur</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>

							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
								<i class="ri-magic-line"></i>
								<div>
									<h4>Beatae veritatis</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>

							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
								<i class="ri-command-line"></i>
								<div>
									<h4>Molestiae dolor</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>

							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
								<i class="ri-radar-line"></i>
								<div>
									<h4>Explicabo consectetur</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>

		</div>

	</section> -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services">

		<div class="container" data-aos="fade-up">

			<header class="section-header">
				<h2>Services</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
			</header>

			<div class="row gy-4">

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="service-box blue">
						<i class="ri-discuss-line icon"></i>
						<h3>Nesciunt Mete</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="service-box orange">
						<i class="ri-discuss-line icon"></i>
						<h3>Eosle Commodi</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="service-box green">
						<i class="ri-discuss-line icon"></i>
						<h3>Ledo Markt</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
					<div class="service-box red">
						<i class="ri-discuss-line icon"></i>
						<h3>Asperiores Commodi</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
					<div class="service-box purple">
						<i class="ri-discuss-line icon"></i>
						<h3>Velit Doloremque.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
					<div class="service-box pink">
						<i class="ri-discuss-line icon"></i>
						<h3>Dolori Architecto</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>

			</div>

		</div>

	</section><!-- End Services Section -->

	<!-- ======= F.A.Q Section ======= -->
	<!-- <section id="faq" class="faq">

		<div class="container" data-aos="fade-up">

			<header class="section-header">
				<h2>F.A.Q</h2>
				<p>Frequently Asked Questions</p>
			</header>

			<div class="row">
				<div class="col-lg-6">
					<div class="accordion accordion-flush" id="faqlist1">
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
									Non consectetur a erat nam at lectus urna duis?
								</button>
							</h2>
							<div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
								<div class="accordion-body">
									Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
									Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
								</button>
							</h2>
							<div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
								<div class="accordion-body">
									Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
									Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
								</button>
							</h2>
							<div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
								<div class="accordion-body">
									Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-6">

					<div class="accordion accordion-flush" id="faqlist2">

						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
									Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
								</button>
							</h2>
							<div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
								<div class="accordion-body">
									Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
									Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
								</button>
							</h2>
							<div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
								<div class="accordion-body">
									Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
									Varius vel pharetra vel turpis nunc eget lorem dolor?
								</button>
							</h2>
							<div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
								<div class="accordion-body">
									Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

		</div>

	</section> -->

	<!-- ======= Portfolio Section ======= -->
		<!-- <section id="portfolio" class="portfolio">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Portfolio</h2>
					<p>Check our latest work</p>
				</header>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-app">App</li>
							<li data-filter=".filter-card">Card</li>
							<li data-filter=".filter-web">Web</li>
						</ul>
					</div>
				</div>

				<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 1</h4>
								<p>App</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Web 3</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 2</h4>
								<p>App</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 2</h4>
								<p>Card</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Web 2</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 3</h4>
								<p>App</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 1</h4>
								<p>Card</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 3</h4>
								<p>Card</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Web 3</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
									<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section> -->
		<!-- End Portfolio Section -->

		<!-- ======= Testimonials Section ======= -->
		<!-- <section id="testimonials" class="testimonials">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Testimonials</h2>
					<p>What they are saying about us</p>
				</header>

				<div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="testimonial-item">
								<div class="stars">
									<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								<div class="profile mt-auto">
									<img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
									<h3>Saul Goodman</h3>
									<h4>Ceo &amp; Founder</h4>
								</div>
							</div>

						<div class="swiper-slide">
							<div class="testimonial-item">
								<div class="stars">
									<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								<div class="profile mt-auto">
									<img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
									<h3>Sara Wilsson</h3>
									<h4>Designer</h4>
								</div>
							</div>

						<div class="swiper-slide">
							<div class="testimonial-item">
								<div class="stars">
									<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								<div class="profile mt-auto">
									<img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
									<h3>Jena Karlis</h3>
									<h4>Store Owner</h4>
								</div>
							</div>

						<div class="swiper-slide">
							<div class="testimonial-item">
								<div class="stars">
									<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								<div class="profile mt-auto">
									<img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
									<h3>Matt Brandon</h3>
									<h4>Freelancer</h4>
								</div>
							</div>

						<div class="swiper-slide">
							<div class="testimonial-item">
								<div class="stars">
									<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
								<div class="profile mt-auto">
									<img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
									<h3>John Larson</h3>
									<h4>Entrepreneur</h4>
								</div>
							</div>

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>

		</section> -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<!-- <h2>Our Clients</h2> -->
					<p>Partners</p>
				</header>

				<div class="clients-slider swiper-container">
					<div class="swiper-wrapper align-items-center">
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>

		</section><!-- End Clients Section -->

		<!-- <section id="recent-blog-posts" class="recent-blog-posts">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Blog</h2>
					<p>Recent posts form our Blog</p>
				</header>

				<div class="row">

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt=""></div>
							<span class="post-date">Tue, September 15</span>
							<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="{{ asset('assets/img/blog/blog-2.jpg') }}" class="img-fluid" alt=""></div>
							<span class="post-date">Fri, August 28</span>
							<h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="{{ asset('assets/img/blog/blog-3.jpg') }}" class="img-fluid" alt=""></div>
							<span class="post-date">Mon, July 11</span>
							<h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
							<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

				</div>

			</div>

		</section> -->

		<!-- <section id="contact" class="contact">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Contact</h2>
					<p>Contact Us</p>
				</header>

				<div class="row gy-4">

					<div class="col-lg-6">

						<div class="row gy-4">
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-geo-alt"></i>
									<h3>Address</h3>
									<p>Permata Hijau<br>Kebayoran Lama, Jakarta Selatan</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-telephone"></i>
									<h3>Call Us</h3>
									<p>+1 5589 55488 55<br>+1 6678 254445 41</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-envelope"></i>
									<h3>Email Us</h3>
									<p>info@example.com<br>contact@example.com</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box">
									<i class="bi bi-clock"></i>
									<h3>Open Hours</h3>
									<p>Monday - Friday<br>9:00AM - 05:00PM</p>
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-6">
						<form action="forms/contact.php" method="post" class="php-email-form">
							<div class="row gy-4">

								<div class="col-md-6">
									<input type="text" name="name" class="form-control" placeholder="Your Name" required>
								</div>

								<div class="col-md-6 ">
									<input type="email" class="form-control" name="email" placeholder="Your Email" required>
								</div>

								<div class="col-md-12">
									<input type="text" class="form-control" name="subject" placeholder="Subject" required>
								</div>

								<div class="col-md-12">
									<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
								</div>

								<div class="col-md-12 text-center">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your message has been sent. Thank you!</div>

									<button type="submit">Send Message</button>
								</div>

							</div>
						</form>

					</div>

				</div>

			</div>

		</section> -->
	</main>
	@endsection