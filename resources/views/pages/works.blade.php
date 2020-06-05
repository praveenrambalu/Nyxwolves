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
  
            .showcase .card .image-over, .showcase .card:hover .image-over::before{
            border-radius:30px;
            }
            .showcase .card .image-over::before{
            background:none;
            }
            .card:not(.no-hover):hover{
                background:none !important;
            }
                .showcase .card:hover .image-over::before {
                background:none !important;
                }
        </style>
        
    </head>

    <body>

        <!-- Header -->
        @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/works.jpg)">
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

        <!-- Work -->
        <section id="work" class="showcase blog-grid">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Our Work</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 col-md-6 col-lg-4 item circle-card" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-1-h.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-2-h.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-3-h.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-4-h.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-5-h.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                              
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item circle-card" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="/assets/images/news-6-h.jpg" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="blog-single-post-1.html">
                                        <h4 class="m-0">How digital transformation has changed the world.</h4>
                                    </a>
                                </div>
                                
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