<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div id="carousel-area">
	<div id="carousel-slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="assets/img/slider/bg-1.jpg" alt="">
				<div class="carousel-caption">
					<h2 class="wow fadeInRight" data-wow-delay="300ms">Impression - Startup Event<br> Join us be The First to Book Your Ticket</h2>
					<div class="buttons wow fadeInDown" data-wow-delay="0.2s"><a class="btn btn-lg btn-border" href="#">Registration</a></div>
					<a data-scroll href="#featured">
						<div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
							<span></span>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<img src="assets/img/slider/bg-2.jpg" alt="">
				<div class="carousel-caption">
					<h2 class="wow fadeInUp" data-wow-delay="300ms">Opportunity to showcase<br> your product and services to attendees</h2>
					<div class="buttons">
						<a class="btn btn-lg btn-common wow fadeInLeft" data-wow-delay="300ms" href="#">Buy Tickets</a>
						<a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms" href="#">Know More</a>
					</div>
					<a data-scroll href="#featured">
						<div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
							<span></span>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<img src="assets/img/slider/bg-3.jpg" alt="">
				<div class="carousel-caption">
					<h2 class="wow fadeInDown" data-wow-delay="300ms">Expert and Love to Speak? <br> Apply as Speaker for Taking Session</h2>
					<div class="wow fadeInUp" data-wow-delay="300ms"><a class="btn btn-lg btn-common" href="#">Apply Now</a></div>
					<a data-scroll href="#featured">
						<div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
							<span></span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
			<span class="icon-arrow-left" aria-hidden="true"></span>
		</a>
		<a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
			<span class="icon-arrow-right" aria-hidden="true"></span>
		</a>
	</div>
</div>
<section id="featured" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Visi & Misi</h2>
				<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
				<div class="col-md-4 col-sm-6">
					<div class="featured-box wow fadeInLeft" data-wow-delay="0.1s">
						<div class="icon">
							<i class="icon-energy"></i>
						</div>
						<div class="featured-content">
							<h4>Get Inspired</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="featured-box wow fadeInLeft" data-wow-delay="0.2s">
						<div class="icon">
							<i class="icon-people"></i>
						</div>
						<div class="featured-content">
							<h4>Meet New Faces</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="featured-box wow fadeInLeft" data-wow-delay="0.3s">
						<div class="icon">
							<i class="icon-graph"></i>
						</div>
						<div class="featured-content">
							<h4>Fresh Tech Insights</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="sponsors" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Our Sponsors</h2>
				<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
					<a href="#"><img src="assets/img/sponsors/logo-01.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.2s">
					<a href="#"><img src="assets/img/sponsors/logo-02.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
					<a href="#"><img src="assets/img/sponsors/logo-03.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
					<a href="#"><img src="assets/img/sponsors/logo-04.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="gallery" class="section">
	<div class="container">
		<div class="col-md-12">
			<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Our Gallery</h2>
			<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
		</div>
		<div class="gallery-wrap wow fadeInDown">
			<div class="col-md-4 col-sm-4 col-xs-12 gellery-pn">
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-8.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/img-1.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-2.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/img-2.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-3.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/lagre-3.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 gellery-pn">
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-4.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/img-4.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-5.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/img-5.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 gellery-pn">
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-6.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/img-6.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
				<div class="gallery-item">
					<a href="#"><img src="assets/img/gallery/img-7.jpg" alt=""></a>
					<div class="overlay">
						<div class="icons">
							<a class="preview lightbox" href="assets/img/gallery/img-7.jpg"><i class="icon-eye"></i></a>
							<a class="link" href="gallery.html"><i class="icon-link"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="more-btn">
				<a href="gallery.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">show more</a>
			</div>
		</div>
	</div>
</section>


