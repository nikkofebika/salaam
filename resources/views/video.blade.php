<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
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
				<?php
				$data = [
					[
						'title' => 'Jihad Masa Kini | Ustadz Subki Al-Bughuri',
						'url' => 'https://www.youtube.com/embed/zOdXqsKCoMw',
					],
					[
						'title' => 'APAKAH AIR KENCING BAYI ITU SUCI? - K.H. Abdul Muiz Ali',
						'url' => 'https://www.youtube.com/embed/WHQPE_hL5xU',
					],
					[
						'title' => 'MENYAMPAIKAN KRITIK MENURUT ISLAM - Ust. H. Muhammad Nur Hayid',
						'url' => 'https://www.youtube.com/embed/psmU5nFRjsI',
					],
					[
						'title' => 'TATA CARA ZIARAH KUBUR - Ustadz Najmi Fathoni, M.IK',
						'url' => 'https://www.youtube.com/embed/QVwXXrFmnvQ',
					],
					[
						'title' => 'PACARAN DALAM ISLAM - K.H. M. Cholil Nafis, LC, Ph.D',
						'url' => 'https://www.youtube.com/embed/iClvVL23-VQ',
					],
					[
						'title' => 'BERBUKA PUASA DENGAN KURMA ALA RASUL - Ustadz Najmi Fathoni, M.IK',
						'url' => 'https://www.youtube.com/embed/Z7ybqnP3zXs',
					],
					[
						'title' => 'HUKUM ISTRI MEMARAHI SUAMI - Ustadzah Dewi Ani',
						'url' => 'https://www.youtube.com/embed/qWHm6Cf3hs8',
					],
					[
						'title' => 'PUASA TAPI TIDAK SHALAT - Ustadzah Dewi Ani',
						'url' => 'https://www.youtube.com/embed/aoor_RYI-TI',
					],
				];
				foreach ($data as $d) { ?>
					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
						<div class="member">
							<iframe width="100%" height="200" src="<?php echo $d['url'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<p class="py-1"><strong><?php echo $d['title'] ?></strong></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
<?= $this->endSection() ?>