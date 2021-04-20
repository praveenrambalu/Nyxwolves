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
            <link rel="stylesheet" href="/assets/css/paperdate_style.css">
</head>
<body>
    @include('inc.header_dark')

    <section id="paper_date_banner">
        <div class="custom-container">
            <div class="row ">
                <div class="col-sm-5 align-self-end">
                    <img src="/assets/img/paperdate/logo.png" class="img img-responsive paper_date_logo" alt="">
                </div>
                <div class="col-sm-7 align-self-end">
                        <h1>Paper Date Co.</h1>
                        <h3>Online Invitation</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="postcard">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/paperdate/postcard.png" class="img img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/paperdate/deliverables.png" class="img img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="paperdate_projects">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/paperdate/projects.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="clean_elegent">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/paperdate/clean_elegent.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="paperdate_footer">
        <div class="paperdate_footer_blank"></div>
        <div class="paperdate_footer_logo_container">
            <div class="custom-container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img src="/assets/img/paperdate/logo.png" class="img img-responsive paperdate_footer_logo" alt="">
                    </div>
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