<section id="speakers" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Meet Our Speakers</h2>
				<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="speakers-member wow fadeIn" data-wow-delay="0.1s">
					<div class="member-img">
						<img src="assets/img/teacher/img-1.png" alt="">
					</div>
					<div class="member-desc">
						<h3>Jon Doe</h3>
						<h5>CEO, Peloton Cycle</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
						<div class="social-icon">
							<a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="speakers-member wow fadeIn" data-wow-delay="0.3s">
					<div class="member-img">
						<img src="assets/img/teacher/img-2.png" alt="">
					</div>
					<div class="member-desc">
						<h3>Natali Aero</h3>
						<h5>Co-founder, Hometeam</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
						<div class="social-icon">
							<a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="speakers-member wow fadeIn" data-wow-delay="0.5s">
					<div class="member-img">
						<img src="assets/img/teacher/img-3.png" alt="">
					</div>
					<div class="member-desc">
						<h3>Leo Amber</h3>
						<h5>Director, Via</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
						<div class="social-icon">
							<a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="speakers-member wow fadeIn" data-wow-delay="0.7s">
					<div class="member-img">
						<img src="assets/img/teacher/img-4.png" alt="">
					</div>
					<div class="member-desc">
						<h3>Jeson Eva</h3>
						<h5>Co-founder, theSkimm</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
						<div class="social-icon">
							<a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="speakers-member wow fadeIn" data-wow-delay="0.9s">
					<div class="member-img">
						<img src="assets/img/teacher/img-5.png" alt="">
					</div>
					<div class="member-desc">
						<h3>Lamba Kureshi</h3>
						<h5>Professor, Boston University</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
						<div class="social-icon">
							<a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="speakers-member wow fadeIn" data-wow-delay="1s">
					<div class="member-img">
						<img src="assets/img/teacher/img-6.png" alt="">
					</div>
					<div class="member-desc">
						<h3>Leo Amber</h3>
						<h5>CEO, lrisVR</h5>
						<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</p>
						<div class="social-icon">
							<a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="more-btn text-center">
				<a href="speakers.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">show more</a>
			</div>
		</div>
	</div>
</section>


<section id="blog" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0s">Blog</h2>
				<p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. A <br> enean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="blog-item wow fadeInRight" data-wow-delay="0.2s">
					<div class="blog-image">
						<a href="#">
							<img src="assets/img/blog/img1.jpg" alt="">
						</a>
					</div>
					<div class="blog-info">
						<h3><a href="single-post.html">We make beautiful days with older adults</a></h3>
						<div class="meta">
							<span class="meta-part"><a href="#"><i class="icon-eye"></i> 2500</a></span>
							<span class="meta-part"><a href="#"><i class="icon-bubble"></i> 100</a></span>
							<span class="meta-part"><a href="#"><i class="icon-calendar"></i> 21 Mar, 2016</a></span>
						</div>
						<p>Lorem ipsum dolor sit amet cons tetuer adipiscing elit. dolor sit...</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
					<div class="blog-image">
						<a href="#">
							<img src="assets/img/blog/img2.jpg" alt="">
						</a>
					</div>
					<div class="blog-info">
						<h3><a href="single-post.html">Change-makers economic</a></h3>
						<div class="meta">
							<span class="meta-part"><a href="#"><i class="icon-eye"></i> 2500</a></span>
							<span class="meta-part"><a href="#"><i class="icon-bubble"></i> 100</a></span>
							<span class="meta-part"><a href="#"><i class="icon-calendar"></i> 21 Mar, 2016</a></span>
						</div>
						<p>Lorem ipsum dolor sit amet cons tetuer adipiscing elit. dolor sit...</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="blog-item wow fadeInLeft" data-wow-delay="0.2s">
					<div class="blog-image">
						<a href="#">
							<img src="assets/img/blog/img3.jpg" alt="">
						</a>
					</div>
					<div class="blog-info">
						<h3><a href="single-post.html">It’s no secret that virtual reality</a></h3>
						<div class="meta">
							<span class="meta-part"><a href="#"><i class="icon-eye"></i> 2500</a></span>
							<span class="meta-part"><a href="#"><i class="icon-bubble"></i> 100</a></span>
							<span class="meta-part"><a href="#"><i class="icon-calendar"></i> 21 Mar, 2016</a></span>
						</div>
						<p>Lorem ipsum dolor sit amet cons tetuer adipiscing elit. dolor sit...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?= $this->endSection() ?>