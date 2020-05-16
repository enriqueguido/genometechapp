

<header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

        <!-- Logo -->
        <a href="{{ url('/') }}">
            <img class="logo-genome" src="images/logo.svg" alt="Genome Technologies Logo">
        </a>
        <div class="logo">
        <a href="{{ url('/') }}">
                <div>
                    Genome
                        {{-- <span> --}}
                            {{-- Technologies --}}
                        {{-- </span> --}}
                </div>
                <div class="logo-name-sectn ">
                    Technologies
                </div>
                <div>Personalized Medicine</div>
                {{-- <img src="images/logo.svg" alt="Genome Technologies Logo"> --}}
            </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About us</a></li>
                <li><a href="{{ url('/#services') }}">Services</a></li>
                {{-- <li><a href="blog.html">News</a></li> --}}
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
            
            <!-- Work Hourse -->
            <div class="work_hours">Mo - Sat: 8:00am - 5:00pm</div>

            <!-- Header Phone -->
            <div class="header_phone">315 - 720 - 8875</div>

            <!-- Appointment Button -->
        <div class="button button_1 header_button"><a href="{{ url('/contact') }}">Call Us</a></div>

            <!-- Header Social -->
            <div class="social header_social">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href=""><i class="fa insta-color fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa face-color fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa twit-color fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <!-- Hamburger -->
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu_overlay trans_400"></div>
<div class="menu trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <nav class="menu_nav">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About us</a></li>
            <li><a href="{{ url('/#services') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>
    <div class="menu_extra">
        <div class="menu_link">Mo - Sat: 8:00am - 5:00pm</div>
        <div class="menu_link">315 - 720 - 8875</div>
        <div class="menu_link"><a href="{{ url('/contact') }}">Give us a call!</a></div>
    </div>
    <div class="social menu_social mobile-menu-social">
        <ul class="d-flex flex-row align-items-center justify-content-start">
            <li><a href=""><i class="fa fa-instagram insta-color" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-facebook face-color" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter twit-color" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
