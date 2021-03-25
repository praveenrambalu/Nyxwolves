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
            <link rel="stylesheet" href="/assets/css/bozmie_style.css">
</head>
<body>
    @include('inc.header_dark')

    <section id="bozmie_top"></section>
    <section id="bozmie_about">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/bozmie/about.png" class="img img-responsive about_image" alt="">
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="about-content">
                        <h1>Bozmie <br> Dating App</h1>
                        <h3>App Design & Development</h3>
                            <p>An App to Find your Match!
                                To meet new people, review profiles and browse the photo gallery, make personal favourites list and connect to an unlimited number of single users to finally find your perfect match!</p>
                    </div>
                </div>
            </div>
            <div class="row bozmie_about_2">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 big_title">
                    <h1>A Elegant and Modern
                        Dating App with a
                        Hassle free User
                        Experience.</h1>
                </div>
                <div class="col-sm-4 small_title">
                    <p>Meeting Differnet people around the globe, sitting on a couch, with a small mobile app in your hand, Now thats powerful. 
                        Our Goal was to make the app look Elegant and yet Pop out the casualness. The Bright colors to represent charming, Pop and passion.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="bozmie_banner1"></section>
    <section id="bozmie_inapp_video">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="content">
                        <h3>In App</h3>
                        <h1>Video & Text Chat</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/bozmie/inapp.png" class="img img-responsive " alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/bozmie/membership.png" class="img img-responsive membership_image" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="member_content">
                        <h1>Membership</h1>
                        <h3>Plan</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bozmie_banner2"></section>
    <section id="bozmie_banner3"></section>
    <section id="bozmie_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/bozmie/logo.png" class="img img-responsive bozmie_footer_logo" alt="">
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