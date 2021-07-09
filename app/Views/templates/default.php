<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salaam</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap5.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/simple-line-icons.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slicknav.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nivo-lightbox.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/colors/default.css') ?>" media="screen" />


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<?php echo $this->include('templates/includes/header') ?>
	<?= $this->renderSection('content'); ?>
	<div class="main-content">
		<section id="contact">
			<div class="container">
				<div class="row wow fadeInDown mt-5" data-wow-delay="0.3s">
					<div class="col-md-8 col-sm-7 contact-form">
						<form role="form" id="contactForm" data-toggle="validator">
							<div class="title-header">
								<h3 class="title-medium pull-left">Send us a message</h3>
								<div class="icon pull-right"><i class="icon-envelope"></i></div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="label-line">
										<span class="span"></span>
										<label class="label transition">Name</label>
										<input type="text" class="input" id="name" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="label-line">
										<span class="span"></span>
										<label class="label transition">Email</label>
										<input type="email" class="input" id="email" required data-error="Please enter your email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="label-line textarea">
										<span class="span"></span>
										<label class="label transition">Message</label>
										<textarea id="message" class="input" required data-error="Write your message"></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<button type="submit" id="form-submit" class="btn btn-common">Send <i class="icon-paper-plane" aria-hidden="true"></i></button>
									<div id="msgSubmit" class="h3 text-center hidden"></div>
									<div class="clearfix"></div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 col-sm-5 information">
						<div class="title-header">
							<h3 class="title-medium">Contact Information</h3>
						</div>
						<div class="contact-datails">
							<div class="icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info">
								<span class="detail">Marriott Marquis, San Francisco, CA<br> United States</span>
							</div>
						</div>
						<div class="contact-datails">
							<div class="icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info">
								<span class="detail">+123456789000</span>
							</div>
						</div>
						<div class="contact-datails">
							<div class="icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info">
								<span class="detail"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4cdcac2cbe4c5c6c7c08ac7cbc9">[email&#160;protected]</a></span>
							</div>
						</div>
						<div class="social text-center">
							<a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
							<a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<?php echo $this->include('templates/includes/footer') ?>
	</div>
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text text-center">© Copyright <?php echo date('Y') ?> - Salaam. All rights reserved.</p>
				</div>
			</div>
		</div>
	</section>


	<a href="#" class="back-to-top">
		<i class="icon-arrow-up"></i>
	</a>
	<div class="bottom"> <a href="#" class="settings"></a> </div>

	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/jquery.countdown.min.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/smooth-scroll.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/jquery.slicknav.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/nivo-lightbox.js') ?>"></script>

	<script src="<?php echo base_url('assets/js/form-validator.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/contact-form-script.js') ?>"></script>

	<!-- <script src="<?php // echo base_url('assets/js/color-switcher.js') ?>"></script> -->

	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mapit.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/initializers.js') ?>"></script>
</body>
</html>