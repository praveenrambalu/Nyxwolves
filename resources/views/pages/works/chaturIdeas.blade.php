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
     background: #fff;
 }
        </style>
            <link rel="stylesheet" href="/assets/css/chatur_ideas.css">
</head>
<body>
    @include('inc.header_dark')

    
    <section id="chatur_logo_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center"></div>
                <div class="col-sm-6 align-self-center ">
                    <img src="/assets/img/chatur-ideas/logo.png" class="img img-responsive chatur-logo" alt="Chatur Logo">
                </div>
            </div>
        </div>
    </section>
    <section class="chatur_ideas">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/chatur-ideas/phone-icon.png" class="img img-responsive chatur-top-phone" alt="">
                </div>
                <div class="col-sm-6">
                    <h1 class="chatur-title" style="color:#fff">Chatur <br> Ideas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Chatur Ideas is the inception of first ever dynamic, multifarious online platform, which will engage, counsel, and interconnect the entrepreneurial breed of India to investors, financers, and mentors in a controlled investment friendly </p>
                </div>
            </div>
        </div>
    </section>

    <section class="chatur-deliverables">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 col-md-12 col-lg-3"></div>
                <div class=" col-sm-12 col-md-12 col-lg-6">
                    <h3 class="chatur-deliverables-title">Deliverables</h3>

                    <ul class="chatur-deliverables-list">
                        <li>Social Media Marketing Designs</li>
                        <li>Event Promotion Posters</li>
                        <li>Advertising Flyers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container chatur-image-section-holder">
        <div class="row">
            <div class="col-sm-7 align-self-center">
                <img src="/assets/img/chatur-ideas/section1.png" class="img img-responsive chatur-section-image" alt="">
            </div>
            <div class="col-sm-5 align-self-center">
                <img src="/assets/img/chatur-ideas/section1l.png" class="img img-responsive chatur-section-image" alt="">
            </div>
        </div>
    </div>

    <div class="container chatur-image-section-holder">
        <div class="row">
            <div class="col-sm-5 align-self-center">
                <img src="/assets/img/chatur-ideas/section2.png" class="img img-responsive chatur-section-image" alt="">
            </div>
            <div class="col-sm-7 align-self-center">
                <img src="/assets/img/chatur-ideas/section2l.png" class="img img-responsive chatur-section-image" alt="">
            </div>
        </div>
    </div>


    <div class="container chatur-image-section-holder">
        <div class="row">
            <div class="col-sm-7 align-self-center">
                <img src="/assets/img/chatur-ideas/section3.png" class="img img-responsive chatur-section-image" alt="">
            </div>
            <div class="col-sm-5 align-self-center">
                <img src="/assets/img/chatur-ideas/section3l.png" class="img img-responsive chatur-section-image" alt="">
            </div>
        </div>
    </div>
    <div class="container chatur-image-section-holder">
        <div class="row">
            <div class="col-sm-12 align-self-center text-center">
                <img src="/assets/img/chatur-ideas/section4.png" class="img img-responsive chatur-section-image" alt="">
            </div>
        </div>
    </div>
    <div class="container chatur-image-section-holder">
        <div class="row">
            <div class="col-sm-12 align-self-center text-center">
                <img src="/assets/img/chatur-ideas/logo.png" class="img img-responsive chatur-section-image logo" alt="">
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