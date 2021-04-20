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
            <link rel="stylesheet" href="/assets/css/tie_style.css">
</head>
<body>
    @include('inc.header_dark')
    
    <section id="tie_top_holder">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/tie/logo.png" class="img img-responsive tie_logo" alt="">

                    <div class="tie_banner_content">
                        <h3>TiE is known for </h3>
                        <h1 style="color: #000"><span>mentoring education </span> 
                            & networking to help entrepreneurs 
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/tie/banner_image.png" class="img img-responsive banner_image" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section id="tie_pillers">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-7">
                    <h3 class="title">Pillars of TiE</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="pillars-list ">
                                <li><span><img src="/assets/img/tie/icon1.png" class="img img-responsive pillers_icon" alt=""></span> Mentoring </li>
                                <li><span><img src="/assets/img/tie/icon2.png" class="img img-responsive pillers_icon" alt=""></span> Education </li>
                                <li><span><img src="/assets/img/tie/icon3.png" class="img img-responsive pillers_icon" alt=""></span> Investing </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="pillars-list ">
                                <li><span><img src="/assets/img/tie/icon4.png" class="img img-responsive pillers_icon" alt=""></span> Networking </li>
                                <li><span><img src="/assets/img/tie/icon5.png" class="img img-responsive pillers_icon" alt=""></span> Incubation </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="pillers_image_holder">
                        <img src="/assets/img/tie/pillers_computer.png" class="img img-repsonsive pillers_image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tie_events">
        <div class="custom-container">

            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h3 class="tie_event_title">Events</h3>
                    <span class="tie_event_bar"></span>
                    <img src="/assets/img/tie/events_computer.png" class="img img-responsive tie_event_image" alt="">
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="tie_event_container">
                        <ul class="tie_event_list">
                            <li>Upcoming Events</li>
                            <li>Past Events</li>
                            <li>Present Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tie_responsive_website">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>A Complete
                        Responsive
                        Website</h1>
                </div>
                <div class="col-sm-6">
                    <div class="responsive_website_image_holder">
                        <img src="/assets/img/tie/responsive_website_image.png" class="img img-responsive responsive_website_image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tie_responsive_website_two">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="responsive_website_image2_holder">
                        <img src="/assets/img/tie/responsive_website_image2.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="responsive_website_content">
                        <h1>TiE Regions
                            & Chapters</h1>
                            <p>Join our global TiE Chapters to derive maximum benefit and network with the TiE community of advisors, mentors, investors, angels and coaches.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tie_landing">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                        <h3>And a Clean and Elegant</h3>
                        <h1>LANDING PAGE!</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="tie_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/tie/logo.png" class="img img-responsive " alt="">
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