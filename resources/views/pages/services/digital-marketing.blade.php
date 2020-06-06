@extends('layouts.services')
@section('main-content')
    
        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/digital-marketing.jpg)">
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
    <section id="blog" class="single">
        <div class="container">
            <div class="row content">
                <main class="col-12 col-md-12 p-0">

                    <!-- Text -->
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <h2 class="featured">Digital Marketing</h2>
                            <p>In a world where everything runs on fingertips, marketing on online platforms has become an inevitable part of success in every field. Our effective and novel digital marketing strategies redefine your opportunities and generate potential prospects to nurture your growth by creating backlinks to your website. Our wide spectrum of digital marketing campaigns tremendously increases your online presence and engages your audience with brilliance and charm. Our extensive digital marketing strategies are designed to tailor customized posts to get your customers hooked and enhance your brand awareness.  </p>

                            <div class="gallery">
                                <a >
                                    <img src="/assets/images/services-featured-image/marketing.jpg" class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-5">

                            <h4>Services Offered</h4>
                           
                            <ul>

                                <li> Social Media Marketing </li>
                                <li> Search Engine Optimization (SEO) </li>
                                <li> AdWords Marketing & Google Ads </li>
                                <li> LinkedIn Marketing </li>
                                <li> Google My Business Setup </li>
                                <li> Online Reputation Management </li>
                                <li> Marketing Campaigns </li>
                                <li> Political & Event Promotions/Campaigns </li>
                                <li> Applications, Branding Campaigns </li>

                            <ul>
                        </div>
                        <div class=" col-12 col-sm-6">
                            <div class="gallery row justify-content-center">
                                <a class="col-sm-3 item" href="/assets/images/portfolio-1.jpg">
                                    <img src="/assets/images/gallery-1.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-2.jpg">
                                    <img src="/assets/images/gallery-2.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-3.jpg">
                                    <img src="/assets/images/gallery-3.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-4.jpg">
                                    <img src="/assets/images/gallery-4.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-5.jpg">
                                    <img src="/assets/images/gallery-5.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-6.jpg">
                                    <img src="/assets/images/gallery-6.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-5.jpg">
                                    <img src="/assets/images/gallery-5.jpg" class="w-100">
                                </a>
                                <a class="col-sm-3 item" href="/assets/images/portfolio-6.jpg">
                                    <img src="/assets/images/gallery-6.jpg" class="w-100">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-1"></div>

                    </div>

                </main>
            </div>
        </div>
    </section>

@endsection