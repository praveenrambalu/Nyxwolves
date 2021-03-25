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
            <link rel="stylesheet" href="/assets/css/tbg_style.css">
</head>
<body>
    @include('inc.header_dark')
<br>
<br>


<section id="tbg_banner">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-6 ">
                <img src="/assets/img/tbg/logo.png" class="img img-responsive tbg_logo" alt="">
                <h1 class="tbg_banner_text">The Bhargav Group</h1>
                <h3>began with the concept of delivering</h3>
                <h2>'Living Buildings'</h2>
            </div>
            <div class="col-sm-6 ">
                <img src="/assets/img/tbg/banner_image.png" class="img img-responsive " alt="">
            </div>
        </div>
    </div>
</section>

<section id="tbg_deliverables">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="deliverables_title_holder">
                    <h3>Deliverables</h3>
                    <h1>Responsive <br> Website</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/tbg/deliverables.png" class="img img-responsive" alt="">
            </div>
        </div>
    </div>
</section>

<section id="tbg_deliverables2">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                

                <img src="/assets/img/tbg/3desktops.png" class="img img-responsive" alt="">
                    <div class="deliverables-holder">
                        <div class="deliverables-content">
                            <h3>ARCHITECTURE <span></span> MASTER PLAN <span></span> HEALTHCARE <span></span> INTERIORS</h3>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section id="tbg_what_we_do">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="tbg_title"><span>WHAT </span> WE DO</h3>


                <p>We create web pages that are easily navigable on screen of any size and device. While designing such sites, some key points are kept in mind, namely clear readability with fluid navigation and easy user flow. The sites are designed in a way that no matter which device they are accessed from, the call to action is simple and apparent to the users.</p>
            </div>
        </div>
    </div>
</section>

<section id="tbg_laptop">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 text-right">
                <img src="/assets/img/tbg/what_we_do.png" class="img img-responsive " alt="">
            </div>
        </div>
    </div>
</section>

<section id="tbg_footer">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/tbg/Footer.png" class="img img-responsive" alt="">
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