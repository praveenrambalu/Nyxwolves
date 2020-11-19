<!DOCTYPE html>
@section('page','Wolf Pack - ')

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
            
                --footer-1-bg-color: #111111;
                --footer-2-bg-color: #040402;
            }
            #contact{
                background:#fff;
            }

            .noUi-handle.noUi-handle-lower, .noUi-handle.noUi-handle-upper  {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    box-shadow: none;
}
.noUi-horizontal {
    height: 10px;
}
.noUi-handle::before, .noUi-handle::after {
    display:none;
}

.noUi-connect{

background-image: -webkit-linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
    background-image: linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
    background-size: 200% auto;
    -webkit-animation: effect 1s linear infinite;
    animation: effect 1s linear infinite;
    color: var(--primary-b-color);

}

.noUi-tooltip {
    display: none;
}
.noUi-active .noUi-tooltip {
    display: block;
}
#lower-value {
    float: left;
    color: #000;
}
#upper-value {
    float: right;
    color: #000;
}

input[type="checkbox"] + label {
color:#000;
}
input[type="checkbox"] + label::before {
    border: 1px solid #0443b7;
}
.pt-1.pb-3.text-white {
    color: #000 !important;
}




#banner {
    position: relative;
    height:300px;
    width:100%;
    overflow: hidden;
}
#videobcg {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    height:auto;
    width:auto;
    z-index: -100;
}

.text-center.videobanner-text {
    color: #fff;
}



        </style>
        
        
    </head>

    <body>
        <!-- Header -->
       @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/services.jpg)">
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">All your digital needs with one team

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="video" class="highlights right">
            <div class="container">
                <div class="row">
                    <div class="gallery col-12 col-md-6">
                        <a data-poster="/assets/images/wolf-pack.png" href="https://www.youtube.com/watch?v=2dz90LJOVz0">
                            {{-- <i class="play-video icon-control-play"></i> --}}
                            {{-- <div class="mask-radius"></div> --}}
                            <img src="/assets/images/wolf-pack.png" class="image-fit">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Wolf Pack</h2>
                                <p>To achieve your goals, our agile, cohesive, and a dedicated pack of designers and developers blend with your team as your own. We help you get quick access to cross-platform digital specialists to integrate and develop state-of-the-art solutions. Our coherent team that forms TaaS (Team as a Service) provides highly-skilled, top-quality professionals who will create a difference in your workforce right from their immersion.</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>

        <div class="before"></div>
        <section id="banner">
            <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
                <source src="/assets/bannervideo.mp4" type="video/mp4">
                    <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.</video>
                    <h2 class="text-center videobanner-text">Revolutionize your business process</h2>
        </section>
        <div class="after"></div>
        
       <!-- Features -->
       <section id="intro" class="offers featured right">
        <div class="container-fluid">
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover">
                        <i class="icon icon-user-follow"></i>
                        <h4>Your Team</h4>
                        <p>Our team acts as an extension of your own. We designate teams to accommodate your preferences. </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover">
                        <i class="icon icon-note"></i>
                        <h4>Realistic planning</h4>
                        <p>Our exceptional team weaves a tactical and foolproof plan to help you achieve your goals. </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover">
                        <i class="icon icon-chart"></i>
                        <h4>Growth accelerator</h4>
                        <p>Our elite team of designers and developers work at an accelerating rate and ensures rapid scalability in your domain.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover">
                        <i class="icon icon-lock"></i>
                        <h4>Impromptu commitment</h4>
                        <p>Our sole purpose is to meet your target. We embark even on short-term commitments, be it a week or a month.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="banner" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/digital-platforms.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;padding: 60px 0; color:#fff !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 align-self-center">
                    <h3 class="text-white">Ready to Automate Your Business?</h3>
                    <p>Digital excellence delivered to you seamlessly.</p>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <a href="/contact" class="btn m-auto mt-3 primary-button">Contact Now</i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About [video] -->
  


        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
        @include('inc.scripts')
        @include('inc.contact-form-scripts')


    </body>
</html>