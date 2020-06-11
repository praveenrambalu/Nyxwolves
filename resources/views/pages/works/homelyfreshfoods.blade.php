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
            <link rel="stylesheet" href="/assets/css/hff-style.css">
</head>
<body>
    @include('inc.preloader')
    <div class="fullpage">
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



<div class="container-fluid first-section">
    <div class="row text-center">
        <div class="col-sm-12 text-center">
            <img src="/assets/img/hff/logo.png" alt="" class="hff-logo img img-responsive">
        </div>
    </div>
</div>
<section id="intro-text">
    <div class="container-fluid orange-bg">
        <div class="row">
            <div class="col-sm-4">
                <img src="/assets/img/hff/leaf.png" alt="" class="leaf-image" data-scroll>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <p class="about-text">
                    Homely Fresh Foods is a new venture of Arusuvai Arasu group of companies, with experience in the industry for 60+ years. HFF deliver homemade food to your door step across Chennai.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="deliverables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 deliverables-section-text">
                <h1 class="heading-deliverables">Deliverables : </h1>
                <p class="deliverables-text">
                    Logo <br>
                    Social Media <br>
                    Web Application <br>
                </p>
            </div>
            <div class="col-sm-7">
                <img src="/assets/img/hff/phone.png" class="img img-responsive phone-img" >
            </div>

        </div>
    </div>
   
</section>

<section id="webapp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="webapp-heading"> WEB APPLICATION</h1>
                <p class="webapp-text">
                    Web applications can help target numerous clientele and customers at a time. We help to make it easier to maintain a proper communication channel between potential customers and the business organization.
                </p>
            </div>
            <div class="col-sm-6"></div>
            <img src="/assets/img/hff/mac.png"  class="macbook" alt="">
        </div>
    </div>
</section>
<section id="socialmedia">
    <div class="container-fluid vector-bg">
        <div class="row">
            <h1 class="socialmedia">Social Media</h1>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="/assets/img/hff/social1.png" class="img img-responsive socialmedia-phone">
            </div>
            <div class="col-sm-4">
                <img src="/assets/img/hff/social2.png" class="img img-responsive socialmedia-phone">
            </div>
            <div class="col-sm-4">
                <img src="/assets/img/hff/social3.png" class="img img-responsive socialmedia-phone">
            </div>
        </div>
    </div>
</section>
@include('inc.footer')
@include('inc.search-menu')
</div>
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