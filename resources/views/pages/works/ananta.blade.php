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
            <link rel="stylesheet" href="/assets/css/ananta_style.css">
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
<section id="ananta_logo">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/anantaspa/logo.png" class="img img-responsive " alt="">
            </div>
        </div>
    </div>
</section>


<section id="ananta_spa_group">
    <div class="ananta_spa_group_images">

        <div class="custom-container">
            <div class="row d-flex align-items-end">
                <div class="col-sm-6 text-center">
                    <div class="ananta_banner_content">
                        <h1 class="text-white">Ananta <br> Group <br> of SPAS</h1>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="/assets/img/anantaspa/stone.png" class="img img-responsive stone_image" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="ananta_spa_group_content">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        Our purpose is to provide you with holistic care in a clean, comfortable and safe environment at a price you can afford. Our drive and commitment guarantee the superior quality of our products and services. It is this drive that enables us to attain the necessary knowledge and expertise in the selection of the professionally trained staff.
                    </p>
                </div>
            </div>
        </div>
    </div>


</section>


<section id="ananta_deliverables">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="deliverables_content">

                    <h3>Deliverables</h3>
                    <h1>Responsive Website</h1>
                </div>
                <div class="text-center">

                    <img src="/assets/img/anantaspa/deliverables.png" class="img img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="ananta_two_phones">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/anantaspa/2mobiles.png" class="img img-responsive" alt="">
            </div>
        </div>
    </div>
</section>


<section id="ananta_res">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1><span>Responsive</span> Website Design</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>Responsive web design simply allows web pages to respond to the size of the screen or browser they are being viewed on.
                    Basically, a responsive website adapts to its environment, rather than the user having to adapt to it.
                    For example, an iPhone, tablet, Kindle, laptop, etc. will all display easy-to-navigate websites.</p>
            </div>
        </div>
    </div>
</section>

<section id="ananta_image">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/anantaspa/desktop.png" class="img img-responsive " alt="">
            </div>
        </div>
    </div>
</section>


<section id="ananta_footer">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/anantaspa/Footer.png" alt="" class="img img-responsive">
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