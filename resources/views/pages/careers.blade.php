<!DOCTYPE html>
@section('page','Careers - ')

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
            #contact{
                background:#fff;
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




#banner {
    position: relative;
    height:300px;
    width:100%;
    overflow: hidden;
}
#videobcg {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
    height:auto;
    width:auto;
    z-index: -100;
}

.text-center.videobanner-text {
    color: #fff;
}

.row.career-card {
	background: white;
	padding: 19px;
	border-radius: 15px;
	margin-top: 20px !important;
	padding-top: 25px;
	padding-bottom: 25px;
}
.career-btn .btn {
	margin-top: 20px !important;
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">All your digital needs with one team

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="video" class="highlights right">
            <div class="container">
                <div class="row career-card mt-2 mb-2">
                    <div class="career-title col-12 col-md-5">
                       <h3 class="career-heading">Senior Flutter Developer</h3>
                       <p class="career-experience">Experience : 1-3 Years  <br><small class="career-experience"> Freshers Welcome</small></p>
                       {{-- <small class="career-experience"> Freshers Welcome</small> --}}
                    </div>
                    <div class="career-nature-holder col-12 col-md-5">
                        <p class="career-nature">Nature :Full time</p>
                        <p class="career-nature">Location: Chennai, Tamil Nadu</p>
                       
                    </div>
                    <div class="career-btn col-12 col-md-2">
                        <a href="mailto:admin@nyxwolves.com?subject=Applying for Senior Flutter Developer" class="btn m-auto mt-3 primary-button">Apply Now</i></a>
                    </div>
                </div>
                <div class="row career-card mt-2 mb-2">
                    <div class="career-title col-12 col-md-5">
                       <h3 class="career-heading">Junior Full Stack Web Developer (MERN)</h3>
                       <p class="career-experience">Experience : 0-1 Years  <br><small class="career-experience"> Freshers Welcome</small></p>
                       {{-- <small class="career-experience"> Freshers Welcome</small> --}}
                    </div>
                    <div class="career-nature-holder col-12 col-md-5">
                        <p class="career-nature">Nature :Full time</p>
                        <p class="career-nature">Location: Chennai, Tamil Nadu</p>
                       
                    </div>
                    <div class="career-btn col-12 col-md-2">
                        <a href="mailto:admin@nyxwolves.com?subject=Junior Full Stack Web Developer " class="btn m-auto mt-3 primary-button">Apply Now</i></a>
                    </div>
                </div>
                <div class="row career-card mt-2 mb-2">
                    <div class="career-title col-12 col-md-5">
                       <h3 class="career-heading">PHP & Wordpress Developer</h3>
                       <p class="career-experience">Experience : 0-1 Years  <br><small class="career-experience"> Freshers Welcome</small></p>
                       {{-- <small class="career-experience"> Freshers Welcome</small> --}}
                    </div>
                    <div class="career-nature-holder col-12 col-md-5">
                        <p class="career-nature">Nature :Full time</p>
                        <p class="career-nature">Location: Chennai, Tamil Nadu</p>
                       
                    </div>
                    <div class="career-btn col-12 col-md-2">
                        <a href="mailto:admin@nyxwolves.com?subject=PHP & Wordpress Developer" class="btn m-auto mt-3 primary-button">Apply Now</i></a>
                    </div>
                </div>

                <div class="row career-card mt-2 mb-2">
                    <div class="career-title col-12 col-md-5">
                       <h3 class="career-heading">Web & App Development Architect </h3>
                       <p class="career-experience">Experience : 1+ Years  </p>
                       {{-- <small class="career-experience"> Freshers Welcome</small> --}}
                    </div>
                    <div class="career-nature-holder col-12 col-md-5">
                        <p class="career-nature">Nature :Full time</p>
                        <p class="career-nature">Location: Chennai, Tamil Nadu</p>
                       
                    </div>
                    <div class="career-btn col-12 col-md-2">
                        <a href="mailto:admin@nyxwolves.com?subject=Web & App Development Architect" class="btn m-auto mt-3 primary-button">Apply Now</i></a>
                    </div>
                </div>
                
          
                
            </div>
        </section>

    






        {{-- @include('inc.contact-form') --}}

    <!-- About [video] -->
  


        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
        @include('inc.scripts')
        @include('inc.contact-form-scripts')


    </body>
</html>