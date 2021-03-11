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
    color: #fff !important;
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
            <link rel="stylesheet" href="/assets/css/it_school.css">
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

   
    <div id="it_school_banner">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/itschool/logo.png" class="img img-responsive it_school_logo" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <span class="banner-bar gray"></span>
                    <h1 class="banner_text"><span>THE
                        DIGITAL 
                        SCHOOL: 
                        </span>LEARNING DIFFERENTLY IS POSSIBLE</h1>

                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/itschool/bannerimag.png" class="img img-responsive banner_image" alt="">
                    <span class="banner-bar red"></span>
                    
                </div>
            </div>


        </div>


    </div>

    <div id="it_school_deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="deliverables-title">
                        <h1>Deliverables</h1>
                        <span ></span>
                    </div>

                    <div class="deliverables-content">
                        <h3>Logo</h3>
                        <h3>A Complete Responsive Website</h3>

                        <img src="/assets/img/itschool/deliverables.png" class="img img-repsonsive" alt="">

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="divider_section full">
       <div class="custom-container">
           <div class="row">
               <div class="col-sm-12">
                   <h1>Course <br> and Activities</h1>
               </div>
           </div>
       </div>
    </div>
    <div class="courses_activities">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <p>Modeling and 3D printing for children</p>
                    <p>Create your first mobile application from 8 years old</p>
                    <p>Online Python Programming Course</p>
                    <p>Programming course with the Scratch language</p>
                    <p>Software Training</p>
                </div>
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/itschool/courses_activities.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div>
   
    <div class="divider_section half">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-center">
                    <h1>Internships</h1>
                </div>
            </div>
        </div>
     </div>
     <div class="internships">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/itschool/internships.png" class="img img-responsive " alt="">
                </div>
                <div class="col-sm-6 align-self-center">
                    <p>ROBOTICS AND PROGRAMMING</p>
                    <p>CREATION OF MOBILE APPLICATIONS</p>
                    <p>3D MODELING AND PRINTING</p>
                </div>
               
            </div>
        </div>
    </div>

    <div class="forums">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h3>Succeed, teach, learn
                        differently with digital
                        technology</h3>

                    <p>This forum was created to
                        discuss the contribution of
                        digital technology (or other
                        innovative concept) in
                        learning.</p>

                    <p>It is intended to be a place of
                        exchange and sharing on the
                        contribution of these “new
                        methods” and supports.</p>

                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="forum-image-holder">
                        <img src="/assets/img/itschool/forums.png" class="img img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clean-title">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>And a Clean and Elegant</h2>
                    <h1>Design</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="clean_phone">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/itschool/design.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="it_school_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/itschool/footer_logo.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div> 

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