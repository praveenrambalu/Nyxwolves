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
            <link rel="stylesheet" href="/assets/css/banglore_basket.css">
</head>
<body>
    @include('inc.header_dark')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="custom-container bang-main-content">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <div class="bang-logo-holder">
                    <img src="/assets/img/bangalore_basket/logo.png" alt="Banglore Basket Logo" class="bang-logo wow bounceInUp">
                </div>
                <div class="main-banner-content">
                    <h3>Lorem ipsum dolor sit amet</h3>
                     <h1>Duis  <span>aute irure </span>  dolor ex ea </h1>   
                </div>
            </div>
            <div class="col-sm-6 align-self-center">
                <div class="bang-mockups">
                    <img src="/assets/img/bangalore_basket/banner1.png" alt="Banglore Basket Mockup" class="img img-responsive bang-mockup wow fadeIn">
                </div>
            </div>
        </div>
    </div>

    <section id="bang-deliverables">
        <div class="custom-container bang-deliverables">
            <div class="row">

            <div class="col-sm-6 align-self-center"></div>
            <div class="col-sm-6 align-self-center ">
                <div class="bang-deliverables-content wow slideInRight">
                    <h1 class="bang-deliverables-title">Deliverables</h1>
                    <ul class="bang-deliverables-list">
                        <li>Logo</li>
                        <li>Mobile App <br>
                            (Android and iOS)</li>
                    </ul>
                </div>
            </div>

            </div>

        </div>
    </section>


    <section id="clean-section">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="clean-title">Clean and Elegant</h3>
                    <h1 class="clean-title">Design</h1>
                </div>
            </div>
        </div>
        <div class="custom-container">
            <div class="row">
                <div class="design-list-container wow slideInLeft">
                    <img src="/assets/img/bangalore_basket/design1.png" alt="Design 1">
                    <img src="/assets/img/bangalore_basket/design2.png" alt="Design 2">
                    <img src="/assets/img/bangalore_basket/design3.png" alt="Design 2">
                </div>
            </div>
        </div>
    </section>

    <section id="bang-green">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 >Lorem Ipsum</h1>
                </div>
                <div class="col-sm-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt  ut labore et dolore magna </p>
                </div>
            </div>
        </div>
    </section>

    <section id="bang-orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/bangalore_basket/mockup2.png" alt="Banglore Basket Mockup" class="img img-responsive wow pulse infinite">
                </div>
                <div class="col-sm-12 text-center">
                    <p>Lorem ipsum dolor sit amet, </p>
                </div>
            </div>
        </div>
    </section>

    <section id="bang-section1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Lorem Ipsum</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt  ut labore et dolore magna </p>
                </div>
            </div>
        </div>
    </section>

    <section id="bang-section2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bangalore_basket/section2mockup.png"  alt="Banglore Basket Mockup" class="img img-responsive wow headShake infinite">
                </div>
            </div>
        </div>
    </section>

    <section id="bang-order-detail">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <div class="bang-order-content-container">
                        <h1>Lorem ipsum
                            dolor sit amet</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/bangalore_basket/orders-section-mockup.png" alt="Bangalore_order image" class="img img-responsive bang-order-image wow fadeInUp">
                </div>
            </div>
        </div>
    </section>

    <section id="bang-footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bangalore_basket/logo.png" alt="Banglore Basket Logo" class="bang-footer-logo wow fadeInDown">
                </div>
            </div>
        </div>
    </section>

  



@include('inc.footer')
@include('inc.search-menu')
@include('inc.scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script>
    new WOW().init();
</script>
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