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
            <link rel="stylesheet" href="/assets/css/wondryears_style.css">
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
<br>
<br>
<br>
    <section id="wondryears_banner">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/wondryears/logo.png" class="img img-responsive wondryears_logo" alt="">

                    <div class="laptop-container">
                        <img src="/assets/img/wondryears/laptop.png" class="img img-responsive laptop_image" alt="">
                    </div>
                    <div class="lap_background_container"></div>
                    <span class="redbar"></span>
                </div>
                <div class="col-sm-6">
                    <div class="banner_overall_container">
                        <div class="banner_text-container">
                            <h3 class="banner_text">
                                WondrYears is the
                                buzzing platform for
                                toddlers-to-teens. We
                                use technology to
                                connect parents,
                                children & providers of
                                the most enriching
                                growing-up experiences.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="wondryears_deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="deliverables-title">
                        <h1>Deliverables</h1>
                    </div>

                    <div class="deliverables-content">
                        <h3>Responsive
                            <br>
                            Website</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wondryears_module">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/wondryears/logo.png" class="img img-responsive" alt="">

                    <p>Different Modules, Ranging from Education, Online Classes, Skills and Hobbies lessons, to Healthy Snacks Ecommerce Website, Blogs, and Volunteering services</p>

                </div>
            </div>
        </div>
    </section>
    
    <section id="online_live_classes">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h1 class="section_title">ONLINE LIVE Classes</h1>
                    <p class="section_content">
                        Discover your passion, creative spark or learn new skills from our multiple options.
                    </p>
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="redbar"></span>
                        </div>
                        <div class="col-sm-6">
                            <img src="/assets/img/wondryears/phonestraight.png" alt="" class="img img-responsive ">
                        </div>
                        <div class="col-sm-3">
                            <span class="redbar"></span>
                        </div>
                        <!-- <span class="redbar"></span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wondryears_blogs_articles">
        <div class="wondryears_blogs_title">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="redbar_ico"></span>
                    </div>
                    <div class="col-sm-6">
                        <h1 class="section_title">Blogs & Articles</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="wondryears_blog_content">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-5 align-self-center">
                        <img src="/assets/img/wondryears/phone1.png" class="img img-responsive" alt="">
                    </div>
                    <div class="col-sm-7 align-self-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="wondryears_res_centers">
        <div class="res_title">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="section_title">Resources for special needs</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="res_laptop-holder">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img src="/assets/img/wondryears/laptopa.png" class="img img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wondryears_clean_elegent">
        <div class="clean_title">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                            <h2>And a Clean and Elegant</h2>
                            <h1>Design</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="clean_image">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img src="/assets/img/wondryears/phone.png" class="img img-responsive " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wondryears_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/wondryears/logo.png" class="img img-responsive " alt="">
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