<!DOCTYPE html>
@section('page','Works - ')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('inc.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/theme-classic.css">

        <!-- ==============================================
        Section Configuration
        =============================================== -->
            <link rel="stylesheet" href="/assets/css/western-style.css">
</head>
<body>

    <header>

        <!-- Navbar -->
        <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
            <div class="container header">
    
                <!-- Navbar Brand-->
                <a class="navbar-brand" href="/"><img src="/assets/images/logo-dark.png" alt="Nyx Wolves"></a>
    
    
                <!-- Navbar Itens-->
                <ul class="navbar-nav items ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link effect-motion-hover">Home </a></li>
                    <!-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link effect-motion-hover">Pages <i class="icon-arrow-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="about-1.html" class="nav-link">About</a>
                            <a href="services-1.html" class="nav-link">Services</a>
                            <a href="service-single-1.html" class="nav-link">Service Single</a>
                            <a href="work-1.html" class="nav-link">Work</a>
                            <a href="pricing-1.html" class="nav-link">Pricing</a>
                            <a href="blog-listing-1.html" class="nav-link">Blog Listing<a>
                            <a href="blog-grid-1.html" class="nav-link">Blog Grid<a>
                            <a href="blog-single-post-1.html" class="nav-link">Single Post</a>
                            <a href="contact-1.html" class="nav-link">Contact</a>
                            <a href="search-1.html" class="nav-link">Search Results</a>
                            <a href="404-1.html" class="nav-link">404 Page</a>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a href="/about" class="nav-link effect-motion-hover">About</a>
                    </li>
                </li>
                {{-- <li class="nav-item">
                    <a href="/services" class="nav-link effect-motion-hover">Services</a>
                </li> --}}
                  <li class="nav-item dropdown">
                    <a href="/services" class="nav-link effect-motion-hover">Services <i class="icon-arrow-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="/services/brand-and-identity" class="nav-link">Branding & Identity</a>
                        <a href="/services/web-design-and-development" class="nav-link">Web Design & Development</a>
                        <a href="/services/digital-marketing" class="nav-link">Digital Marketing</a>
                        <a href="/services/ai-and-digital-platforms" class="nav-link">AI & Digital Platforms</a>
                    </div>
                </li> 
                    <li class="nav-item">
                        <a href="/works" class="nav-link effect-motion-hover">Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="/wolf-pack" class="nav-link effect-motion-hover">Wolf Pack</a>
                    </li>
                   
                </ul>
    
                <!-- Navbar Icons-->
                <!-- <ul class="navbar-nav icons ml-auto m-xl-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link effect-motion-hover" data-toggle="modal" data-target="#search">
                            <i class="icon-magnifier"></i>
                        </a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link effect-motion-hover"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="#" class="nav-link effect-motion-hover"><i class="icon-social-instagram"></i></a>
                    </li>
                </ul> -->
    
                <!-- Navbar Toggle-->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-grid m-0"></i>
                        </a>
                    </li>
                </ul>
    
                <!-- Navbar Action-->
                <ul class="navbar-nav action">
                    <li class="nav-item ml-3">
                        <a href="/contact" class=" btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>
    
    </header>


    <section class="western-top-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/western/ooty-image.png" class="img img-responsive ooty-image" >
                </div>
                <div class="col-sm-6 black-box">
                    <img src="/assets/img/western/logo.png" class="img img-responsive black-box-logo">
                </div>
            </div>
        </div>
    </section>

    <section id="green-bg">
        <h1 class="western-valley-text">Western Valley Resort – Ooty</h1>
    </section>

    <section id="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p class="about-text">
                        A beautiful resort surrounded by serene nature in the queen of hills, Ooty. The resort is located in a rural and mountainous area, surrounded by tea plantations.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <p class="about-text">
                        A place of divine beauty, which will mesmerize your senses. An enchanting place 7350 ft above sea level that overlooks the Emerald Lake in the most splendid form.
                    </p>
                </div>
                <div class="col-sm-6">
                       <div class="deliverables-content">
                           <h1 class="deliverables-heading">Deliverables</h1>
                            <h3 class="deliverables-sub-content"> Web Application w/ Booking</h3>
                       </div>
                </div>
            </div>
        </div>
    </section>


    <section id="macsection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/western/mac-book.png" class="img img-responsive nature-mac" data-scroll>
                </div>
                <div class="col-sm-6">
                    <h1 class="modern-platform-text">
                        MODERN
                        WEB PLATFORM FOR ONLINE BOOKINGS
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="macbooksection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="websiteboost-text">
                        WEBSITES BOOSTS SALES AND
                        BUILDS A UNIQUE
                        BRAND IMAGE
                    </h1>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/western/mac-book-2.png" class="img img-responsive nature-mac-book" data-scroll>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="western-about-text">
                        A hotel website is a source of information for both guests and a hotel. We provide a wide range of information which builds the image and informs about the hotel: its history, available attractions, distinctive traits, conference opportunities, restaurant offers, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="black-bg-image">
        <div class="container-fluid">
            <div class="row text-center">
                <h1 class="web-application">
                    Web application with booking. 
                </h1>
            </div>
        </div>
    </section>
    <section id="laptop-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/western/laptop.png" class="img img-responsive laptop-image">
                </div>
            </div>
        </div>

        <div class="container-fluid green-bg-footer">

        </div>
    </section>




@include('inc.search-menu')
@include('inc.scripts')
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
<script>
  window.onload = function () {
    ScrollOut({
      threshold: 0.5,
    });
  };
</script>
</body>
</html>