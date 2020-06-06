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
            
                --footer-1-bg-color: #111111;
                --footer-2-bg-color: #040402;
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Lorem ipsum dolor sit amet.
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="intro" class="highlights left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">About Us</h2>
                                <p>Our passion-driven team turns your every idea into reality. Brewing beauty out of chaos is our forte. We enable our clients to meet their goals and exceed their own expectations. We help you build and scale business on digital platforms in today’s digitally-driven world.</p>
                                    <p>We work with our customers to build their business right from scratch to where they are today. Your success is our mantra. With a broad expertise of enabling successful enterprises and startups in the domain of Food, Healthcare, Education & Training, Media & Entertainment, we are committed to create a global digital impact for your brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="gallery col-12 col-md-6">
                        <a >
                            <img src="/assets/images/about-us.jpg" class="image-fit">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
    
        {{-- <section class="highlights left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <div class="wrapper row">
                            <div class="counter  text-center col-sm-3">
                                <div class="counter-holder">
                                    <i class="icon icon-fire"></i>
                                    <h2 class="timer count-title count-number" data-to="1000" data-speed="1500">1000</h2>
                                    <p class="count-text ">Designs</p>
                                </div>
                            </div>
    
                            <div class="counter  text-center col-sm-3">
                                <div class="counter-holder">
    
                                    <i class="icon icon-folder-alt"></i>
                                    <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                                    <p class="count-text ">Projects</p>
                                </div>
                            </div>
    
                            <div class="counter  text-center col-sm-3">
    
                                <div class="counter-holder">
    
                                    <i class="icon icon-emotsmile"></i>
                                    <h2 class="timer count-title count-number" data-to="200" data-speed="1500"></h2>
                                    <p class="count-text ">Happy Customers</p>
                                </div>
                            </div>
    
                            <div class="counter  text-center col-sm-3">
                                <div class="counter-holder">
    
                                    <i class="icon icon-globe"></i>
                                    <h2 class="timer count-title count-number" data-to="25" data-speed="1500"></h2>
                                    <p class="count-text ">Countriese</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section> --}}
    
    
    
        <!-- About [video] -->
        <section id="video" class="highlights right">
            <div class="container">
                <div class="row">
                    <div class="gallery col-12 col-md-6">
                        <a data-poster="/assets/images/intro-video.jpg" href="https://www.youtube.com/watch?v=2dz90LJOVz0">
                            <i class="play-video icon-control-play"></i>
                            <div class="mask-radius"></div>
                            <img src="/assets/images/intro-video.jpg" class="image-fit">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Who we Are ?</h2>
                                <p>We are a bootstrapped team embedded with strong values in assisting our clients to scale up in their fields. Quality and innovation bleeds in every work that we pursue. Since the inception, we have been excelling in developing innovative and creative solutions for our clients. Our growth as a team has aided numerous companies to succeed like never before.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    
      
    
    
    
         <section id="intro" class="bg_gray">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                            <div class="row intro">
                                <div class="col-12 p-0">
                                    <h2 class="featured alt">Why Choose us?</h2>
                                    <p>You are our first priority. We understand your every goal. Our energetic and tech-savvy pack of designers and developers create futuristic solutions to progressively elevate your growth and help you achieve your business goals. Our versatile team has years of expertise in building extraordinary things out of the ordinary. We assure quality in every aspect and guarantee your success. </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery col-12 col-md-6">
                            <a >
                                <img src="/assets/images/why-choose-us.jpg" class="image-fit">
                            </a>
                        </div>
    
    
                    </div>
                </div>
          </section>

          
          



    <!-- About [video] -->
    <section id="video" class="highlights right">
        <div class="container">
            <div class="row">
                <div class="gallery col-12 col-md-6">
                    <a data-poster="/assets/images/intro-video.jpg" href="https://www.youtube.com/watch?v=2dz90LJOVz0">
                        <i class="play-video icon-control-play"></i>
                        <div class="mask-radius"></div>
                        <img src="/assets/images/intro-video.jpg" class="image-fit">
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


        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
        @include('inc.scripts')

    </body>
</html>