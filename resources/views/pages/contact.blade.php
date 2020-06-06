<!DOCTYPE html>

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


.card{
    word-wrap: unset;
}

.social-icons div a i{
    font-size: 32px;
    font-weight: bold;
}
.social-icons div a{
    animation: bounce 5s linear infinite;

}
@keyframes bounce {
        0%   { transform: translateY(0); }
        50%  { transform: translateY(10px); }
        100% { transform: translateY(0); }
    }
        </style>
        
    </head>

    <body>

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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Lorem ipsum dolor sit amet.
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured left">
                            <i class="icon icon-phone"></i>
                            <h4>+91  63817 51802</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
                            <a href="tel:+91 6381751802"><i class="btn-icon icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-envelope"></i>
                            <h4>admin@nyxwolves.com</h4>
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

                <div class="row justify-content-center text-center items social-icons">
                    <div class="col-12 col-md-3 col-lg-2 item">
                        <a href="https://www.linkedin.com/company/nyxwolves/about/"  target="_blank" class="nav-link"><i class="icon-social-linkedin ml-0"></i></a>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2 item">
                        <a href="https://www.facebook.com/nyxwolves"  target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2 item">
                        <a href="https://www.instagram.com/nyxwolves/"  target="_blank" class="nav-link"><i class="icon-social-instagram"></i></a>

                    </div>
                    <div class="col-12 col-md-3 col-lg-2 item">
                        <a href="https://twitter.com/nyxwolves"  target="_blank" class="nav-link"><i class="icon-social-twitter"></i></a>

                    </div>
                    <div class="col-12 col-md-3 col-lg-2 item">
                        <a href="https://www.youtube.com/channel/UCWSG5vEn5cYu6Ta2NBmloSg"  target="_blank" class="nav-link"><i class="icon-social-youtube"></i></a>

                    </div>
                    <div class="col-12 col-md-3 col-lg-2 item">
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
        @include('inc.scripts')
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