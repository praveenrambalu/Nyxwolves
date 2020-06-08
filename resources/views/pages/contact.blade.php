<!DOCTYPE html>
@section('page','Contact - ')

<html lang="en">

    <head>

  @include('inc.head')

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/theme-classic.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.css" />

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




.card{
    word-wrap: unset;
}
.card h4{
    font-size: 1rem
}

.social-icons div a i{
    font-size: 32px;
    font-weight: bold;
}
.social-icons div a{
    animation: bounce 5s linear infinite;
    display: inline-block;
    padding: 11px;
    

}
@keyframes bounce {
        0%   { transform: translateY(0); }
        50%  { transform: translateY(10px); }
        100% { transform: translateY(0); }
    }
        </style>
        

        @include('inc.contact-form-white-style')
    </head>

    <body>
        @include('inc.preloader')
        <div class="fullpage">
        <!-- Header -->
      @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/contact-us.jpg)">
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">We're always here for you
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacts -->
        <section id="contacts" class="offers">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">How Can We Help?</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <a href="tel:+91 6381751802"> <div class="card featured left">
                            <i class="icon icon-phone"></i>
                            <h4>+91  63817 51802</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                            <i class="btn-icon icon-arrow-right-circle"></i>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <a href="mailto:admin@nyxwolves.com"> <div class="card">
                            <i class="icon icon-envelope"></i>
                            <h4>admin@nyxwolves.com</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                            <i class="btn-icon icon-arrow-right-circle"></i>
                        </div></a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <a href="https://g.page/nyxwolves?share" target="_blank"><div class="card featured right">
                            <i class="icon icon-location-pin"></i>
                            <h4> Chennai, Tamil Nadu</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                        <i class="btn-icon icon-arrow-right-circle"></i>
                        </div></a>
                    </div>
                    
                </div>

                <div class="row justify-content-center text-center items social-icons">
                    <div class=" ">
                        <a href="https://www.linkedin.com/company/nyxwolves/about/"  target="_blank" class="nav-link"><i class="icon-social-linkedin ml-0"></i></a>
                        <a href="https://www.facebook.com/nyxwolves"  target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                        <a href="https://www.instagram.com/nyxwolves/"  target="_blank" class="nav-link"><i class="icon-social-instagram"></i></a>
                        <a href="https://twitter.com/nyxwolves"  target="_blank" class="nav-link"><i class="icon-social-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCWSG5vEn5cYu6Ta2NBmloSg"  target="_blank" class="nav-link"><i class="icon-social-youtube"></i></a>
                        <a href="https://www.behance.net/nyxwolves"  target="_blank" class="nav-link" ><i class="icon-social-behance"></i></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact -->
        @include('inc.contact-form')


        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top') 
        </div> 
        @include('inc.scripts')
        @include('inc.contact-form-scripts')
        
    </body>
</html>