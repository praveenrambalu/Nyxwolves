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
            <link rel="stylesheet" href="/assets/css/bodyapp_style.css">
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


    <section id="bodyapp_top_banner_section">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/bodyapp/top_logo.png" class="img img-responsive top_logo" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 ">
                    <h1 class="pen_banner_content">
                        A Beauty & Wellness <span>
                            Platform</span>
                    </h1>
                </div>
                <div class="col-sm-6 ">
                    <img src="/assets/img/bodyapp/1.png" class="img img-responsive banner_image" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="deliverables_content">

                        <h3>Deliverables</h3>
                        <ul>
                            <li>User Mobile App (Android and iOS)</li>
                            <li>Partner Mobile App (Android and iOS)</li>
                            <li>Landing Page</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <img src="/assets/img/bodyapp/mindfullness.png" class="img img-responsive mindfullness_image " alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_app">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bodyapp_app_content_holder">
                        <span class="bodyapp_app_content_holder"></span>
                        <h1>An App to give the phenomenal
                            care your Body and Soul deserves!</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bodyapp/phone3.png" class="img img-responsive screenshots" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_partner">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partner_black_bg">
                        <h1>Full Partner App Support, with Seamless Intergration</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <img src="/assets/img/bodyapp/groupphone.png" class="img img-responsive partner-phone" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_landing">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="landing_content">

                        <h1>With a Clean Landing Page, 
                            Matching the
                            <span>App Asthetics</span></h1>
                        </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/bodyapp/landing_computer.png" class="img img-responsive landing_computer_image" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bodyapp/footerlogo.png" class="img img-responsive " alt="" style="margin-right: 50px;">
                    <div class="row mt-3">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 text-center">

                        <a href="https://apps.apple.com/in/app/bodyapp-affordable-wellness/id1548891118" target="_blank"><img src="/assets/img/bodyapp/app_store.png"  class="img img-responsive" style="height: 60px;"></a>
                        <a href="https://play.google.com/store/apps/details?id=com.bodyapp" target="_blank"><img src="/assets/img/bodyapp/play_store.png" class="img img-responsive" style="height: 60px;"></a>
                        </div>
                    </div>
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