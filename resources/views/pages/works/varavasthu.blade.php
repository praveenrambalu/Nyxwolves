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
            <link rel="stylesheet" href="/assets/css/varavasthu-style.css">
</head>
<body>

    <header>

        <!-- Navbar -->
        <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
            <div class="container header">
    
                <!-- Navbar Brand-->
                <a class="navbar-brand" href="/"><img src="/assets/images/logo-light.png" alt="Nyx Wolves"></a>
    
    
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


    <section id="logointro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="intro-text-name">
                        Vara 
                        Vasthu
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="logo-box">
                        <img src="/assets/img/varavasthu/logo.png" alt="" class="img img-responsive varavasthu-logo">
                    </div>

                    <p class="varavasthu-about-text">
                        Vara Vasthu was established online as a ladies’ handbag brand in India. It was an effort made at simplifying the relationship between a handbag and the wearer.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="about-vara">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/varavasthu/bag.png" class="bag-image">
                </div>
                <div class="col-sm-6">
                    <p class="bag-side-text">
                        Handbags are a world in themselves to a woman. Inside it, lie their precious trappings. An emblem of luxury and class, handbags have emerged to be the most sought after accessory, reflecting the style and personality of the wearer. Vara Vasthu shares a similar set of goals with their customers and brings you a wide range of cotton handbags at affordable prices.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="deliverables">
        <div class="container-fluid">
            <h1 class="deliverables-heading">DELIVERABLES</h1>
            <div class="row">
                <div class="col-sm-6">
                    <div class="deliverable-contents">
                        <h3 class="deliverable-content dark">- Branding Identity</h3>
                        <h3 class="deliverable-content gold">- Ecommerce Website</h3>
                        <h3 class="deliverable-content dark">- Ecommerce Mobile Platform</h3>
                        <h3 class="deliverable-content gold">- Product Updates and Support</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/varavasthu/book.png" class="img img-responsive book-image" alt="" data-scroll>
                </div>
            </div>
           
        </div>
    </section>
    <section id="black-box-bg">
        <div class="container-fluid">
            <div class="laptop-row row">
                <img src="/assets/img/varavasthu/laptop.png" class="img img-responsive laptop-image"  data-scroll alt="">
            </div>
        </div>
    </section>
    <section >
        <div class="container-fluid" id="brown-bg"></div>
        <div class="container-fluid" id="mobile-section">
            <div class="row">
                <div class="col-sm-7">
                    <p class="phone-left-text">
                        Vara Vasthu handbags are crafted in cotton and designed for use on a day to day basis.
                        <br>
                        <br>
                        An idea provoked by the sense of a lady’s needs, Vara Vasthu was finally given its wings with the assistance of NYX Wolves, the developer of the website.
                    </p>
                </div>
                <div class="col-sm-5">
                    <img src="/assets/img/varavasthu/phone-image.png" class="img img-responsive phone-image" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="letterhead-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/varavasthu/letter-head.png" class="img img-responsive letter-head-image" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="made-text">
                        <h1 class="personal-touch-text">
                            <span class="golden">Made</span> with A Personal Touch
                        </h1>
                        <div class="golden-line"></div>
                        <h3 class="vara-website">www.varavasthu.com</h3>
                    </div>
                </div>
            </div>
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