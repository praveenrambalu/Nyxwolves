<!DOCTYPE html>

<html lang="en">

<head>

    @include('inc.head')

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/theme-dark.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.css" />

    <!-- ==============================================
        Section Configuration
        =============================================== -->
    <style>
        :root {
            --section-1-bg-color: #040402;
            --section-2-bg-color: #040402;
            --section-3-bg-color: #191919;
            --section-4-bg-color: #111111;
            --section-5-bg-color: #040402;
            --section-6-bg-color: #040402;
            --section-7-bg-color: #040402;
            --section-8-bg-color: #191919;
            --section-9-bg-color: #040402;
            --section-10-bg-color: #020202;
            --section-11-bg-color: #040402;

            --footer-1-bg-color: #111111;
            --footer-2-bg-color: #040402;
        }

        #slider {
            background: #040402;
        }



        .noUi-handle.noUi-handle-lower,
        .noUi-handle.noUi-handle-upper {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            box-shadow: none;
        }

        .noUi-horizontal {
            height: 10px;
        }

        .noUi-handle::before,
        .noUi-handle::after {
            display: none;
        }

        .noUi-connect {

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
            color: #fff;
        }

        #upper-value {
            float: right;
            color: #fff;
        }

        #work.showcase .card .image-over,
        #work.showcase .card:hover .image-over::before {
            border-radius: 30px;
        }

        #work.showcase .card .image-over::before {
            background: none;
        }

        #work.showcase .card:not(.no-hover):hover {
            background: none !important;
        }

        #work.showcase .card:hover .image-over::before {
            background: none !important;
        }



        #testimonials .swiper-slide.slide-center.text-center.item .card {
            min-height: 500px;
        }

        @media only screen and (max-width: 600px) {
            .swiper-pagination-bullet.swiper-pagination-bullet {
                display: none;
            }
            #testimonials .swiper-slide.slide-center.text-center.item .card {
                min-height: auto;
            }

        }

        @media only screen and (min-width: 768px) and (max-width: 992px){

            .swiper-pagination-bullet.swiper-pagination-bullet {
                display: none;
            }
            #testimonials .swiper-slide.slide-center.text-center.item .card {
                min-height: auto;
            }
        }

        .row.card.testi-card {
            background: none;
            box-shadow: none;
        }

        .country-flag {
	height: 35px;
	margin-top: -20px;
	/* margin-bottom: 30px; */
	padding-bottom: 13px;
}
    </style>
</head>

