<!DOCTYPE html>

<html lang="en">

<head>
    @include('inc.head')

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/theme-classic.css">

    <!-- ==============================================
        Section Configuration
        =============================================== -->
    <style>
        :root {

            --section-1-bg-color: #111111;
            --section-2-bg-color: #111111;
            --section-3-bg-color: #eeeeee;
            --section-4-bg-color: #f5f5f5;


            --footer-1-bg-color: #111111;
            --footer-2-bg-color: #040402;
        }
        .bg_gray{
            background-color: var(--section-3-bg-color) !important;
            }
        .bg_white{
            background-color: #fff !important;
            }

    </style>


</head>

<body>

    <!-- Header -->
    @include('inc.header')

    <!-- Banner -->
    <section id="slider" class="p-0 featured odd"
        style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/services.jpg)">
        <div class="swiper-container slider-disabled slider-h-75">
            <div class="swiper-wrapper">

                <!-- Item 1 -->
                <div class="swiper-slide slide-center">
                    <!-- 
                                Custom Image
                                <img src="/assets/images/bg-1.jpg" class="image-fit banner">
                            -->
                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Lorem ipsum
                                dolor sit amet.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About [image] -->
    <section id="intro" class="highlights left">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured alt">Your Team</h2>
                            <p>Our team acts as an extension of your own. We designate teams to accommodate your preferences. </p>
                        </div>
                    </div>
                </div>
                <div class="gallery col-12 col-md-6">
                    <a>
                        <img src="/assets/images/about-us.jpg" class="image-fit">
                    </a>
                </div>
            </div>

        </div>
        <div class="rectangle-shape right shape1"><img src="/assets/images/shape1.png" alt="image"></div>

    </section>





    <!-- About [video] -->
    <section id="" class="highlights bg_white right">
        <div class="container">
            <div class="row">
                <div class="gallery col-12 col-md-6">
                    <a>
                        <img src="/assets/images/about-us.jpg" class="image-fit">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured alt">Realistic planning</h2>
                            <p>Our exceptional team weaves a tactical and foolproof plan to help you achieve your goals. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rectangle-shape left shape2"><img src="/assets/images/shape1.png" alt="image"></div>

    </section>

  





    <section id="" class="bg_gray left">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured alt">Growth accelerator</h2>
                            <p>Our elite team of designers and developers work at an accelerating rate and ensures rapid scalability in your domain.</p>
                        </div>
                    </div>
                </div>

                <div class="gallery col-12 col-md-6">
                    <a>
                        <img src="/assets/images/why-choose-us.jpg" class="image-fit">
                    </a>
                </div>


            </div>
        </div>
        <div class="rectangle-shape right shape3"><img src="/assets/images/shape1.png" alt="image"></div>

    </section>


    <section id="" class="highlights bg_white right ">
        <div class="container">
            <div class="row">
                <div class="gallery col-12 col-md-6">
                    <a>
                        <img src="/assets/images/about-us.jpg" class="image-fit">
                    </a>
                </div>
                <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured alt">Impromptu commitment</h2>
                            <p>Our sole purpose is to meet your target. We embark even on short-term commitments, be it a week or a month.</p>
                        </div>
                    </div>
                </div>
              
            </div>

        </div>
        <div class="rectangle-shape right shape1"><img src="/assets/images/shape1.png" alt="image"></div>

    </section>



    <!-- About [video] -->
    <section id="" class="highlights bg_gray left">
        <div class="container">
            <div class="row">
               
                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured alt">Wolf Pack</h2>
                            <p>To achieve your goals, our agile, cohesive, and a dedicated pack of designers and
                                developers blend with your team as your own. We help you get quick access to
                                cross-platform digital specialists to integrate and develop state-of-the-art solutions.
                                Our coherent team that forms TaaS (Team as a Service) provides highly-skilled,
                                top-quality professionals who will create a difference in your workforce right from
                                their immersion.</p>
                        </div>
                    </div>

                </div>
                <div class="gallery col-12 col-md-6">
                    <a data-poster="/assets/images/intro-video.jpg" href="https://www.youtube.com/watch?v=2dz90LJOVz0">
                        <i class="play-video icon-control-play"></i>
                        <div class="mask-radius"></div>
                        <img src="/assets/images/intro-video.jpg" class="image-fit">
                    </a>
                </div>
            </div>
        </div>
    </section>


    @include('inc.footer')
    @include('inc.search-menu')
    @include('inc.scroll-to-top')
    @include('inc.scripts')

</body>

</html>