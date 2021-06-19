<!DOCTYPE html>
@section('page','About - ')

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
            .team{
               height:350px;
            }
        </style>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap">
<link rel="stylesheet" href="/assets/css/advisor_style.css">
<link rel="stylesheet" href="/assets/css/team_style.css">

</head>

<body>
    <!-- Header -->
   @include('inc.header')


    <!-- Banner -->
    <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/about-us.jpg); background-size:cover; background-repeat:no-repeat;">
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
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">We’re a pack, we’re a family

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
                <div class=" col-12 col-md-6">
                        <img src="/assets/images/about-us.gif" class="image-fit">
                </div>
            </div>

        </div>
        <div class="rectangle-shape right shape1"><img src="/assets/images/shape1.png" alt="image"></div>

    </section>


    {{-- <section class="highlights left">
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
    </section> --}}



    <!-- About [video] -->
    <section id="video" class="highlights right">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-md-6">
                    <a target="_blank" data-poster="/assets/images/wolf-about.gif" href="https://www.youtube.com/watch?v=2dz90LJOVz0">
                        <i class="play-video icon-control-play" style="display:none;"></i>
                        <div class="mask-radius" style="display:none;"></div>
                        <img src="/assets/images/wolf-about.gif" class="image-fit">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured alt">Who Are We?</h2>
                            <p>We are a bootstrapped team embedded with strong values in assisting our clients to scale up in their fields. Quality and innovation bleeds in every work that we pursue. Since the inception, we have been excelling in developing innovative and creative solutions for our clients. Our growth as a team has aided numerous companies to succeed like never before.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rectangle-shape left shape2"><img src="/assets/images/shape1.png" alt="image"></div>
        
    </section>


    {{-- <section id="team" class="carousel">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Our Wolf Pack</h2>
                    <p class="text-max-800">Our team is the soul of the company. We house the finest team of
                        designers and developers to deliver the best service to our clients. </p>
                </div>
            </div>
            <div class="swiper-container slider-mid items">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/aranganel.jpg" alt="Dr. T Arangannal" class="person">
                                <h4>Dr. T. Arangannal</h4>
                                <p>Venture Partner</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="https://www.facebook.com/arangannalthirumalai.t" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.linkedin.com/in/arangannal-thirumalai-6b4b76b2/"  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/sriram2.jpg" alt="Mary Evans" class="person">
                                <h4>Sriram Sankar</h4>
                                <p>Co-Founder, Director</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="https://medium.com/@sriramsankarinjar" target="_blank" class="nav-link"><i class="fa fa-medium"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.linkedin.com/in/injarsriram/"  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/sid.jpg" alt="Sarah Lopez" class="person">
                                <h4>Sidhdharth Sivasubramanian</h4>
                                <p>Co-Founder, Director</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="https://www.facebook.com/sidhdharthsivasubramanian/" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.linkedin.com/in/sidhdharths/"  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/venkat.jpg" alt="Sarah Lopez" class="person">
                                <h4>Venkat Boyalla </h4>
                                <p>Director, CMO</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="https://linkedin.com/in/venkat-boyalla" target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.instagram.com/venkeybnk"  target="_blank" class="nav-link"><i class="icon-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/sriramp.jpg" alt="Sriram" class="person">
                                <h4>Sriram P
                                </h4>
                                <p> Cyber Security Advisor</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=""  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    

                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/nirmal.jpg" alt="Karen Usman" class="person">
                                <h4>Nirmalaya Sanyal</h4>
                                <p>Creative Head</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/sakthi.jpg" alt="Sakthivel" class="person">
                                <h4>Sakthivel R</h4>
                                <p>Head of Designs</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/praveen.jpg" alt="Praveenram" class="person">
                                <h4>Praveenram Balachandran</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="swiper-slide slide-center text-center item">
                        <div class="row card team">
                            <div class="col-12">
                                <img src="/assets/images/team/PersonAvatar.png" alt="Maybe You" class="person">
                                <h4>Maybe You ?</h4>
                                <p>Join Us</p>
                                <ul class="navbar-nav social share-list ml-auto">
                                    <li class="nav-item">
                                        <a href="mailto:admin@nyxwolves.com"  class="nav-link"> <i class="icon-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> --}}

    <section class="custom-team-section">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Our Pack</h2>
                    <p class="text-max-800">Our team is the soul of the company. We house the finest team of designers and developers to deliver the best service to our clients. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-section">
                <div class="row">
                   
                    <div class="team-carousel owl-carousel owl-theme">
                        <x-team title="Co-founder,Director" name="Sriram Sankar " image="sriram" />
                        <x-team title="Co-founder,Director" name="Sidhdharth Sivasubramanian" image="sidhdharth" />
                        <x-team title="Director,CMO" name="Venkat Boyalla" image="venkat" />
                        <x-team title="Head of Human Resources" name="Keshav Anand " image="keshav" />
                        <x-team title="Head of Software & Information Security" name="Gautam Krishnan" image="gautam" />
                        <x-team title="Head of Design" name="Sakthivel Ravichandran" image="sakthivel" />
                        <x-team title="Solution Architect" name="Rishav Sinha" image="rishav" />
                        <x-team title=" Creative Head" name="Nirmalya Sanyal " image="nirmalaya" />
                        <x-team title=" Head of Marketing" name="Devisri" image="devisri" />
                        <x-team title="Customer Relation & Delivery Manager" name="Gayatri" image="gayathri" />
                        <x-team title=" Head of Operations" name="Keshav Mohan " image="keshavop" />

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section  class="advisor-section bg_gray">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Our Advisors</h2>
                    <p class="text-max-800">Our team is the soul of the company. We house the finest team of
                        designers and developers to deliver the best service to our clients. </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="advisor-carousel owl-carousel owl-theme">
                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/amar_prasad_reddy.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Dr. Amar Prasad Reddy</h3> 
                            <p class="advisor-description">Vice Chairman, National Cyber Safety and Security Standards</p> 

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/ganesh_bala.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Ganesh Bala </h3> 
                            <p class="advisor-description">Ex MD at One Works BIM Technologies</p> 

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/ravikumar.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name"> Emeritus Prof. Dr. Ravikumar V </h3> 
                            <p class="advisor-description">National Ambassador, HRPM New Delhi</p> 

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/varsha_aswani.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Varsha Aswani </h3> 
                            <p class="advisor-description">Founder - Born2Win Research Foundation Trust</p> 

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/santhosh.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Santhosh Muruganandham </h3> 
                            <p class="advisor-description">Co-Founder & Managing Director @ Kolapasi</p> 

                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/andy_mohan.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Andy Morgan</h3> 
                            <p class="advisor-description">Founder & CEO Euphoriaz Group</p> 

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/sriram.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Sriram P </h3> 
                            <p class="advisor-description">Security Advisor / Founder PrimeFort</p> 

                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="advisor-card">
                            <div class="advisor-ring">
                                <img src="/assets/img/advisor/arangannal.png" class="img img-responsive advisor-image" alt="Advisor Image">
                            </div>

                            <h3 class="advisor-name">Dr. Arangkannal Thirumalai </h3> 
                            <p class="advisor-description">Venture Partner</p> 

                        </div>
                    </div>
            
              
           
               
                   


                </div>
            </div>
           

        </div>
    </section>

     <section id="intro" >
            <div class="container">
                <div class="row">
                  
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">Why Choose us?</h2>
                                <p>You are our first priority. We understand your every goal. Our energetic and tech-savvy pack of designers and developers create futuristic solutions to progressively elevate your growth and help you achieve your business goals. Our versatile team has years of expertise in building extraordinary things out of the ordinary. We assure quality in every aspect and guarantee your success. </p>
                            </div>
                        </div>
                    </div>

                    <div class=" col-12 col-md-6">
                        <a >
                            <img src="/assets/images/why-choose-us.jpg" class="image-fit">
                        </a>
                    </div>


                </div>
            </div>
        <div class="rectangle-shape right shape3"><img src="/assets/images/shape1.png" alt="image"></div>

      </section>


    <!-- Team -->
  {{-- <section id="team" class="carousel">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Team of Experts</h2>
                        <p class="text-max-800">Our team is the soul of the company. We house the finest team of
                            designers and developers to deliver the best service to our clients. </p>
                    </div>
                </div>
                <div class="swiper-container slider-mid items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/aranganel.jpg" alt="Adams Baker" class="person">
                                    <h4>Arangannal</h4>
                                    <p>Venture Partner</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="https://www.facebook.com/arangannalthirumalai.t" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.linkedin.com/in/arangannal-thirumalai-6b4b76b2/"  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/sriram2.jpg" alt="Mary Evans" class="person">
                                    <h4>Sriram Sankar</h4>
                                    <p>Co-Founder, Director</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="https://www.facebook.com/injarsriram" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.linkedin.com/in/injarsriram/"  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/sid.jpg" alt="Sarah Lopez" class="person">
                                    <h4>Sidhdharth Sivasubramanian</h4>
                                    <p>Co-Founder, Director</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="https://www.facebook.com/sidhdharthsivasubramanian/" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.linkedin.com/in/sidhdharths/"  target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/venkat.jpg" alt="Sarah Lopez" class="person">
                                    <h4>Venkat Boyalla </h4>
                                    <p>Director, CMO</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="https://linkedin.com/in/venkat-boyalla" target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.instagram.com/venkeybnk"  target="_blank" class="nav-link"><i class="icon-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   

                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/nirmal.jpg" alt="Karen Usman" class="person">
                                    <h4>Nirmalaya Sanyal</h4>
                                    <p>Creative Head</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/sakthi.jpg" alt="Sakthivel" class="person">
                                    <h4>Sakthivel R</h4>
                                    <p>Asst. Manager of Designs</p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/praveen.jpg" alt="Praveenram" class="person">
                                    <h4>Praveenram Balachandran</h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                      
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card team">
                                <div class="col-12">
                                    <img src="/assets/images/team/PersonAvatar.png" alt="Maybe You" class="person">
                                    <h4>Maybe You ?</h4>
                                    <p>Join Us</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                        <li class="nav-item">
                                            <a href="mailto:admin@nyxwolves.com"  class="nav-link"> <i class="icon-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
</section> --}}


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

    <section id="partner" class="logos">
        <div class="container">
            
            <div class="row intro">
               
                <div class="col-12 col-md-12 pl-md-12 align-self-center text-center ">
                    <div class="row intro">
                        <div class="col-12 p-0 text-center">
                            <h2 class="">Our Partners</h2>
                            <p>Our pillars that hold us strong together to build this fortress with the wolves</p>
                        </div>
                    </div>
                </div>

                
            </div>
            <br>
            <br>

            <div class="swiper-container slider-min">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/primefort.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/euphoriaz.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/born2win.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/srm-partner.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/panimalar.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/peritum.png" class="image-fit w-85">
                    </div>
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/briteb.png" class="image-fit w-85">
                    </div>
                 
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/ajna-digital.png" class="image-fit w-85">
                    </div>
                  
                  
                  
                    <div class="swiper-slide slide-center item">
                        <img src="/assets/images/our-partners/ajna-ai.png" class="image-fit w-85">
                    </div>
                  
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="contacts" class="offers">
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
    </section> --}}



    

    <!-- Footer -->
  
    @include('inc.footer')

    @include('inc.search-menu')
    @include('inc.scroll-to-top')

    <!-- ==============================================
        Vendor Scripts
        =============================================== -->
   @include('inc.scripts')
   <script src="/assets/js/counter.js"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script >
       // $(document).ready(function(){
       //     $( ".owl-prev").html('<i class="fa fa-arrow-circle-left team-carousel-arrow"></i>');
       //     $( ".owl-next").html('<i class="fa fa-arrow-circle-right team-carousel-arrow" ></i>');
       // });
       $('.advisor-carousel').owlCarousel({
       margin:10,
       responsiveClass:true,
       dots:true,
       loop:true,
       nav:false,
       autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:2000,
       responsive:{
           0:{
               items:1,
               dots:false
           },
           600:{
               items:3,
           },
           1000:{
               items:4,
               dotsEach:true
           }
       }
   })
   $('.team-carousel').owlCarousel({
        margin:10,
        responsiveClass:true,
        dots:true,
        loop:true,
        nav:false,
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1,
                dots:false
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
                dots:true,
            }
        }
    })
   </script>
</body>

</html>