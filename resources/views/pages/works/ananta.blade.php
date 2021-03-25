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
    @include('inc.header_dark')
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