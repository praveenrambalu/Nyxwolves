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
            <link rel="stylesheet" href="/assets/css/andyzfc_style.css">
</head>
<body>
    @include('inc.header_dark')

<section id="andyz_banner">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <img src="/assets/img/andyzfc/logo.png" class="img img-responsive top_logo" alt="">
                <p>AndyzFC Sports Franchise is the brainchild of our chairman, following our success in promoting Poker as a sport through Andyz Fish & Chips Recreation Association back in 2014-2015. The accolades for our efforts came from TOI & ET marking AndyzFC as a promising brand for the sport in India after Goa. Gutshot, an exclusive poker magazine covered us as their main story during the time.</p>
            </div>
            <div class="col-sm-6 align-self-center">
                <img src="/assets/img/andyzfc/banner_image.png" class="img img-respnsive banner_image" alt="">
            </div>
        </div>
    </div>
</section>

<section id="andyz_deliverables">
    <div class="custom-container">
        <div class="row">
          
            <div class="col-sm-12 text-center">
                <img src="/assets/img/andyzfc/computer.png" class="img img-responsive computer_image" alt="">
            </div>
        </div>
    </div>
</section>
<section id="andyz_responsive">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/andyzfc/responsive_website.png" class="img img-responsive" alt="">
            </div>
            <div class="col-sm-12">
                <p>Responsive websites detect what device from which a visitor is browsing – laptop, desktop, tablet, or phone and adjusts the page layout accordingly. Responsive design stacks page elements as the screen gets smaller. Images and menus for example are realigned vertically or horizontally to optimize the user’s experience for their particular device.</p>
            </div>

            <div class="col-sm-12 text-center">
                <img src="/assets/img/andyzfc/computer2.png" class="img img-repsonsive computer_image" alt="">
            </div>
        </div>
    </div>
</section>

<section id="andyz_footer">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/andyzfc/footer_logo.png" class="img img-reponsive" alt="">
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