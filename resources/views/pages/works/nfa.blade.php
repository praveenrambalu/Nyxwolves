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
            <link rel="stylesheet" href="/assets/css/nfa_style.css">
</head>
<body>
    @include('inc.header_dark')
<br>
<br>
    <div id="nfa_banner">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
                    <img src="/assets/img/nfa/logo.png" class="img img-responsive nfa_logo" alt="">
                    <p>
                        Choose a floor
                        type for your home
                        remodeling project
                    </p>
                    <span class="bar"></span>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
                    <img src="/assets/img/nfa/banner_image.png" class="img img-responsive banner_image" alt="">
                </div>

            </div>
        </div>
    </div>

    <div id="nfa_below_banner"></div>
   
    <div id="nfa_deliverables">
        <div class="deliverables_title_holder">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>DELIVERABLES</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="deliverables_content">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="deliverables_content_title_holder">
                            <h3 class="deliverables_content_title">
                                Logo
                            </h3>
                            <span class="deliverables_content_bar"></span>
                        </div>

                        <img src="/assets/img/nfa/logo.png" class="img img-responsive logo" alt="">

                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="deliverables_content_title_holder">
                            <h3 class="deliverables_content_title">
                                Responsive Website
                            </h3>
                            <span class="deliverables_content_bar"></span>
                        </div>

                        <img src="/assets/img/nfa/deliverables-img.png" class="img img-responsive " alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="nfa_services">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center services_title_holder">
                    <h1 class="services-title"> Services </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/nfa/services.png" class="img img-responsive service_image" alt="">
                </div>
            </div>
        </div>

    </div>

    <div id="nfa_advice">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="advice_title_holder">

                        <h1 class="advice_title">ADVICE</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-7">
                    <img src="/assets/img/nfa/advice_image.png" class="img img-responsive  " alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-3"></div>
                <div class="col-lg-4 col-sm-12 col-md-9">
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiulgod tempor incididuntlabore et dolore magna </p> --}}
                </div>
                <div class="col-lg-5 col-sm-12 col-md-12">
                </div>
            </div>
        </div>
    </div>

    <div id="nfa_testimonials">
        <div class="testimonial_title_holder">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1>Testimonials</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial_main_holder">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img src="/assets/img/nfa/testimonials.png" class="img img-responsive " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="nfa_commercials">
        <div class="title_holder">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>COMMERCIALS</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-5 align-self-center">
                    {{-- <p>Lorem ipsum dolor
                        sit amet, consectetur
                        adipiscing elit, 
                        sed do eiusmod tempor incididuntlabore et
                        dolore magna </p> --}}
                </div>
                <div class="col-sm-7 align-self-center">
                    <img src="/assets/img/nfa/clean.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="nfa_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/nfa/logo.png" class="img img-responsive" alt="">
                </div>
            </div>
        </div>

        <div class="graybar"></div>
        <div class="greenbar"></div>
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