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
            <link rel="stylesheet" href="/assets/css/hff-style.css">
</head>
<body>
    @include('inc.header_dark')



<div class="container-fluid first-section">
    <div class="row text-center">
        <div class="col-sm-12 text-center">
            <img src="/assets/img/hff/logo.png" alt="" class="hff-logo img img-responsive">
        </div>
    </div>
</div>
<section id="intro-text">
    <div class="container-fluid orange-bg">
        <div class="row">
            <div class="col-sm-4">
                <img src="/assets/img/hff/leaf.png" alt="" class="leaf-image" data-scroll>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <p class="about-text">
                    Homely Fresh Foods is a new venture of Arusuvai Arasu group of companies, with experience in the industry for 60+ years. HFF deliver homemade food to your door step across Chennai.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="deliverables">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 deliverables-section-text">
                <h1 class="heading-deliverables">Deliverables : </h1>
                <p class="deliverables-text">
                    Logo <br>
                    Social Media <br>
                    Web Application <br>
                </p>
            </div>
            <div class="col-sm-7">
                <img src="/assets/img/hff/phone.png" class="img img-responsive phone-img" >
            </div>

        </div>
    </div>
   
</section>

<section id="webapp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="webapp-heading"> WEB APPLICATION</h1>
                <p class="webapp-text">
                    Web applications can help target numerous clientele and customers at a time. We help to make it easier to maintain a proper communication channel between potential customers and the business organization.
                </p>
            </div>
            <div class="col-sm-6"></div>
            <img src="/assets/img/hff/mac.png"  class="macbook" alt="">
        </div>
    </div>
</section>
<section id="socialmedia">
    <div class="container-fluid vector-bg">
        <div class="row">
            <h1 class="socialmedia">Social Media</h1>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="/assets/img/hff/social1.png" class="img img-responsive socialmedia-phone">
            </div>
            <div class="col-sm-4">
                <img src="/assets/img/hff/social2.png" class="img img-responsive socialmedia-phone">
            </div>
            <div class="col-sm-4">
                <img src="/assets/img/hff/social3.png" class="img img-responsive socialmedia-phone">
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