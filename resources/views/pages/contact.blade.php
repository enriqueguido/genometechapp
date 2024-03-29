<!DOCTYPE html>
<html lang="en">
<head>
<title>Genome Technologies</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Genome Technologies Web Application">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/pages_styles.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/pages_styles.css">
<link rel="icon" href="/images/logo-icon.png"> 
</head>
<body>

<div class="super_container">
	
	<!-- =============================== Extending Navbar =================================== -->

	@extends('include/navbar')

	<!-- =============================== Extending Navbar End ================================ -->

	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		{{-- <div class="parallax_background parallax-window" data-dark-overlay="7" data-parallax="scroll" data-image-src="images/new-york.jpg" data-speed="0.8"></div> --}}
		<div class="background_image" data-dark-overlay="6" style="background-image:url(images/new-york.jpg)"></div>
		<div class="home_overlay"><img src="images/home_overlay_blue.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="home_text home_text_contact">For more information about working with us or any questions you may have please give us a call.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
			<div class="col">
				<!-- Contact Form -->
				<div class="intro_col">
					<div class="intro_form_container contact_form_margin">
						<?php if (count($errors) > 0): ?>
							<div class="alert alert-danger" role="alert">
								<?php foreach ($errors->all() as $error): ?>
									<span> {{ $error }} </span>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<?php if ($message = Session::get('success')): ?>
							<div class="alert alert-success" role="alert">
								<span> {{ $message }} </span>
							</div>
						<?php endif; ?>
					<div class="intro_form_title">Send us a message</div>
					<form method="POST" action="{{ url('/contact/send') }}" class="intro_form" id="intro_form">
						{{ csrf_field() }}
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" name="name_contact" class="intro_input" placeholder="Your Name" required="required">
								<input type="email" name="email_contact" class="intro_input" placeholder="Your E-mail" required="required">
								<textarea type="text" name="message_contact" class="intro_txt_area" placeholder="Your Message..." required="required"></textarea>
								{{-- <input type="tel" class="intro_input" placeholder="Your Phone" required="required"> --}}
								{{-- <input type="text" id="datepicker" class="intro_input datepicker" placeholder="Date" required="required"> --}}
							</div>
							<button type="submit" name="send" class="button button_1 intro_button trans_200">Send us a message</button>
						</form>
					</div>
				</div>
				<!-- Contact Form End -->
			</div>

				<!-- Contact Content -->
				<div class="col-lg-5 offset-lg-1 contact_col">
					<div class="contact_content">
						<div class="contact_content_title">Get in touch with us</div>
						<div class="contact_content_text">
							<p>We would love to discuss or services or answer any questions you may have. Send us an email and we will contact you as soon as possible.  </p>
						</div>
						<div class="direct_line d-flex flex-row align-items-center justify-content-start">
							<div class="direct_line_title text-center">Direct Line</div>
							<div class="direct_line_num text-center">315 - 720 - 8875</div>
						</div>
						<div class="contact_info">
							<ul>
								{{-- <li class="d-flex flex-row align-items-start justify-content-start">
									<div>Address</div>
									<div>1234 Some ST, NY 931</div>
								</li> --}}
								{{-- <li class="d-flex flex-row align-items-start justify-content-start">
									<div>Phone</div>
									<div>+53 345 7953 32453</div>
								</li> --}}
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>E-mail</div>
									<div>info@genometechnologies.org</div>
								</li>
							</ul>
						</div>
						<div class="contact_social">
							<ul class="d-flex flex-row align-items-center justify-content-start center-content">
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window orage_overlay" data-parallax="scroll" data-image-src="images/rona.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="newsletter_title">Subscribe to our newsletter</div>
				</div>
			</div>
			<div class="row newsletter_row">
				<div class="col-lg-8 offset-lg-2">
					<?php if (count($errors) > 0): ?>
					<div class="alert alert-danger" role="alert">
						<?php foreach ($errors->all() as $error): ?>
							<span> {{ $error }} </span>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
					<?php if ($message = Session::get('success-subscribe')): ?>
						<div class="alert alert-success" role="alert">
							<span> {{ $message }} </span>
						</div>
					<?php endif; ?>
					<div class="newsletter_form_container">
					<form method="POST" action="{{ url('/subscribe') }}" id="newsleter_form" class="newsletter_form">
						{{ csrf_field() }}
							<input type="email" name="email_subscribe" class="newsletter_input" placeholder="Your E-mail" required="required">
							<button type="submit" name="send" class="newsletter_button">subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- =============================== Extending Footer ============================== -->

	@extends('include/footer')

	<!-- =============================== Extending Footer End =========================== -->
</body>
</html>