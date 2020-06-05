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
                --section-3-bg-color: #f5f5f5;
                --section-4-bg-color: #eeeeee;
                --section-5-bg-color: #f5f5f5;
    
                --footer-1-bg-color: #111111;
                --footer-2-bg-color: #040402;
            }
    
            .counter.text-center.col-sm-3 .icon {
                margin-bottom: 15px;
                background-image: -webkit-linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
                background-image: linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
            }
    
            .counter-holder {
            box-shadow: 0px 0px 20px #c8c8c8;
            padding: 50px;
            margin-right: 20px;
            height: 280px;
            }
            .bg_gray{
            background-color: var(--section-4-bg-color) !important;
            }
        </style>

</head>

<body>

    <!-- Header -->
   @include('inc.header')


    <!-- Banner -->
    <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/about-us.jpg)">
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

    <!-- Single -->
    <!-- <section id="intro" class="single">
            <div class="container">
                <div class="row">
                    <main class="col-12 col-md-8 p-0">
                        <div class="row intro">
                            <div class="col-12 align-self-center">
                                <h2 class="featured">Pleasant Reading</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum velit tortor, interdum sed cursus eu, sagittis ut nunc. Sed vitae tellus et arcu aliquet faucibus fermentum non lacus.</p>
                                <p>Praesent fringilla quis massa et placerat. Mauris eu dui eget urna pellentesque gravida vitae quis nibh. Ut at augue tortor. Pellentesque quis suscipit magna.</p>
                                <p>
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam tortor, ultrices accumsan mauris eget, pulvinar tincidunt erat. Sed nisi nisi, rutrum sit amet elit.</blockquote>
                                </p>
                                <p>Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris curabitur dictum pharetra.</p>
                                <p>Etiam mollis sem sed bibendum blandit. Aenean quis luctus ligula, vitae suscipit dui. Nunc diam orci, tincidunt eget consectetur sit amet, vulputate.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                <ul>
                            </div>
                        </div>        
                    </main>
                    <aside class="col-12 col-md-4 pl-md-5 p-0 float-right">                    
                        <div class="row">
                            <div class="col-12 align-self-center text-left">
                                <h4>Other Services</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-layers"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-rocket"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-briefcase"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-plane"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-chart"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-drawer"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section> -->

    <!-- About [image] -->
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
                    <a href="/assets/images/about-1.jpg">
                        <img src="/assets/images/about-1.jpg" class="image-fit">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="highlights left">
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
    </section>



    <!-- About [video] -->
    <section id="video" class="highlights right">
        <div class="container">
            <div class="row">
                <div class="gallery col-12 col-md-6">
                    <a data-poster="/assets/images/about-2.jpg" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                        <i class="play-video icon-control-play"></i>
                        <div class="mask-radius"></div>
                        <img src="/assets/images/about-2.jpg" class="image-fit">
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
                    <main class="col-12 col-md-8 p-0">
                        <div class="row intro">
                            <div class="col-12 align-self-center">
                                <h2 class="featured">Why choose us</h2>
                                <p>You are our first priority. We understand your every goal. Our energetic and tech-savvy pack of designers and developers create futuristic solutions to progressively elevate your growth and help you achieve your business goals. Our versatile team has years of expertise in building extraordinary things out of the ordinary. We assure quality in every aspect and guarantee your success. </p>
                                <!-- <p>
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam tortor, ultrices accumsan mauris eget, pulvinar tincidunt erat. Sed nisi nisi, rutrum sit amet elit.</blockquote>
                                </p>
                                <p>Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris curabitur dictum pharetra.</p>
                                <p>Etiam mollis sem sed bibendum blandit. Aenean quis luctus ligula, vitae suscipit dui. Nunc diam orci, tincidunt eget consectetur sit amet, vulputate.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                <ul> -->
                            </div>
                        </div>        
                    </main>
                    <!-- <aside class="col-12 col-md-4 pl-md-5 p-0 float-right">                    
                        <div class="row">
                            <div class="col-12 align-self-center text-left">
                                <h4>Covering Industries</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-layers"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-rocket"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-briefcase"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-plane"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-chart"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-center align-items-center">
                                        <a href="service-single-1.html"><i class="icon icon-drawer"></i></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside> -->
                </div>
            </div>
      </section>


    <!-- Services -->
  
    <section id="testimonials" class="carousel">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Customer Testimonials</h2>
                    <p class="text-max-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet.</p>
                </div>
            </div>
            <div class="swiper-container slider-mid items">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-1.jpg" alt="Adams Baker" class="person">
                                <h4>Adams Baker</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-2.jpg" alt="Mary Evans" class="person">
                                <h4>Mary Evans</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-3.jpg" alt="Sarah Lopez" class="person">
                                <h4>Sarah Lopez</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-4.jpg" alt="Joseph Hills" class="person">
                                <h4>Joseph Hills</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-5.jpg" alt="Karen Usman" class="person">
                                <h4>Karen Usman</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


      <section id="services" class="offers bg_gray">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Our Services</h2>
                    <p class="text-max-800">You are our first priority. We don’t just serve our clients; we understand your every need and progressively work to give you an edge in the competitive world. </p>
                    <br>
                    <br>
                    <a href="services" class="btn m-auto mt-3 primary-button"><i class="icon-grid"></i>VIEW ALL SERVICES</i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="offers">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <h2 class="featured">Office Locations</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-12 col-md-3 align-self-end">
                    <a href="contact" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>CONTACT US</i></a>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card featured left">
                        <i class="icon icon-location-pin"></i>
                        <h4>Bangalore</h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                        <a href="tel:+91 6381751802"><i class="btn-icon icon-arrow-right-circle"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card">
                        <i class="icon icon-location-pin"></i>
                        <h4>Chromepet </h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                        <a href="mailto:admin@nyxwolves.com"><i class="btn-icon icon-arrow-right-circle"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card featured right">
                        <i class="icon icon-location-pin"></i>
                        <h4> Chennai, Tamil Nadu.</h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                        <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



      <!-- Team -->
      <section id="team" class="carousel bg_gray">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Team of Experts</h2>
                    <p class="text-max-800">Our team is the soul of the company. We house the finest team of designers and developers to deliver the best service to our clients. </p>
                </div>
            </div>
            <div class="swiper-container slider-mid items">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-1.jpg" alt="Adams Baker" class="person">
                                <h4>Adams Baker</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-2.jpg" alt="Mary Evans" class="person">
                                <h4>Mary Evans</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-3.jpg" alt="Sarah Lopez" class="person">
                                <h4>Sarah Lopez</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-4.jpg" alt="Joseph Hills" class="person">
                                <h4>Joseph Hills</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="/assets/images/team-5.jpg" alt="Karen Usman" class="person">
                                <h4>Karen Usman</h4>
                                <p>Sed mauris nulla tempor eu est vel curabitur.</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    

    <!-- Footer -->
  
    @include('inc.footer')

    @include('inc.search-menu')
    @include('inc.scroll-to-top')


    <!-- ==============================================
        Vendor Scripts
        =============================================== -->
   @include('inc.scripts')
   <script src="/assets/js/counter.js"></script>
</body>

</html>