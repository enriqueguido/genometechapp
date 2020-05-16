<!DOCTYPE html>
<html lang="en">
<head>
<title>Genome Technologies</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Genome Technologies Web Application">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
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
	<!-- ====================================== Home ===================================-->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" data-dark-overlay="6" style="background-image:url(images/lab.jpg)"></div>
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
					<div class="background_image" data-dark-overlay="6" style="background-image:url(images/doctor-rep.jpg)"></div>
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
					<div class="background_image" data-dark-overlay="6" style="background-image:url(images/family.jpg)"></div>
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
							<div class="section_subtitle">Medication risk management </div>
							<div class="section_title"><h2>Empowering You Through Genomics</h2></div>
						</div>
						<div class="intro_text">
							<p>
								Are tools that assess a patients medication risk based on lifestyle and current drug regimen,
								as well as provides advice on the benefits of pharmacogenomic testing.
								Visualize medication risks against intended therapeutic goals—decrease 
								adverse events while addressing medical intent.
							</p>
						</div>
						{{-- <div class="milestones">
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
						</div> --}}
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<div class="intro_form_title">Schedule a Call</div>
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
						<form method="POST" action="{{ url('/send') }}" class="intro_form" id="intro_form">
							{{ csrf_field() }}
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" class="intro_input" placeholder="Your Name" name="name_index" required="required">
								<input type="email" class="intro_input" placeholder="Your E-mail" name="email_index" required="required">
								<input type="tel" class="intro_input" placeholder="Your Phone" name="phone_num_index" required="required">
								<input type="text" id="datepicker" class="intro_input datepicker" name="date_index" placeholder="Date" required="required">
							</div>
							<button type="submit" name="send" class="button button_1 intro_button trans_200">Schedule A Call</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why" id="about">
		<div class="background_image orage_overlay" style="background-image:url(images/why-us-photo.jpg)"></div>
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
							<p class="white_text">Simply put we empower providers and engage patients. We provide your clinic with two unique and fully 
								integrated tools for complete medication risk modeling and personalized patient care — all on an individual, 
								specific patient basis.
							</p>
						</div>
						<div class="why_list">
							<ul>
								<div class="icon_container icon_container_orange d-flex flex-column align-items-center justify-content-center align-left">
									<div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
								</div>
								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="why_list_content">
										<div class="why_list_title">Two prescription drug decision support tools</div>
										<div class="why_list_text white_text">Improve medication efficacy, reduce risk, and increase patient compliance. 
											Reduce costs and minimize patient frustration.
										</div>
									</div>
								</li>

								<!-- Why List Item -->
								<div class="icon_container icon_container_orange d-flex flex-column align-items-center justify-content-center align-left margin-top">
									<div class="icon icon-opc"><img src="images/doc-overall.svg"></div>
								</div>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="why_list_content">
										<div class="why_list_title">Optimal Personalized Care</div>
										<div class="why_list_text white_text">We give medical professionals a total solution for medication risk management, 
											with detailed findings and recommendations based on impact and severity.
										</div>
									</div>
								</li>

								<!-- Why List Item -->
								<div class="icon_container icon_container_orange d-flex flex-column align-items-center justify-content-center align-left margin-top">
									<div class="icon icon-omro"><img src="images/calendar-white.svg"></div>
								</div>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="why_list_content">
										<div class="why_list_title">One-Click Medication Regimen Optimization</div>
										<div class="why_list_text white_text">With our tools you get rapid decision support, visualize improvement &amp; risks, 
											real-time risk modeling, alternatives by therapeutic intent, risk, &amp; cost, and much more.
										</div>
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
							<div class="cta_text">We'd love to discuss how we can help you.</div>
						</div>
						<div class="cta_phone ml-lg-auto">+34 586 778 8892</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->
	<a id="services">
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
	</a>			
				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon icon-hws"><img src="images/monitor-white.svg"></div>
							</div>
							<div class="service_title">Health &amp; Wellness Screening</div>
							<div class="service_text">
								<p>Our Clinical Health &amp; Wellness Screening Profile provides valuable insight to a patients' health 
									and nutrition through their comprehensive diagnostic profile.
								</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon icon-hcs"><img src="images/cells-white.svg"></div>
							</div>
							<div class="service_title">Hereditary Cancer Screening</div>
							<div class="service_text">
								<p>Over 1 million Americans are diagnosed with cancer each year. Of these diagnoses, 
									approximately 5% of the genesis of the cancer is contributed to genetic factors.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon icon-pt"><img src="images/paper-white.svg"></div>
							</div>
							<div class="service_title">Pharmacogenetic Testing</div>
							<div class="service_text">
								<p>It is truly the combination of both genetic and non-genetic factors that affect whether a patient remains compliant and will respond to your care plan.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_7.svg"></div>
							</div>
							<div class="service_title">Carrier Screening</div>
							<div class="service_text">
								<p>The American Medical Association states that about one-quarter of new prescriptions are never, 
									and patients do not take their medications about 50% of the time.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_8.svg"></div>
							</div>
							<div class="service_title">Toxicology</div>
							<div class="service_text">
								<p>We provide clear and accurate results with a rapid turn around time. Clinicians may choose 
									to test urine or oral fluid samples to confirm more than 150 analytes spanning more than 
									200 drug classes.
								</p>
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
								<p>Lower Respiratory Track Infections along with Influenza, are the most common causes of death in the 
									United States.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon icon-ns"><img src="images/hosp-receptionist-white.svg"></div>
							</div>
							<div class="service_title">NIPT Screening</div>
							<div class="service_text">
								<p>NIPT screening looks at DNA from your baby's placenta in a sample of your blood to indentify wheter you are at increased risk of giving birth to a child with genetic disorders.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon icon-fpd"><img src="images/magnifier-white.svg"></div>
							</div>
							<div class="service_title">Fungal Pathogen Detection</div>
							<div class="service_text">
								<p>We provide a qPCR-based test with a resistance option for rapid detection and speciation of fungi most commonly observed to harm the foot.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon icon-padp"><img src="images/man-at-table.svg" style="width:44px;height:50px;"></div>
							</div>
							<div class="service_title">Parkinson's, Alzheimer, &amp; Dementia Panel</div>
							<div class="service_text">
								<p>this panel examins 35 genes associated with an increased risk of developing neurodegenerative conditions.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra">
		<div class="parallax_background parallax-window" data-dark-overlay="6" data-parallax="scroll" data-image-src="images/scientist.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="extra_container d-flex flex-row align-items-start justify-content-end">
						<div class="extra_content">
							<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
								{{-- <div>Increase Revenue<span>%</span></div>  --}}
								<div class="call-to-action call-to-action-margin">We can help increase the quality of patient care</div> 
								{{-- <div>Increase Revenue</div> --}}
							</div>
							<div class="extra_title">Call us Now</div>
							<div class="extra_text">
								<p>
									Let our staff keep your practice up to date with
									the most advanced  products and services our laboratories
									have to offer.
								</p>
							</div>
						<div class="button button_1 extra_link trans_200"><a href=" {{ url('/contact') }} ">call us</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Us -->

	{{-- <div class="intro">
		<div class="row">
			<div class="col text-center about_text_margin">
				<div class="section_title_container">
					<div class="section_subtitle about_section_subtitle">Genome Technologies</div>
					<div class="section_title"><h2>About Us</h2></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col about_text_intro">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle about_align sec_sub_title_color">Genome Technologies</div>
							<div class="section_title about_align"><h2>Lorem Ipsum Dolor Sit Amet</h2></div>
						</div>
						<div class="intro_text">
							<p class="about_text about_align">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
								aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
								officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="about_info about_info_right">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Text</div>
									<div>Second text area</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Text</div>
									<div>Second text area</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<img src="images/photo-of-woman-holding-red-stethoscope.jpg" class="intro_photo_container" alt="">
				</div>
			</div>
		</div>
	</div> --}}

	{{-- Opposite --}}

	{{-- <div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<img src="images/scientist-in-laboratory.jpg" class="intro_photo_container" alt="">
				</div>

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col about_text_intro">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle sec_sub_title_color">Genome Technologies</div>
							<div class="section_title"><h2>Lorem Ipsum Dolor Sit Amet</h2></div>
						</div>
						<div class="intro_text">
							<p class="about_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
								aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
								officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="about_info">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Text</div>
									<div>Second text area</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Text</div>
									<div>Second text area</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

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