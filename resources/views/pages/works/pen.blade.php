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
        <style>
            .navbar .nav-link.effect-motion-hover {
    color: #000 !important;
  }
  
  
  
  .navbar-sticky .nav-link.effect-motion-hover {
    color: #fff !important;
  }
  
  .navbar .navbar-nav.toggle li a {
    color: #000 !important;
  }
  .navbar-sticky .navbar-nav.toggle li a {
    color: #fff !important;
  }
  
  
  
  section{
    padding: 0 ;
  }
  #footer{
    background:#111111
 }
 #copyright{
     background:#040402
 }
        </style>
            <link rel="stylesheet" href="/assets/css/pen_app.css">
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
                        <a href="/services/ai-and-digital-platforms" class="nav-link">AI & Digital Platforms</a>
                        <a href="/services/digital-transformation" class="nav-link">Digital Transformation</a>
                        <a href="/services/digital-marketing" class="nav-link">Digital Marketing</a>
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

    <section id="pen-heading-section">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-7">
                    <img src="/assets/img/pen/logo.png" class="pen-logo" alt="Pen Logo">
                </div>
                <div class="col-sm-5">
                    
                </div>
            </div>
        </div>
        <img src="/assets/img/pen/top-circle.png" class="pen-top-circle" alt="Pen Logo">
    </section>
    
    <section id="pen-banner-section">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <p>The Structured Learning App | PEN is an e-learning Platform Carefully architected for aspirants of structured</p>
                </div>
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/pen/computer.png" alt="computer image" class="img img-responsive penbanner-image">
                </div>
            </div>
        </div>
    </section>


    <section id="pen-deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="deliverables-content">
                        <h1 class="deliverables-title">Deliverables</h1>
                        <h3 class="deliverables-desc">Responsive Website</h3>

                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="pen-learn-for-free-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/pen/phone1.png" alt="Phone One" class="img img-responsive pen-learn-for-free-section-image">
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="pen-learn-content-holder">
                        <h1 class="pen-learn-title">Learn for free</h1>
                        <p class="pen-learn-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididuntlabore et dolore magna </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pen-give-take">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-8 square-bg align-self-center">
                    <div class="row">
                        <img src="/assets/img/pen/screenshot1.png" alt="screenshot1" class="pen-give-screenshot img img-responsive col-sm-6"><img src="/assets/img/pen/screenshot2.png" alt="screenshot1" class="pen-give-screenshot img img-responsive col-sm-6">
                    </div>
                </div>
                <div class="col-sm-4 circle-bg align-self-center">
                        <h3 class="give-take-title">
                            Give & Take course
                        </h3>
                </div>
            </div>
        </div>
    </section>


    <section id="pen-courses">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7 align-self-center">
                    <div class="courses-div">
                        <h1>Courses</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididuntlabore et dolore </p>
                    </div>
                </div>
                <div class="col-sm-5 align-self-center">
                    <img src="/assets/img/pen/courses.png" alt="Courses" class="img img-responsive pen-courses-image">
                </div>
            </div>
        </div>
    </section>

    <section id="pen-core-values">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 align-self-center">
                    <img src="/assets/img/pen/phone3.png" alt="Courses" class="img img-responsive pen-corevalue-image">

                </div>
                <div class="col-sm-7 align-self-center">
                    <div class="corevalues-div">
                        <h1>Our Core Values</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididuntlabore et dolore </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pen-landing-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>And a Clean and Elegant</h3>
                    <h1>Landing Page</h1>

                    <img src="/assets/img/pen/laptop.png" alt="landing page" class="landing-page-image">
                </div>
            </div>
        </div>
    </section>
    <section id="penfooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/pen/logo.png" alt="Logo " >
                </div>
            </div>
        </div>
    </section>



@include('inc.footer')
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