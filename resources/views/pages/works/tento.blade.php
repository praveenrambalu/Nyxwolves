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
            <link rel="stylesheet" href="/assets/css/tento_style.css">
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

    <section id="tento_banner">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/tento/logo.png" class="img img-responsive tento_banner_logo" alt="">
                    <div class="tento_banner_content">
                        <h3>The app that rewards you for</h3>
                          <h1>Your Curiosity with Real Cash</h1>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tento_deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="deliverables_content">

                        <h3>Deliverables</h3>
                        <ul>
                            <li>Logo and Brand Identity</li>
                            <li>Mobile App (Android and iOS)</li>
                            <li>Landing Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tento_deliverables_image">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/tento/deliverables.png" class="img img-responsive deliverables-image" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="deliverables-list-container ">
                        <ul class="deliverables-list">
                            <li>Win Real Money by answering simple questions </li>
                            <li>Hassle free payouts directly to your bank account</li>
                            <li>Exciting Modes of Play</li>
                            <li>Daily Quizzes</li>
                            <li>Wide variety of Topics</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tento_game_modes">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-4 align-self-center">
                    <h1>Multiple Game Modes</h1>
                </div>
                <div class="col-sm-8 align-self-center">
                    <div class="row">
                        <img src="/assets/img/tento/game1.png" class="img img-responsive game_image col-sm-4" alt=""> 
                        <img src="/assets/img/tento/game2.png" class="img img-responsive game_image col-sm-4" alt=""> 
                        <img src="/assets/img/tento/game3.png" class="img img-responsive game_image col-sm-4" alt=""> 
                        <img src="/assets/img/tento/game4.png" class="img img-responsive game_image col-sm-4" alt=""> 
                        <img src="/assets/img/tento/game5.png" class="img img-responsive game_image col-sm-4" alt=""> 
                        <img src="/assets/img/tento/game6.png" class="img img-responsive game_image col-sm-4" alt=""> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tento_questions_section">
        <div class="custom-container">

            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/tento/question_types.png" class="img img-responsive question-types" >
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="questions_content">
                            <h1>Multiple Question Types.   <br> With different lifelines</h1>
                            <h3>The Race against time gets very Real here</h3>
                    </div>
                </div>
            </div>


            <div class="row">
               
                <div class="col-sm-6 align-self-center">
                    <div class="questions_content">
                            <h1>Quiz Fantasy League</h1>
                            <h3>Not just any other Fantasy league, Earn Real Cash, with your Knowledge</h3>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/tento/deliverables.png" class="img img-responsive question-types" >
                </div>
            </div>
        </div>

    </section>

    <section id="tento_stop_there">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="stop_image_holder">
                        <img src="/assets/img/tento/phone.png" class="img img-responsive stop_image" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="stop_content">
                        <h1>And it doesnt Stop There!</h1>
                    </div>

                    <div class="stop_para">
                        <p>Players can More Money by participating in Trading in Trending Answer. Truely a Unique Feature of Tento!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tento_landing">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="landing-content">
                        <h1>And a Clean and
                            Elegant <span>
                            Landing Page! </span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tento_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                        <img src="/assets/img/tento/logo.png" class="img img-responsive tento_footer_logo" alt="">
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