<body>
    @include('inc.preloader')


    <div class="fullpage">
        {{-- <canvas id="canvas">Canvas is not supported in your browser</canvas> --}}
        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="/"><img src="/assets/images/logo-dark.png" alt="Nyx Wolves"></a>


                    <!-- Navbar Itens-->
                    <ul class="navbar-nav items ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link effect-motion-hover">Home </a></li>
                        <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link effect-motion-hover">Pages <i class="icon-arrow-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="about-1.html" class="nav-link">About</a>
                        <a href="services-1.html" class="nav-link">Services</a>
                        <a href="service-single-1.html" class="nav-link">Service Single</a>
                        <a href="work-1.html" class="nav-link">Work</a>
                        <a href="pricing-1.html" class="nav-link">Pricing</a>
                        <a href="blog-listing-1.html" class="nav-link">Blog Listing<a>
                        <a href="blog-grid-1.html" class="nav-link">Blog Grid<a>
                        <a href="blog-single-post-1.html" class="nav-link">Single Post</a>
                        <a href="contact-1.html" class="nav-link">Contact</a>
                        <a href="search-1.html" class="nav-link">Search Results</a>
                        <a href="404-1.html" class="nav-link">404 Page</a>
                    </div>
                </li> -->
                        <li class="nav-item">
                            <a href="/about" class="nav-link effect-motion-hover">About</a>
                        </li>
                        {{-- <li class="nav-item">
                    <a href="/services" class="nav-link effect-motion-hover">Services</a>
                </li> --}}
                        <li class="nav-item dropdown">
                            <a href="/services" class="nav-link effect-motion-hover">Services <i
                                    class="icon-arrow-down"></i></a>
                            <div class="dropdown-menu">
                                <a href="/services/brand-and-ui-ux" class="nav-link">Branding & UI-UX</a>
                                <a href="/services/product-development" class="nav-link">Product Development</a>
                                <a href="/services/digital-transformation" class="nav-link">Digital Transformation</a>
                                <a href="/services/digital-process-automation" class="nav-link">Digital Process Automation</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/works" class="nav-link effect-motion-hover">Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="/careers" class="nav-link effect-motion-hover">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a href="/wolf-pack" class="nav-link effect-motion-hover">Wolf Pack</a>
                        </li>

                    </ul>

                    <!-- Navbar Icons-->
                    <!-- <ul class="navbar-nav icons ml-auto m-xl-0">
                <li class="nav-item">
                    <a href="#" class="nav-link effect-motion-hover" data-toggle="modal" data-target="#search">
                        <i class="icon-magnifier"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="#" class="nav-link effect-motion-hover"><i class="icon-social-twitter"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="#" class="nav-link effect-motion-hover"><i class="icon-social-instagram"></i></a>
                </li>
            </ul> -->

                    <!-- Navbar Toggle-->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-grid m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action-->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="/contact" class=" btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT
                                US</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>


        <!-- Banner -->
        <section id="slider" class="p-0">
            <div class="swiper-container slider-full animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="/assets/images/banners/1.png"
                            class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">
                                        Filled with Creativity.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">
                                        All our services have a little tinge of creativity and passion! </p>
                                    <a href="/services" data-aos="zoom-out-up" data-aos-delay="1200"
                                        class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i
                                            class="icon-eye"></i>VIEW SERVICES</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="/assets/images/banners/2.png"
                            class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">
                                        For Rapid Execution.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Our power-packed
                                        team delivers rapid results with high quality.</p>
                                    <a href="/works" data-aos="zoom-out-up" data-aos-delay="1200"
                                        class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i
                                            class="icon-grid"></i>VIEW WORKS</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="/assets/images/banners/3.png"
                            class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">For
                                        Digital Boost.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">We give you the
                                        wittiest and most rewarding digital solution. </p>
                                    <a href="/contact" data-aos="zoom-out-up" data-aos-delay="1200"
                                        class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i
                                            class="icon-cup"></i>CONTACT US </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- About [image] -->
        <section id="intro" class="highlights left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">About Us</h2>
                                <p>Our passion-driven team turns your every idea into reality. Brewing beauty out of
                                    chaos is our forte. We enable our clients to meet their goals and exceed their own
                                    expectations. We help you build and scale business on digital platforms in today’s
                                    digitally-driven world.</p>
                                <p>We work with our customers to build their business right from scratch to where they
                                    are today. Your success is our mantra. With a broad expertise of enabling successful
                                    enterprises and startups in the domain of Food, Healthcare, Education & Training,
                                    Media & Entertainment, we are committed to create a global digital impact for your
                                    brand.</p>
                            </div>
                        </div>
                        <!-- <div class="row items">
                            <div class="col-12 p-0">
                                <div data-aos="fade-right" data-aos-delay="100" class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-grid"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Design</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>  
                                </div>
                                <div data-aos="fade-right" data-aos-delay="200" class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-fire"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Branding</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>  
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="gallery col-12 col-md-6">
                        <a>
                            <img src="/assets/images/2.png" class="image-fit">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About [video] -->
        <!-- <section id="video" class="highlights right">
            <div class="container">
                <div class="row">
                    <div class="gallery col-12 col-md-6">
                        <a data-poster="/assets/images/about-5.jpg" href="https://www.youtube.com/watch?v=2dz90LJOVz0">
                            <i class="play-video icon-control-play"></i>
                            <div class="mask-radius"></div>
                            <img src="/assets/images/about-5.jpg" class="image-fit">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Watch The Video</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div data-aos="fade-left" data-aos-delay="100" class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Technology</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>  
                                </div>
                                <div data-aos="fade-left" data-aos-delay="200" class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>Innovation</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Services -->
        <section id="services" class="offers featured">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Services</h2>
                        <p>You are our first priority. We don’t just serve our clients; we understand your every need
                            and progressively work to give you an edge in the competitive world. </p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="/services" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i
                                class="icon-grid"></i>VIEW ALL</i></a>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/digital-transformation">
                            <div href="/services/digital-transformation" class="card featured left">
                                <!-- <i class="icon icon-tag"></i> -->
                                <img src="/assets/images/services_icons/digital_transformation.gif" class="icon-services" alt="">
                       
                                <h4>Digital Transformation</h4>
                             
                                   <p>Our team uses cutting-edge technology to design and develop visually rich business
                                    websites. With simplified yet elegant designs, we guarantee an exclusive website or
                                    a
                                    web application to enhance your growth. </p>
                                <a href="/services/digital-transformation"><i
                                        class="btn-icon icon-arrow-right-circle"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/product-development">
                            <div class="card ">
                                <img src="/assets/images/services_icons/ai-and-digital-platforms.gif" class="icon-services" alt="">

                                <h4>Product Development</h4>
                                <p>With robust frameworks and tech stack, we help you build all forms of incredibly-smart software products and give them an exclusive edge. Our innovative solutions place your business on equal footing with the current trends and ensure a powerful tomorrow.</p>
                                <a href="/services/product-development"><i
                                        class="btn-icon icon-arrow-right-circle"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/digital-process-automation">
                            <div class="card">
                                         
                                        <img src="/assets/images/services_icons/digital_marketing.gif" class="icon-services" alt="">
                                     <h4>Digital Process Automation</h4>
                                
                                    <p>We find the gaps in business processes across industries and build solutions that automate. We build a digital fortress around your business to make it scalable both horizontally & vertically! </p>
                                <a href="/services/digital-process-automation"><i
                                        class="btn-icon icon-arrow-right-circle"></i></a>
                               
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <a href="/services/brand-and-ui-ux">
                            <div class="card featured right">
                                    <img src="/assets/images/services_icons/branding.gif" class="icon-services" alt="">
                                
                                <h4>Branding & UI/UX</h4>
                            
                                <p>Our dynamic team builds your brand that speaks for itself. We strategize & inculcate design & creativity into products that bring life to technology and connect with the users</p>
                                 <a href="/services/brand-and--ui-ux"><i
                                        class="btn-icon icon-arrow-right-circle"></i></a>    
                                    
                            </div>
                        </a>
                    </div>
                   

                </div>
            </div>
        </section>

        <!-- Work -->
        {{-- <section id="work" class="offers secondary featured">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Work</h2>
                        <p>Our excellent digital platform solutions and persistent efforts have enabled our clients to
                            achieve a great feat in their domain. They have embraced us and we are proud to be a part of
                            their success. </p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="works" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i
                                class="icon-grid"></i>VIEW ALL</i></a>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured left">
                            <h4>Imaginary Art</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="gallery">
                                <a href="/assets/images/work-1.jpg">
                                    <img src="/assets/images/work-1.jpg" alt="Imaginary Art">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item " data-tilt data-tilt-scale="1" data-tilt-max="10">
                        <div class="card">
                            <h4>Creative Wall</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="gallery">
                                <a href="/assets/images/work-2.jpg">
                                    <img src="/assets/images/work-2.jpg" alt="Creative Wall">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured right">
                            <h4>Share Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="gallery">
                                <a href="/assets/images/work-3.jpg">
                                    <img src="/assets/images/work-3.jpg" alt="Share Design">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="work" class="showcase blog-grid">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Works</h2>
                        <p> Our excellent digital platform solutions and persistent efforts have enabled our clients to
                            achieve a great feat in their domain. They have embraced us and we are proud to be a part of
                            their success. </p>
                    </div>
                   
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="/works" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i
                                class="icon-grid"></i>VIEW ALL</i></a>
                    </div>
                </div>
                <div class="row items">
                    <a href="/works/wondryears"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/wondryears.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/wondryears">
                                            
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 
                    <a href="/works/nfa"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/nfa.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/nfa">
                                        
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 
                    <a href="/works/tbg"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/tbg.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/tbg">
                                           
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 
                    <a href="/works/tie-chennai"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/tie_chennai.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/tie-chennai">
                                            
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a>  
                    <a href="/works/ananta"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/ananta.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/ananta">
                                            
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 
                    <a href="/works/andyzfc"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/andyzfc.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/andyzfc">
                                            
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 
                </div>
            </div>
        </section>

    <!-- Testimonials -->



    <section id="testimonials" class="carousel">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Customer Testimonials</h2>
                    <p class="text-max-800">Hear what they have to say about us on different platforms!
                    </p>
                </div>
            </div>
            <div class="swiper-container slider-full  items">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card testi-card">
                            <div class="col-12">
                                <img src="/assets/images/testimonial/s.jpg" alt="" class="person">
                                <h4>Sudhakar Nemmatha</h4>
                                <p class="job">Founder, Dreamchoice Realty</p>
                                <span><img src="/assets/images/testimonial/australia.png" class="country-flag"></span>
                                <p>Nyx Wolves providing services to my business which is based in Sydney Australia. I have met many other hopeless developers before contacting Nyx Wolves. I am very much impressed with their work, skill set & mainly they communicate back promptly & also reasonable regards the fee for their services. I already recommended them to few of my friends & will keep doing. Highly recommend !</p>
                                <ul class="navbar-nav social share-list ml-auto">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card testi-card">
                            <div class="col-12">
                                <img src="/assets/images/testimonial/t.jpg" alt="Mary Evans" class="person">
                                <h4>Thirukumaran</h4>
                                <p class="job">COO, XR Labs</p>
                                <span><img src="/assets/images/testimonial/india.png" class="country-flag"></span>

                                <p>Nyx Wolves is a team that is highly professional, efficient and effective at what
                                    they do.

                                    Commitments were realistic, budgets were affordable, quality was speckless. The team
                                    takes care to ensure that the project journey is a seamless one.

                                    The qualities mentioned were not just that of the founders' but of every single
                                    resource of Nyx.
                                </p>
                                <ul class="navbar-nav social share-list ml-auto">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card testi-card">
                            <div class="col-12">
                                <img src="/assets/images/testimonial/m.jpg" alt="Sarah Lopez" class="person">
                                <h4>Meghna Pandya</h4>
                                <p class="job">CEO, Maghna Pandya</p>
                                <span><img src="/assets/images/testimonial/tanzania.png" class="country-flag"></span>
                                <p>Nyx Wolves has an amazing team and it is a joy to work with them. They have been doing some really good graphic designing work for me. They are quick to respond and very patient. Highly Recommended.</p>

                                <ul class="navbar-nav social share-list ml-auto">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card testi-card">
                            <div class="col-12">
                                <img src="/assets/images/testimonial/h.jpg" alt="Joseph Hills" class="person">
                                <h4>Harris F</h4>
                                <p class="job">Founder, Digital Interactive Services</p>
                                <span><img src="/assets/images/testimonial/australia.png" class="country-flag"></span>

                                <p>Creative work and very professional. Recieved proposal clearly Outline details what we discussed and agreed. I have utlised Nyx Wolves services for number of years and highly recommend them.  Services Utilised : 2 Websites, 1 Website and Logo concept, FB and Digital media Artwork, Video Editing, Copywriting</p>
                                <ul class="navbar-nav social share-list ml-auto">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card testi-card">
                            <div class="col-12">
                                <img src="/assets/images/testimonial/u.jpg" alt="Karen Usman" class="person">
                                <h4>Upstate Enterprise</h4>
                                <p class="job">Founder, Upstate Enterprise</p>
                                <span><img src="/assets/images/testimonial/usa.png" class="country-flag"></span>

                                <p>Nyx did the work well, on time and within budget. I had asked for some creative vision, and although it took some care in explaining it, they worked really hard to get the work done on time. It was really a massive amount of work, but they plowed into it to meet our 3 day turnaround time requirements. Excellent work! Thanks to Sid there and his careful communications as he led the team there at Nyx !</p>
                                <ul class="navbar-nav social share-list ml-auto">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fa fa-star ml-2 mr-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class=" row justify-content-between d-flex" >
                <div>
                    <img src="/assets/images/free-logo.png" height="200px" width="200px" alt="">
                </div>
                <div>
                    <img src="/assets/images/g-logo.png" height="200px" width="200px" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- Partners -->
    <section id="partner" class="logos">
        <div class="container">
            
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <h2 class="featured">Our Clients</h2>
                    <p> Our pack has shared the journey with these amazing brands and helped them build technologies and design. Here are our earned diamonds in our forest!</p>
                </div>
               
                <div class="col-12 col-md-3 align-self-end">
                    <a href="/clients" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i
                            class="icon-grid"></i>VIEW ALL</i></a>
                </div>
            </div>
            <br>
            <br>

         
            
          
            <div class="swiper-container slider-min">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/1.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/2.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/3.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/4.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/5.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/6.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/7.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/9.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/client_logos_new_homepage/10.png" class="image-fit w-85">
                    </div>
                  
                </div>
            </div>
      </div>
    </section>

    <!-- Blog -->
    @include('inc.blog')

    <!-- Subscribe -->
    <section id="subscribe" class="subscription map" style="background:rgb(0,0,0); padding-top:150px">
        <div class="row intro">
            <div class="container">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <h2 class="featured">We've Served Around the World</h2>
                    <p>Serving clients from around the world for a variety of needs!</p>
                </div>
            </div>

        </div>
        <div id="map" style="width: 100%; height: 500px; "></div>

    </section>

    <!-- Contact -->
    @include('inc.contact-form')

    @include('inc.footer')
    @include('inc.search-menu')
    @include('inc.scroll-to-top')


    </div>
    <!-- ==============================================
        Vendor Scripts
        =============================================== -->
    @include('inc.scripts')

    <script src="/assets/js/map.js"></script>
    {{-- <script src="/assets/js/rain.js"></script> --}}
    @include('inc.contact-form-scripts')
</body>

</html>