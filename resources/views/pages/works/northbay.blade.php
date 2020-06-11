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
            <link rel="stylesheet" href="/assets/css/northbay-style.css">
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

   
    <section id="logo-intro-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                  {{-- <img src="http://placehold.it/810x655" alt="" class="img img-responsive first-girl-image" > --}}
                  <img src="/assets/img/northbay/firstimage.png" alt="" class="img img-responsive first-girl-image" >
              </div>
              <div class="col-sm-6">
                  <img src="/assets/img/northbay/logo.png" class="img img-responsive logo-image">
              </div>
          </div>
      </div>
  </section>
  <section id="second-section-iphone">
      <div class="bluebar"></div>
      <div class="whitebar"></div>
      <div class="container-fluid iphone-section-rect">
          <div class="row">
              <div class="col-sm-6">
                  {{-- <img src="http://placehold.it/584x912" alt="" class="img img-responsive iphone-right-image" data-scroll=""> --}}
                  <img src="/assets/img/northbay/iphone.png" alt="" class="img img-responsive iphone-right-image" data-scroll="">
              </div>
              <div class="col-sm-6">
                  <p class="iphone-left-text">
                      With an extensive collection of trendy swimwear and beachwear, North Bay Bikini is one of the leading companies in their realm. 
                  </p>
              </div>
          </div>
      </div>
      <div class="whitebar"></div>

  </section>

  <section id="girl-standing-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                  <p class="girl-side-text">
                      Our dynamic team developed a vibrant and
                      robust plan to engage their clients on different social media sites.
                  </p>
              </div>
              <div class="col-sm-6">
                  {{-- <img src="http://placehold.it/584x914" class="img img-responsive girl-single-image" data-scroll=""> --}}
                  <img src="/assets/img/northbay/single-girl.png" class="img img-responsive girl-single-image" data-scroll="">
              </div>
          </div>
      </div>
  </section>

  <section id="second-iphone-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-7">
                  <img src="/assets/img/northbay/iphone2.png" class="img img-responsive second-iphone-image">
                  {{-- <img src="http://placehold.it/886x501" class="img img-responsive second-iphone-image"> --}}
              </div>
              <div class="col-sm-5">
                  <p class="with-over-text">
                      With over 100 posts in
just one month, the brand’s popularity skyrocketed and elevated the sales.

                  </p>
              </div>
          </div>
      </div>
  </section>

  <section id="social-media-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-4 text-center">
                  {{-- <img src="http://placehold.it/400" class="img  img-responsive left-image"> --}}
                  <img src="/assets/img/northbay/left-image.png" class="img  img-responsive left-image">
              </div>
              <div class="col-sm-4">
                  {{-- <img src="http://placehold.it/522x915" class="img img-responsive middle-phone" alt=""> --}}
                  <img src="/assets/img/northbay/middlePhone.png" class="img img-responsive middle-phone" alt="">
              </div>
              <div class="col-sm-4 text-center">
                  {{-- <img src="http://placehold.it/400" class="img  img-responsive right-image"> --}}
                  <img src="/assets/img/northbay/right-image.png" class="img  img-responsive right-image">
              </div>
          </div>
      </div>
  
  </section>
  <section class="white-frame-footer"></section> 

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