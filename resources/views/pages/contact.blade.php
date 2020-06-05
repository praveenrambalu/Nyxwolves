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
    color: #fff;
}
#upper-value {
    float: right;
    color: #fff;
}

input[type="checkbox"] + label {
color:#000;
}
input[type="checkbox"] + label::before {
    border: 1px solid #0443b7;
}

        </style>
        
    </head>

    <body>

        <!-- Header -->
      @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd">
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
                        <a href="contact.html" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>CONTACT US</i></a>
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
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">

                        <!-- Success Message -->
                        <div class="row success message">
                            <div class="col-12 p-0">
                                <i class="icon bigger icon-check"></i>
                                <h3>Success</h3>
                                <p>Your message has been sent successfully.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit quisque sed leo vel dolor
                                    dictum hendrerit.</p>
                                <a href="" class="btn mx-auto primary-button"><i class="icon-refresh"></i>REFRESH</a>
                            </div>
                        </div>

                        <!-- Steps Message -->
                        <div class="row intro">
                            <div class="col-12 p-0">

                                <!-- Text 1 -->
                                <div id="text-1">
                                    <h2 class="featured alt">Let's Talk?</h2>
                                    <p>Join us as we lead you through an exhilarating experience in creating world-class
                                        business. Let’s share our passion and conquer the world!</p>
                                </div>

                                <!-- Text 2 -->
                                <div id="text-2" style="display: none">
                                    <h2 class="featured alt">Let's Talk?</h2>
                                    <p>Join us as we lead you through an exhilarating experience in creating world-class
                                        business. Let’s share our passion and conquer the world!</p>
                                </div>

                                <!-- Text 3 -->
                                <div id="text-3" style="display: none">
                                    <h2 class="featured alt">Let's Talk?</h2>
                                    <p>Join us as we lead you through an exhilarating experience in creating world-class
                                        business. Let’s share our passion and conquer the world!</p>
                                </div>

                            </div>
                        </div>

                        <!-- Form -->
                        <div class="row text-center">
                            <div class="col-12 p-0">
                                <form id="msform">
                                    <ul id="progressbar">
                                        <li class="active">Personal Details</li>
                                        <li>Company Detail</li>
                                        <li>Write Message</li>
                                    </ul>

                                    <!-- Group 1 -->
                                    <fieldset id="group-1">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="name" minlength="3"
                                                    class="form-control input-style" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="email" name="email" minlength="3"
                                                    class="form-control input-style" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="phone" minlength="3"
                                                    class="form-control input-style" placeholder="Phone" required>
                                            </div>
                                        </div>
                                    
                                        <div class="col-12 input-group p-0">
                                            <a id="next-1" class="next btn primary-button">NEXT<i
                                                    class="btn-icon icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 2 -->
                                    <fieldset id="group-2">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="company" minlength="3"
                                                    class="form-control input-style" placeholder="Company" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 p-0 text-left">
                                                <h5 class="pt-1 pb-3 text-white">Services</h5>
                                                <input type="checkbox" id="box-1">
                                                <label for="box-1">Web Design</label>
                                                <input type="checkbox" id="box-2">
                                                <label for="box-2">Web Development</label>
                                                <input type="checkbox" id="box-3">
                                                <label for="box-3">UI / UX</label>
                                                <input type="checkbox" id="box-4">
                                                <label for="box-4">Design Platforms</label>
                                                <input type="checkbox" id="box-5">
                                                <label for="box-5">Others</label>
                                            </div>


                                        </div>


                                        <div class="row py-2">
                                            <div class="col-12 text-left"><h5 class="pt-1 pb-3 text-white">Budget </h5>
                                                 <div id="range-slider"></div>
                                                 <div class="values-holder">
                                                     <span class="leftexample-val" id="lower-value"></span>
                                                     <span class="rightexample-val" id="upper-value"></span>
                                                    </div>
                                            </div>
                                        </div>
                                       

                                        <div
                                            class="col-12 input-group p-0 d-flex justify-content-center justify-content-md-start">
                                            <a id="prev-2" class="previous btn primary-button mr-4"><i
                                                    class="btn-icon icon-arrow-left-circle"></i>PREV</a>
                                            <a id="next-2" class="next btn primary-button">NEXT<i
                                                    class="btn-icon icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 3 -->
                                    <fieldset id="group-3">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="message" minlength="3" class="form-control input-style"
                                                    placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 input-group p-0 d-flex justify-content-center justify-content-md-start">
                                            <a id="prev-3" class="previous btn primary-button mr-4"><i
                                                    class="btn-icon icon-arrow-left-circle"></i>PREV</a>
                                            <a id="next-3" class="send btn primary-button">SEND<i
                                                    class="btn-icon icon-login left"></i></a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>


                    <div class="gallery col-12 col-md-6 pl-md-5 d-none d-md-block">

                        <!-- Step 1 -->
                        <a id="step-1" data-poster="/assets/images/about-2.jpg"
                            href="https://www.youtube.com/watch?v=7e90gBu4pas">
                            <i class="play-video icon-control-play"></i>
                            <div class="mask-radius"></div>
                            <img src="/assets/images/about-2.jpg" class="image-fit">
                        </a>

                        <!-- Step 2 -->
                        <a id="step-2" href="/assets/images/about-3.jpg" style="display:none">
                            <img src="/assets/images/about-3.jpg" class="image-fit">
                        </a>

                        <!-- Step 3 -->
                        <a id="step-3" href="/assets/images/about-4.jpg" style="display:none">
                            <img src="/assets/images/about-4.jpg" class="image-fit">
                        </a>

                        <!-- Step 4 -->
                        <a id="step-4" href="/assets/images/about-leverage.jpg" style="display:none">
                            <img src="/assets/images/about-leverage.jpg" class="image-fit">
                        </a>

                    </div>
                </div>
            </div>
        </section>



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