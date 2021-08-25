<header id="header" class="header fixed-top">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="<?php echo site_url() ?>" class="logo d-flex align-items-center">
			<img src="<?php echo base_url('assets/logo_salaam.png') ?>" alt="">
		</a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="<?php echo site_url() ?>">Home</a></li>
				<!-- <li><a href="<?php // echo site_url('blog') ?>">Blog</a></li> -->
				<li><a href="<?php echo site_url('speakers') ?>">Speakers</a></li>
				<li><a href="<?php echo site_url('video') ?>">Video</a></li>
				<li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="<?php echo site_url('about') ?>">About</a></li>
						<li><a href="<?php echo site_url('contact-us') ?>">Contact</a></li>
						<!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="#">Deep Drop Down 1</a></li>
								<li><a href="#">Deep Drop Down 2</a></li>
								<li><a href="#">Deep Drop Down 3</a></li>
								<li><a href="#">Deep Drop Down 4</a></li>
								<li><a href="#">Deep Drop Down 5</a></li>
							</ul>
						</li> -->
					</ul>
				</li>
				<li><a class="btn-get-started getstarted" href="#">Get Started</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
	</div>
</header>