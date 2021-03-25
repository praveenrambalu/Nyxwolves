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
            <link rel="stylesheet" href="/assets/css/bcc_style.css">
</head>
<body>
    @include('inc.header_dark')
<br>
<br>

<section id="bcc_banner">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/bcc/top_logo.png"  alt="" class="img img-responsive bcc_logo">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6  align-self-center">
                <div class="bcc_banner-content">
                    <h1>Blossom <br> Community <br> Care</h1>
                    <p>Providing Cleaning, Day Centre, Gardening, Housing, Interpreters, Support Work, Plan Management, Support Coordination, Social Activities services.</p>
                </div>
            </div>
            <div class="col-sm-6 align-self-center">
                <img src="/assets/img/bcc/BlossomLogo-01 1.png" class="img img-responsive blossom_logo" alt="">

                <img src="/assets/img/bcc/grandma.png" class="img img-responsive grandma" alt="">
            </div>
        </div>
    </div>
</section>

<section id="bcc_deliverables">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="deliverables_content">
                    <h3>Deliverables</h3>
                    <h1>Responsive Website</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/bcc/desktop.png" class="img img-responsive " alt="">
            </div>
        </div>
       
    </div>
</section>
<section id="bcc_deliverables2">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/bcc/mobile.png" class="img img-responsive " alt="">
            </div>
        </div>
    </div>
</section>


<section id="bcc_responsive">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-6">
                <h1><span>Responsive</span> Website</h1>
                <p>Responsive web design is a style of web development where both the layout and the content responds to the device on which it is being rendered and the size of the screen it is presented on. If you're viewing this article on a desktop browser, for example, try making your browser window smaller. The content column will shrink and the placement of the text will adjust. On our homepage, you'll see the image sizes adjust and the layout shrink from three columns, to two columns, to a singular column of content.</p>
            </div>
        </div>
    </div>
</section>

<section id="bcc_footer">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="/assets/img/bcc/top_logo.png" class="img img-responsive " alt="">
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