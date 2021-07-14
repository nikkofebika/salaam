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
	<?php echo $this->include('templates/includes/footer') ?>
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