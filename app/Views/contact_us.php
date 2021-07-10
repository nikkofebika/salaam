<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="main-content">
	<section id="contact">
		<div class="container" style="padding: 50px;">
			<div class="row wow fadeInDown" data-wow-delay="0.3s">
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
						<h3 class="title-medium">Contact Informatione</h3>
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
							<span class="detail"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97fef9f1f8d7f6f5f4f3b9f4f8fa">[email&#160;protected]</a></span>
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
</div>
<section id="map">
	<div class="container-fluid">
		<div class="row">
			<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.32173912002!2d106.77944001476912!3d-6.221237395496485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4258cf920bb%3A0x9f66cbd4d4b748fb!2sPT.%20Berita%20Nusantara!5e0!3m2!1sid!2sid!4v1612621776794!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
		</div>
	</div>
</section>
<?= $this->endSection() ?>