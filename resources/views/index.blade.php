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
	<!-- ====================================== Home ===================================-->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" data-dark-overlay="6" style="background-image:url(images/person-holding-laboratory-flask-2280571.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										{{-- <div class="home_subtitle">Genetic Testing for Hereditary Cancer Syndromes</div> --}}
										<div class="home_title">National Cancer Institute</div>
										<div class="home_subtitle">Genetic Testing for Hereditary Cancer Syndromes</div>
										<div class="home_text">
											<p class="main-prgraph">Cancer can sometimes appear to “run in families” even if it is not caused by an inherited mutation.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#">read more</a></div>
											<div class="button button_2 button-white trans_200"><a href="#">more about us</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" data-dark-overlay="6" style="background-image:url(images/man-standing-beside-his-wife-teaching-their-child-how-to-1128318.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										{{-- <div class="home_subtitle">4th Leading Cuased Of Death In US</div> --}}
										<div class="home_title">Adverse Drug Reactions</div>
										<div class="home_subtitle">4th Leading Cuased Of Death In The US.</div>
										<div class="home_text">
											<p class="main-prgraph">With a simple non-invasive test, practitioners are provided with a report indicating which
												drugs will work, which will be dangerous, and in many cases what dosage will be most
												appropriate.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#">read more</a></div>
											<div class="button button_2 button-white trans_200"><a href="#">more about us</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" data-dark-overlay="6" style="background-image:url(images/two-men-standing-inside-a-room-2182976.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title">Identify Allergy Triggers</div>
										<div class="home_subtitle">Optimize Treatments To Improve The Quality Of Life</div>
										<div class="home_text">
											<p class="main-prgraph">Get to the root of your patients’ allergy-like symptoms with Allergen-Specific IgE Blood Testing.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#">read more</a></div>
											<div class="button button_2 button-white trans_200"><a href="#">more about us</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">This is some text</div>
							<div class="section_title"><h2>Some major section</h2></div>
						</div>
						<div class="intro_text">
							<p>Integer aliquet congue libero, eu gravida odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna vestibulum in. Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus, vel pharetra metus dolor.</p>
						</div>
						<div class="milestones">
							<div class="row milestones_row">
							
								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
										<div class="milestone_text">Clients Info</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="352">0</div>
										<div class="milestone_text">More Stats</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="718">0</div>
										<div class="milestone_text">Something</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<div class="intro_form_title">Make an Appointment</div>
						<form action="#" class="intro_form" id="intro_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" class="intro_input" placeholder="Your Name" required="required">
								<input type="email" class="intro_input" placeholder="Your E-mail" required="required">
								<input type="tel" class="intro_input" placeholder="Your Phone" required="required">
								<input type="text" id="datepicker" class="intro_input datepicker" placeholder="Date" required="required">
								{{-- <select class="intro_select intro_input" required>
									<option disabled="" selected="" value="">Speciality</option>
									<option>Speciality 1</option>
									<option>Speciality 2</option>
									<option>Speciality 3</option>
									<option>Speciality 4</option>
									<option>Speciality 5</option>
								</select> --}}
								{{-- <select class="intro_select intro_input" required="required">
										<option disabled="" selected="" value="">Doctor</option>
										<option>Doctor 1</option>
										<option>Doctor 2</option>
										<option>Doctor 3</option>
										<option>Doctor 4</option>
										<option>Doctor 5</option>
									</select> --}}
							</div>
							<button class="button button_1 intro_button trans_200">make an appointment</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="background_image orage_overlay" style="background-image:url(images/portrait-photo-of-woman-holding-up-a-magnifying-glass.jpg)"></div>
		<div class="container">
			<div class="row row-eq-height">

				<!-- Why Choose Us Image -->
				{{-- <div class="col-lg-6 order-lg-1 order-2">
					<div class="why_image_container">
						<div class="why_image"><img src="images/.jpg" alt=""></div>
					</div>
				</div> --}}

				<!-- Why Choose Us Content -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="why_content">
						<div class="section_title_container">
							<div class="section_subtitle">Genome Technologies</div>
							<div class="section_title"><h2>Why choose us?</h2></div>
						</div>
						<div class="why_text">
							<p class="white_text">Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna vestibulum in. Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus, vel pharetra metus dolor.</p>
						</div>
						<div class="why_list">
							<ul>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container icon_container_orange d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Only Top Products</div>
										<div class="why_list_text white_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container icon_container_orange d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">The best Doctors</div>
										<div class="why_list_text white_text">Ac erat ut enim maximus accumsan vel ac</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container icon_container_orange d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Great Feedback</div>
										<div class="why_list_text white_text">Etiam ac erat ut enim maximus accumsan vel</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="cta_content">
							<div class="cta_title">Give us a call today!</div>
							<div class="cta_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
						</div>
						<div class="cta_phone ml-lg-auto">+34 586 778 8892</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_subtitle">Genome Technologies</div>
						<div class="section_title"><h2>Our Services</h2></div>
					</div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Health &amp; Wellness Screening</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_5.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Hereditary Cancer Screening</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_6.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Pharmacogenetic Testing</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_7.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Carrier Screening</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Toxicology</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Respiratory Pathogen Detection</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">NIPT Screening</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Fungal Pathogen Detection</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title">Parkinson's, Alzheimer, &amp; Dementia Panel</div>
							<div class="service_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra">
		<div class="parallax_background parallax-window" data-dark-overlay="6" data-parallax="scroll" data-image-src="images/scientist-using-microscope.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="extra_container d-flex flex-row align-items-start justify-content-end">
						<div class="extra_content">
							<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
								<div>10<span>%</span></div>
								<div>Discount</div>
							</div>
							<div class="extra_title">Call us Now</div>
							<div class="extra_text">
								<p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus.</p>
							</div>
							<div class="button button_1 extra_link trans_200"><a href="#">call us</a></div>
						</div>
					</div>
				</div>
			</div>
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