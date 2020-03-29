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
<link rel="icon" href="img/icon.png">
</head>
<body>

<div class="super_container">
	
	<!-- =============================== Extending Navbar =================================== -->

	@extends('include/navbar')

	<!-- =============================== Extending Navbar End ================================ -->

	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<div class="parallax_background parallax-window" data-dark-overlay="7" data-parallax="scroll" data-image-src="images/new-york-city.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay_blue.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
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


				{{-- <div class="row google_map_row"> --}}
					<div class="col">
						
						<!-- Contact Map -->
	
						<div class="contact_map">
	
							<!-- Google Map -->
							
							<div class="map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>
	
						</div>
	
					</div>
				{{-- </div> --}}

				
				<!-- Contact Form -->
				{{-- <div class="col-lg-6">
					<div class="contact_form_container">
						<div class="contact_form_title">Make an Appointment</div>
						<form action="#" class="contact_form" id="contact_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" class="contact_input" placeholder="Your Name" required="required">
								<input type="email" class="contact_input" placeholder="Your E-mail" required="required">
								<input type="tel" class="contact_input" placeholder="Your Phone" required="required">
								<select class="contact_select contact_input" required>
									<option disabled="" selected="">Speciality</option>
									<option>Speciality 1</option>
									<option>Speciality 2</option>
									<option>Speciality 3</option>
									<option>Speciality 4</option>
									<option>Speciality 5</option>
								</select>
								<select class="contact_select contact_input"required="required">
										<option disabled="" selected="">Doctor</option>
										<option>Doctor 1</option>
										<option>Doctor 2</option>
										<option>Doctor 3</option>
										<option>Doctor 4</option>
										<option>Doctor 5</option>
									</select>
								<input type="text" id="datepicker" class="contact_input datepicker" placeholder="Date" required="required">
							</div>
							<button class="button button_1 contact_button trans_200">make an appointment</button>
						</form>
					</div>
				</div> --}}

				<!-- Contact Content -->
				<div class="col-lg-5 offset-lg-1 contact_col">
					<div class="contact_content">
						<div class="contact_content_title">Get in touch with us</div>
						<div class="contact_content_text">
							<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feug iat bibendum orci, non elementum urna. Cras sit amet sapien aliquam.</p>
						</div>
						<div class="direct_line d-flex flex-row align-items-center justify-content-start">
							<div class="direct_line_title text-center">Direct Line</div>
							<div class="direct_line_num text-center">+53 345 7953 324</div>
						</div>
						<div class="contact_info">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Address</div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Phone</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>E-mail</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
						<div class="contact_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div> --}}
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window orage_overlay" data-parallax="scroll" data-image-src="images/syringe-and-pills-on-blue-background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="newsletter_title">Subscribe to our newsletter</div>
				</div>
			</div>
			<div class="row newsletter_row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_form_container">
						<form action="#" id="newsleter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
							<button class="newsletter_button">subscribe</button>
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