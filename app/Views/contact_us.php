<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<main id="main">
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>
			</ol>
			<h2>Contact Us</h2>
		</div>
	</section>
	<section id="contact" class="contact">

		<div class="container" data-aos="fade-up">

			<header class="section-header">
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

	</section>
	<section id="map">
		<div class="container-fluid">
			<div class="row">
				<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.32173912002!2d106.77944001476912!3d-6.221237395496485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4258cf920bb%3A0x9f66cbd4d4b748fb!2sPT.%20Berita%20Nusantara!5e0!3m2!1sid!2sid!4v1612621776794!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
			</div>
		</div>
	</section>
</main>
<?= $this->endSection() ?>