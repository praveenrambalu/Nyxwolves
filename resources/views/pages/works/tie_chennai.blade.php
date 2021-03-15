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
 body{
     background:#fff;
 }
        </style>
            <link rel="stylesheet" href="/assets/css/tie_style.css">
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
    
    <section id="tie_top_holder">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/tie/logo.png" class="img img-responsive tie_logo" alt="">

                    <div class="tie_banner_content">
                        <h3>TiE is known for </h3>
                        <h1 style="color: #000"><span>mentoring education </span> 
                            & networking to help entrepreneurs 
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/tie/banner_image.png" class="img img-responsive banner_image" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section id="tie_pillers">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-7">
                    <h3 class="title">Pillars of TiE</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="pillars-list ">
                                <li><span><img src="/assets/img/tie/icon1.png" class="img img-responsive pillers_icon" alt=""></span> Mentoring </li>
                                <li><span><img src="/assets/img/tie/icon2.png" class="img img-responsive pillers_icon" alt=""></span> Education </li>
                                <li><span><img src="/assets/img/tie/icon3.png" class="img img-responsive pillers_icon" alt=""></span> Investing </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="pillars-list ">
                                <li><span><img src="/assets/img/tie/icon4.png" class="img img-responsive pillers_icon" alt=""></span> Networking </li>
                                <li><span><img src="/assets/img/tie/icon5.png" class="img img-responsive pillers_icon" alt=""></span> Incubation </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="pillers_image_holder">
                        <img src="/assets/img/tie/pillers_computer.png" class="img img-repsonsive pillers_image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tie_events">
        <div class="custom-container">

            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h3 class="tie_event_title">Events</h3>
                    <span class="tie_event_bar"></span>
                    <img src="/assets/img/tie/events_computer.png" class="img img-responsive tie_event_image" alt="">
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="tie_event_container">
                        <ul class="tie_event_list">
                            <li>Upcoming Events</li>
                            <li>Past Events</li>
                            <li>Present Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tie_responsive_website">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>A Complete
                        Responsive
                        Website</h1>
                </div>
                <div class="col-sm-6">
                    <div class="responsive_website_image_holder">
                        <img src="/assets/img/tie/responsive_website_image.png" class="img img-responsive responsive_website_image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tie_responsive_website_two">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="responsive_website_image2_holder">
                        <img src="/assets/img/tie/responsive_website_image2.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="responsive_website_content">
                        <h1>TiE Regions
                            & Chapters</h1>
                            <p>Join our global TiE Chapters to derive maximum benefit and network with the TiE community of advisors, mentors, investors, angels and coaches.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tie_landing">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                        <h3>And a Clean and Elegant</h3>
                        <h1>LANDING PAGE!</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="tie_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/tie/logo.png" class="img img-responsive " alt="">
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