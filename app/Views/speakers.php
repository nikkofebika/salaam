<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
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
				<?php
				$data = [
					[
						"name" => "Habib Husein Ja'far Al-Hadar",
						"foto" => "1.png",
						"desc" => "Penceramah & Direktur Akademi Kebudayaan Islam Jakarta",
					],
					[
						"name" => "K. H. Cholil Nafis, Lc. Ph.D",
						"foto" => "2.png",
						"desc" => "Penceramah & Ketua Dewan Pimpinan Majelis Ulama Indonesia (MUI) 2020-2025",
					],
					[
						"name" => "K.H. Abdul Muiz Ali",
						"foto" => "3.png",
						"desc" => "Penceramah & Wakil Sekretaris Komisi Fatwa Majelis Ulama Indonesia (MUI) 2020-2025",
					],
					[
						"name" => "Ust. H. Muhammad Nur Hayid",
						"foto" => "4.png",
						"desc" => "Penceramah & Ketua Pengurus Besar Nahdlatul Ulama (PBNU) 2018-2020",
					],
					[
						"name" => "Ustadz M. Najmi Fathoni",
						"foto" => "5.png",
						"desc" => "Penceramah & Director Menara Hati International",
					],
					[
						"name" => "Ustadz M. Subki Al-Bughury",
						"foto" => "6.png",
						"desc" => "Penceramah & Ketua Majlis Dzikir Al-Ma'tsurat Jakarta",
					],
					[
						"name" => "Ustadzah Dewi Ani",
						"foto" => "7.png",
						"desc" => "Penceramah & Wakil Ketua Lembaga Dakwah Pengurus Besar Nahdlatul Ulama (PBNU) 2018-2020",
					],
					[
						"name" => "Ustadzah Badriyah Fayumi",
						"foto" => "8.png",
						"desc" => "Penceramah & Wakil Ketua Pengurus Pusat Lembaga Kemaslahatan Keluarga Nahdlatul Ulama (PPLKNU)",
					],
				];
				foreach ($data as $d) { ?>
					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
						<div class="member">
							<div class="member-img">
								<img src="<?php echo base_url('assets/speakers/'.$d["foto"]) ?>" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="bi bi-twitter"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""><i class="bi bi-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<a href="#"><h4><?php echo $d["name"] ?></h4></a>
								<!-- <span><?php // echo $d["desc"] ?></span> -->
								<p><?php echo $d["desc"] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
<?= $this->endSection() ?>