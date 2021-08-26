<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<main id="main">
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="index.html">Home</a></li>
				<li>About</li>
			</ol>
			<h2>About</h2>
		</div>
	</section>
	<section id="about" class="about">

		<div class="container" data-aos="fade-up">
			<div class="row gx-0">

				<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
					<div class="content">
						<h3>Who We Are</h3>
						<h2>Salaam Indonesia (SALAAM) hadir sebagai platform yang berisi konten-konten Islami bagi para milenial muslim Indonesia.</h2>
						<p>Tema konten SALAAM sangat dekat dengan kehidupan sehari-hari, mulai dari akhlak, akidah, hingga fiqih Islam. Berpadu dengan penjelasan tema yang menyejukan dari ustad dan ustadzah terbaik, SALAAM berharap dapat menjadi media edukasi Islam pilihan, yang menyebarkan kebaikan dan menciptakan keharmonisan antar umat beragama di Indonesia.</p>
					</div>
				</div>

				<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
					<img src="<?php echo base_url('assets/img/about2.jpg') ?>" class="img-fluid" alt="">
				</div>

			</div>
		</div>

	</section>
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
</main>
<?= $this->endSection() ?>