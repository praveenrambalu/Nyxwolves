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
            <link rel="stylesheet" href="/assets/css/bodyapp_style.css">
</head>
<body>
    @include('inc.header_dark')


    <section id="bodyapp_top_banner_section">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/bodyapp/top_logo.png" class="img img-responsive top_logo" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 ">
                    <h1 class="pen_banner_content">
                        A Beauty & Wellness <span>
                            Platform</span>
                    </h1>
                </div>
                <div class="col-sm-6 ">
                    <img src="/assets/img/bodyapp/1.png" class="img img-responsive banner_image" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="deliverables_content">

                        <h3>Deliverables</h3>
                        <ul>
                            <li>User Mobile App (Android and iOS)</li>
                            <li>Partner Mobile App (Android and iOS)</li>
                            <li>Landing Page</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <img src="/assets/img/bodyapp/mindfullness.png" class="img img-responsive mindfullness_image " alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_app">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bodyapp_app_content_holder">
                        <span class="bodyapp_app_content_holder"></span>
                        <h1>An App to give the phenomenal
                            care your Body and Soul deserves!</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bodyapp/phone3.png" class="img img-responsive screenshots" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_partner">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partner_black_bg">
                        <h1>Full Partner App Support, with Seamless Intergration</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <img src="/assets/img/bodyapp/groupphone.png" class="img img-responsive partner-phone" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_landing">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="landing_content">

                        <h1>With a Clean Landing Page, 
                            Matching the
                            <span>App Asthetics</span></h1>
                        </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/bodyapp/landing_computer.png" class="img img-responsive landing_computer_image" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="bodyapp_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bodyapp/footerlogo.png" class="img img-responsive " alt="" style="margin-right: 50px;">
                    <div class="row mt-3">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 text-center">

                        <a href="https://apps.apple.com/in/app/bodyapp-affordable-wellness/id1548891118" target="_blank"><img src="/assets/img/bodyapp/app_store.png"  class="img img-responsive" style="height: 60px;"></a>
                        <a href="https://play.google.com/store/apps/details?id=com.bodyapp" target="_blank"><img src="/assets/img/bodyapp/play_store.png" class="img img-responsive" style="height: 60px;"></a>
                        </div>
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