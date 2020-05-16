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
		<div class="background_image" data-dark-overlay="6" style="background-image:url(images/under-construction.jpg)"></div>
		<div class="home_overlay"><img src="images/home_overlay_blue.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">About Us</div>
							<div class="home_text home_text_contact">This page is currently under construction. Please check back with us later!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
        
    <!-- =========== Under Construction Sign ==========-->
    
    {{-- <div class=""> --}}
        <div class="aboutus-title"><h2>Under Construction</h2></div>
        <div class="svg_aboutus">
            <?php echo file_get_contents("images/under-construction-aboutus.svg"); ?>
        </div>
    {{-- </div> --}}
    

	<!-- =============================== Extending Footer ============================== -->

	@extends('include/footer')

	<!-- =============================== Extending Footer End =========================== -->
</body>
</html>