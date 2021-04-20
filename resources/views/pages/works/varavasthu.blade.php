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
            <link rel="stylesheet" href="/assets/css/varavasthu-style.css">
</head>
<body>
    @include('inc.header_dark')


    <section id="logointro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="intro-text-name">
                        Vara 
                        Vasthu
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="logo-box">
                        <img src="/assets/img/varavasthu/logo.png" alt="" class="img img-responsive varavasthu-logo">
                    </div>

                    <p class="varavasthu-about-text">
                        Vara Vasthu was established online as a ladies’ handbag brand in India. It was an effort made at simplifying the relationship between a handbag and the wearer.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="about-vara">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/varavasthu/bag.png" class="bag-image">
                </div>
                <div class="col-sm-6">
                    <p class="bag-side-text">
                        Handbags are a world in themselves to a woman. Inside it, lie their precious trappings. An emblem of luxury and class, handbags have emerged to be the most sought after accessory, reflecting the style and personality of the wearer. Vara Vasthu shares a similar set of goals with their customers and brings you a wide range of cotton handbags at affordable prices.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="deliverables">
        <div class="container-fluid">
            <h1 class="deliverables-heading">DELIVERABLES</h1>
            <div class="row">
                <div class="col-sm-6">
                    <div class="deliverable-contents">
                        <h3 class="deliverable-content dark">- Branding Identity</h3>
                        <h3 class="deliverable-content gold">- Ecommerce Website</h3>
                        <h3 class="deliverable-content dark">- Ecommerce Mobile Platform</h3>
                        <h3 class="deliverable-content gold">- Product Updates and Support</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/varavasthu/book.png" class="img img-responsive book-image" alt="" data-scroll>
                </div>
            </div>
           
        </div>
    </section>
    <section id="black-box-bg">
        <div class="container-fluid">
            <div class="laptop-row row">
                <img src="/assets/img/varavasthu/laptop.png" class="img img-responsive laptop-image"  data-scroll alt="">
            </div>
        </div>
    </section>
    <section >
        <div class="container-fluid" id="brown-bg"></div>
        <div class="container-fluid" id="mobile-section">
            <div class="row">
                <div class="col-sm-7">
                    <p class="phone-left-text">
                        Vara Vasthu handbags are crafted in cotton and designed for use on a day to day basis.
                        <br>
                        <br>
                        An idea provoked by the sense of a lady’s needs, Vara Vasthu was finally given its wings with the assistance of NYX Wolves, the developer of the website.
                    </p>
                </div>
                <div class="col-sm-5">
                    <img src="/assets/img/varavasthu/phone-image.png" class="img img-responsive phone-image" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="letterhead-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/assets/img/varavasthu/letter-head.png" class="img img-responsive letter-head-image" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="made-text">
                        <h1 class="personal-touch-text">
                            <span class="golden">Made</span> with A Personal Touch
                        </h1>
                        <div class="golden-line"></div>
                        <h3 class="vara-website">www.varavasthu.com</h3>
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