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
            <link rel="stylesheet" href="/assets/css/western-style.css">
</head>
<body>
    @include('inc.header_dark')


    <section class="western-top-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/western/ooty-image.png" class="img img-responsive ooty-image" >
                </div>
                <div class="col-sm-6 black-box">
                    <img src="/assets/img/western/logo.png" class="img img-responsive black-box-logo">
                </div>
            </div>
        </div>
    </section>

    <section id="green-bg">
        <h1 class="western-valley-text">Western Valley Resort – Ooty</h1>
    </section>

    <section id="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p class="about-text">
                        A beautiful resort surrounded by serene nature in the queen of hills, Ooty. The resort is located in a rural and mountainous area, surrounded by tea plantations.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <p class="about-text">
                        A place of divine beauty, which will mesmerize your senses. An enchanting place 7350 ft above sea level that overlooks the Emerald Lake in the most splendid form.
                    </p>
                </div>
                <div class="col-sm-6">
                       <div class="deliverables-content">
                           <h1 class="deliverables-heading">Deliverables</h1>
                            <h3 class="deliverables-sub-content"> Web Application w/ Booking</h3>
                       </div>
                </div>
            </div>
        </div>
    </section>


    <section id="macsection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/western/mac-book.png" class="img img-responsive nature-mac" data-scroll>
                </div>
                <div class="col-sm-6">
                    <h1 class="modern-platform-text">
                        MODERN
                        WEB PLATFORM FOR ONLINE BOOKINGS
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="macbooksection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="websiteboost-text">
                        WEBSITES BOOSTS SALES AND
                        BUILDS A UNIQUE
                        BRAND IMAGE
                    </h1>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/western/mac-book-2.png" class="img img-responsive nature-mac-book" data-scroll>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="western-about-text">
                        A hotel website is a source of information for both guests and a hotel. We provide a wide range of information which builds the image and informs about the hotel: its history, available attractions, distinctive traits, conference opportunities, restaurant offers, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="black-bg-image">
        <div class="container-fluid">
            <div class="row text-center">
                <h1 class="web-application">
                    Web application with booking. 
                </h1>
            </div>
        </div>
    </section>
    <section id="laptop-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/western/laptop.png" class="img img-responsive laptop-image">
                </div>
            </div>
        </div>

        <div class="container-fluid green-bg-footer">

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