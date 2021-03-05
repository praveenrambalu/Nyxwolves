<!DOCTYPE html>
@section('page','Services - ')

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
      @include('inc.contact-form-white-style')  
    
    </head>

    <body>
        <!-- Header -->
       @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/services.jpg);  background-size:cover; background-repeat:no-repeat;">
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Anything you need… digitally

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="offers">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Services</h2>
                        <p>You are our first priority. We don’t just serve our clients; we understand your every need and progressively work to give you an edge in the competitive world. </p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/brand-and-identity">
                        <div class="card featured left">
                            <img src="/assets/images/icons/branding-icon-color.png" class="icon-services" alt="">
                            <h4>Branding & Identity</h4>
                            <p>Our dynamic team builds your brand that speaks for itself. We strategize and inculcate design and creativity into branding that mirrors your business goals, ideals, and principles. </p>
                           <i class="btn-icon icon-arrow-right-circle"></i>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/ai-and-digital-platforms">  <div class="card ">
                            <img src="/assets/images/icons/ai-icon.png" class="icon-services" alt="">

                            <h4>AI & Digital Platforms</h4>
                            <p>With Artificial Intelligence, we help you build all forms of incredibly-smart software products and give them an exclusive edge. Our innovative solutions place your business on equal footing with the current trends and ensure a powerful tomorrow.</p>
                           <i class="btn-icon icon-arrow-right-circle"></i>
                        </div></a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/digital-transformation"> <div class="card">
                            <img src="/assets/images/icons/web.png" class="icon-services" alt="">

                            <h4>Digital Transformation</h4>
                            <p>Our team uses cutting-edge technology to design and develop visually rich business websites. With simplified yet elegant designs, we guarantee an exclusive website or a web application to enhance your growth. </p>
                            <i class="btn-icon icon-arrow-right-circle"></i>
                        </div>
                    </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/digital-marketing"> <div class="card featured right">
                            <img src="/assets/images/icons/digital.png" class="icon-services" alt="">

                            <h4>Digital Marketing</h4>
                            <p>Our unique and powerful digital marketing strategies to reach potential customers will act as the best catalyst to expand your business. Our wolf pack diligently caters to numerous robust methods that help you grow. </p>
                           <i class="btn-icon icon-arrow-right-circle"></i>
                        </div></a>
                    </div>
                 
                   
                </div>
            </div>
        </section>


        <section class="working-process sp-two">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Process</h2>
                        <p>Our unique 3 step approach is the curated magic potion at delivering quality service.</p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
              
                <div class="working-process-step">
                <div class="row">
                    <!--Process Block-->
                    <div class="process-block col-md-4">
                        <div class="inner-box">
                            <div class="count-box">
                                <div class="count">01</div>
                            </div>
                            <h3>Strategize</h3>
                            <div class="text">Our expert team strategizes your every step to ensure maximum success.</div>
                        </div>
                    </div>
                    <!--Process Block-->
                    <div class="process-block col-md-4">
                        <div class="inner-box float-bob-y">
                            <div class="count-box">
                                <div class="count">02</div>
                            </div>
                            <h3>Design</h3>
                            <div class="text">Our innovative designs will keep up your game in the competitive world.</div>
                        </div>
                    </div>
                    <!--Process Block-->
                    <div class="process-block col-md-4">
                        <div class="inner-box">
                            <div class="count-box">
                                <div class="count">03</div>
                            </div>
                            <h3>Implement</h3>
                            <div class="text">We implement robust strategies to give you an edge in the market. </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        {{-- <section id="partner" class="logos">
            <div class="container">
                <div class="swiper-container slider-min">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-1.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-2.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-3.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-4.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-5.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-6.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-7.png" class="image-fit w-85">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/assets/images/logo-8.png" class="image-fit w-85">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

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


        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
        @include('inc.scripts')
        @include('inc.contact-form-scripts')
        
    
    </body>
</html>