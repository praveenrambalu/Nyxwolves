<!DOCTYPE html>

<html lang="en">

<head>

@include('inc.head')

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/theme-dark.css">
        <link rel="stylesheet" href="/assets/css/preloader.css">
    
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
        #slider{
            background:#040402;
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
    color: #fff;
}
#upper-value {
    float: right;
    color: #fff;
}

#work.showcase .card .image-over, #work.showcase .card:hover .image-over::before{
            border-radius:30px;
            }
            #work.showcase .card .image-over::before{
            background:none;
            }
            #work.showcase .card:not(.no-hover):hover{
                background:none !important;
            }
                #work.showcase .card:hover .image-over::before {
                background:none !important;
                }



             #testimonials   .swiper-slide.slide-center.text-center.item .card{
    min-height: 450px;
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
                    <a href="/services" class="nav-link effect-motion-hover">Services <i class="icon-arrow-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="/services/brand-and-identity" class="nav-link">Brand & Identity</a>
                        <a href="/services/web-design-and-development" class="nav-link">Web Design & Development</a>
                        <a href="/services/digital-marketing" class="nav-link">Digital Marketing</a>
                        <a href="/services/ai-and-digital-platforms" class="nav-link">AI & Digital Platforms</a>
                    </div>
                </li> 
                <li class="nav-item">
                    <a href="/works" class="nav-link effect-motion-hover">Works</a>
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
                    <a href="/contact" class=" btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT US</a>
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
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="/assets/images/1.png"
                            class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">
                                        Let's Create Something.</h1>
                                    <Accelerate data-aos="zoom-out-up" data-aos-delay="800" class="description">
                                        Accelerate your success through our robust and agile processes. </p>
                                        <a href="#intro" data-aos="zoom-out-up" data-aos-delay="1200"
                                            class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i
                                                class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="/assets/images/1.png"
                            class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">A
                                        Touch of Creativity.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Be it any of our
                                        services, they are served with creativity at its best!</p>
                                    <a href="#intro" data-aos="zoom-out-up" data-aos-delay="1200"
                                        class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i
                                            class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="/assets/images/1.png"
                            class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">For
                                        Modern Companies.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Our technical
                                        proficiency assures state-of-the-art solutions in every domain. </p>
                                    <a href="#intro" data-aos="zoom-out-up" data-aos-delay="1200"
                                        class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i
                                            class="icon-cup"></i>GET STARTED</a>
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
                        <a >
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
                        <div class="card featured left">
                            <!-- <i class="icon icon-tag"></i> -->
                            <img src="/assets/images/icons/branding-icon-color.png" class="icon-services" alt="">
                            <h4>Branding & Identity</h4>
                            <p>Our dynamic team builds your brand that speaks for itself. We strategize and inculcate
                                design and creativity into branding that mirrors your business goals, ideals, and
                                principles. </p>
                            <a href="/services/brand-and-identity"><i
                                    class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card">
                            <img src="/assets/images/icons/web.png" class="icon-services" alt="">

                            <h4>Web Design & Development</h4>
                            <p>Our team uses cutting-edge technology to design and develop visually rich business
                                websites. With simplified yet elegant designs, we guarantee an exclusive website or a
                                web application to enhance your growth. </p>
                            <a href="/services/web-design-and-development"><i
                                    class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card">
                            <img src="/assets/images/icons/digital.png" class="icon-services" alt="">

                            <h4>Digital Marketing</h4>
                            <p>Our unique and powerful digital marketing strategies to reach potential customers will
                                act as the best catalyst to expand your business. Our wolf pack diligently caters to
                                numerous robust methods that help you grow. </p>
                            <a href="/services/digital-marketing"><i
                                    class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured right">
                            <img src="/assets/images/icons/ai-icon.png" class="icon-services" alt="">

                            <h4>AI & Digital Platforms</h4>
                            <p>With Artificial Intelligence, we help you build all forms of incredibly-smart software
                                products and give them an exclusive edge. Our innovative solutions place your business
                                on equal footing with the current trends and ensure a powerful tomorrow.</p>
                            <a href="/services/ai-and-digital-platforms"><i
                                    class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
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
                        <h2 class="featured">Our Work</h2>
                        <p> Our excellent digital platform solutions and persistent efforts have enabled our clients to achieve a great feat in their domain. They have embraced us and we are proud to be a part of their success. </p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 col-md-6 col-lg-4 item circle-card  filter branding" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/portfolio/jootfoods.png" alt="">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/works/joot-foods">
                                        <h4 class="m-0">Joot Foods</h4>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card filter branding digitalplatform" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/portfolio/homelyfreshfoods.png" alt="">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/works/homely-fresh-foods">
                                        <h4 class="m-0">Homely Fresh Foods</h4>
                                    </a>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card filter digitalmarketing" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/portfolio/northbay.png" alt="">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/works/north-bay">
                                        <h4 class="m-0">North Bay</h4>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card filter branding webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/portfolio/varavasthu.png" alt="">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/works/vara-vasthu">
                                        <h4 class="m-0">Vara Vasthu</h4>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/portfolio/westernvalley.png" alt="">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="/works/western-valley">
                                        <h4 class="m-0">Western Valley</h4>
                                    </a>
                                </div>
                              
                            </div>
                        </div> 
                    </div>
                    {{-- <div class="col-12 col-md-6 col-lg-4 item circle-card filter" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-6-h.jpg" alt="">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                                
                            </div>
                        </div> 
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Testimonials -->
       


        <section id="testimonials" class="carousel">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Customer Testimonials</h2>
                        <p class="text-max-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam lacus, dapibus sed imperdiet.</p>
                    </div>
                </div>
                <div class="swiper-container slider-full  items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/assets/images/testimonial/u.jpg" alt="" class="person">
                                    <h4>UpState E</h4>
                                    <p>It was really great working with them. Highly recommended!</p>
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
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/assets/images/testimonial/t.jpg" alt="Mary Evans" class="person">
                                    <h4>Thirukumaran</h4>
                                    <p>Nyx Wolves is a team that is highly professional, efficient and effective at what they do.

                                        Commitments were realistic, budgets were affordable, quality was speckless. The team takes care to ensure that the project journey is a seamless one.
                                        
                                        The qualities mentioned were not just that of the founders' but of every single resource of Nyx.
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
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/assets/images/testimonial/s.jpg" alt="Sarah Lopez" class="person">
                                    <h4>Sudhakar Nemmatha</h4>
                                    <p>Nyx Wolves provides services to my business which is based in Sydney Australia. I have met many other hopeless developers before contacting Nyx Wolves. I am very much impressed with their work, skill set & mainly they communicate back promptly & also reasonably regards the fee for their services. I already recommended them to a few of my friends & will keep doing them. Highly recommended!!</p>
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
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/assets/images/testimonial/c.jpg" alt="Joseph Hills" class="person">
                                    <h4>Chandra Shekar</h4>
                                    <p>This is my second project with them and they delivered great quality work again. Definitely coming back for more work</p>
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
                            <div class="row card">
                                <div class="col-12">
                                    <img src="/assets/images/testimonial/r.jpg" alt="Karen Usman" class="person">
                                    <h4>Raj Agarwal</h4>
                                    <p>A perfect company for startups</p>
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
            </div>
        </section>


        <!-- Partners -->
        <section id="partner" class="logos">
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
        </section>

        <!-- Blog -->
     @include('inc.blog')

        <!-- Subscribe -->
        <section id="subscribe" class="subscription map" style="background:rgb(0,0,0);">
            <div class="row intro">
                <div class="container">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">We've Served Around the World.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
               
            </div>
            <div id="map" style="width: 100%; height: 500px;"></div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.js"></script>
    <script>
        var rangeslider = document.getElementById('range-slider');
        var updateSliderValue = document.getElementById('slider-value');
noUiSlider.create(rangeslider, {
    start: [20000, 80000],
    step: 1000,
    connect: true,
    range: {
        'min': 20000,
        'max': 100000
    },
    tooltips:true,
    format: wNumb({
        decimals: 0, // default is 2
        thousand: '.' // thousand delimiter
        // postfix: ' (US $)', // gets appended after the number
    })
});




var nodes = [
    document.getElementById('lower-value'), // 0
    document.getElementById('upper-value')  // 1
];

// Display the slider value and how far the handle moved
// from the left edge of the slider.
rangeslider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
    nodes[handle].innerHTML =  'Rs .' + values[handle] ;
});



    </script>
</body>

</html>