<!DOCTYPE html>
@section('page','Works - ')

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

                a.filter-button{
                    color: #9fa1b5 ;
                    margin-right: 4%;
                    padding-bottom: 1%;
                    cursor:pointer;
                    line-height: 3;
                }
                a.filter-button.active{
                    border-bottom: 1px solid #000;
                    color: #040402;
                }
                a.filter-button:hover{
                    color: #040402 ;
                  /* text-decoration: underline; */
                }
                


        </style>
        @include('inc.contact-form-white-style')
        
    </head>

    <body>
        <!-- Header -->
        @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/works.jpg);  background-size:cover; background-repeat:no-repeat;">
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"> Welcome to our Cave of Works

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
                        {{-- <h2 class="featured">Our Work</h2> --}}
                     
                        <div id="filter">
                            <a  class="filter-button active" data-filter="all">All Works</a>
                            <a  class="filter-button" data-filter="branding">Branding</a>
                            <a  class="filter-button" data-filter="digitalplatform">Digital Platforms</a>
                            <a  class="filter-button" data-filter="webdesign">Digital Transformation</a>
                            <a  class="filter-button" data-filter="digitalmarketing">Digital Marketing</a>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                    </div>
                </div>
                <div class="row items">
                    <a href="/works/joot-foods">
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
                    </a>
                    <a href="/works/homely-fresh-foods">
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
                    </a>
                    <a href="/works/north-bay">
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
                    </a>
                    <a href="/works/vara-vasthu">
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
                    </a>
                    <a href="/works/western-valley"> 
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
                    </a> 
                    <a href="/works/bozmie"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/bozmie.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/bozmie">
                                            <h4 class="m-0 text-dark">Bozmie</h4>
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 
                    <a href="/works/chatur-ideas"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/chatur_ideas.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/chatur-ideas">
                                            <h4 class="m-0 text-dark">Chatur Ideas</h4>
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 

                    <a href="/works/tento"> 
                        <div class="col-12 col-md-6 col-lg-4 item circle-card filter webdesign" data-tilt   data-tilt-scale="1"  data-tilt-max="10">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="/assets/images/portfolio/tento.png" alt="">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="/works/tento">
                                            <h4 class="m-0 ">Tento</h4>
                                        </a>
                                    </div>
                                
                                </div>
                            </div> 
                        </div>
                    </a> 


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



        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
        @include('inc.scripts')
        @include('inc.contact-form-scripts')
<script>
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
           
            $(".filter-button").removeClass('active');
            $(this).addClass('active');
            if(value == "all")
            {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
            
            }
            else
            {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
            }
            });
            
            // if ($(".filter-button").removeClass("active")) {
            //     $(this).removeClass("active");
            // }
            //     $(this).addClass("active");
            
            // });

        </script>
    </body>
</html>