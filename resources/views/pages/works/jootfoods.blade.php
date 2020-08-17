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
            <link rel="stylesheet" href="/assets/css/joot-style.css">
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

    <section class="joot-logo-section">
        <div class="container">
          <div class="d-flex justify-content-center align-items-center">
            <img src="/assets/img/joot/logo.png" class="joot-logo"  alt="Joot-logo" />
            <h1 class="joot-logo-font">
              JOOT  FOODS
            </h1>
          </div>
        </div>
      </section>
      <section id="black-bg">
          {{-- <div class="container-fluid"></div> --}}
      </section>
      <section class="joot-description-section">
        <div class="container-fluid">
          <p class="text-center joot-about-paragraph">
            Natural, wholesome and delicious meals prepared with the finest
            ingredients by experienced chefs Sri Krishna Sweets, founded in 1948
            by Sri. N.K Mahadeca Iyer established itself world-over as brand which
            is synonymous with purity, divine taste and quality. Carrying its
            tradition on through the brand JOOT.
          </p>
          <div class="p-3 pt-5">
            <h1 class="text-center deliverables-heading" >
              DELIVERABLES:
            </h1>
            <p class="text-center deliverables-content">
              Social Media Branding & Packaging
            </p>
          </div>
    
         
        </div>
      </section>
    
      <section id="bite-sized">
        <div class="container-fluid">
          <div class="row ">
            <img src="/assets/img/joot/bitesized.png" class="img img-responsive m-auto" alt="">
          </div>
        </div>
      </section>
    
    
      <section class="joot-mobile-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 joot-phone-text">
              <p>
                One of the greatest benefits of marketing through social media is
                that it helps you cut marketing costs with sacrificing results
              </p>
              <p>
                Engaging with customers through
                <strong> Social Media Creatives</strong> helps you build stronger
                and wider customer relationships
              </p>
            </div>
            <div class="col-sm-6">
              <img src="/assets/img/joot/mobile.png" class="joot-phone-social" data-scroll />
            </div>
          </div>
        </div>
      </section>
    
      <section class="joot-social-section">
          <h1 class="social-media-creatives">SOCIAL MEDIA CREATIVES</h1>
        <div class="container-fluid">
          <div class="row">
          <div class="joot-social-media-container d-flex">
            <div class="inst">
              <img src="/assets/img/joot/instagram-sketched.png" alt="" />
            </div>
            <div class="fb">
              <img src="/assets/img/joot/facebook.png" alt="" />
            </div>
            <div class="twt">
              <img src="/assets/img/joot/twitter.png" alt="" />
            </div>
            <div class="lkd">
              <img src="/assets/img/joot/linkedin.png" alt="" />
            </div>
          </div>
          <div class="joot-phone-image p-5" data-scroll>
            <img src="/assets/img/joot/mobiles.png" class="img img-responsive joot-phone-image-2" />
          </div>
        </div>
    
      </div>
      </section>
    
      <section id="white-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <img src="/assets/img/joot/bag.png" class="bag-image" >
            </div>
            <div class="col-sm-6">
              <p class="bag-side-text">
                When design and packaging work together brands are elevated from a commodity to an expression of a consumers lifestyle.
              </p>
            </div>
          </div>
        </div>
        
      </section>
    <section id="orange-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"></div>
          <div class="col-sm-6">
            <p class="bag-side-text-orange">
              We offer the satisfaction of having your quality products reflect with great <strong>Packaging Designs</strong> as per the needs.
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="joot-packaging-design">
      <div class="container-fluid">
      
      <img src="/assets/img/joot/role.png" class="img img-responsive role-image" alt="" data-scroll />
       
       <div class="row">
         <div class="col-sm-6">
          <h1 class="packaging-design-text">PACKAGING <br />DESIGN</h1>
         </div>
         <div class="col-sm-6">
            <img src="/assets/img/joot/packimage.png" class="packet-image">
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