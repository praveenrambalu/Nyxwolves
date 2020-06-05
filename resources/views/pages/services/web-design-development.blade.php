@extends('layouts.services')
@section('main-content')
    
        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/web-design.jpg)">
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
                            <h2 class="featured">Web Design & Development</h2>
                            <p>Our exceptionally talented pack of developers and designers understand your every need to
                                create a dynamic and aesthetic website design. We curate content to effectively
                                communicate and create potential customers. From the development of a simple and elegant
                                user interface to the integration of powerful eCommerce system to your website, we
                                ensure visually rich and customer-centric websites to enhance your growth. Your website
                                is the manifestation of your business and it’s our responsibility to create an impact
                                and help you make a difference. </p>

                            <div class="gallery">
                                <a href="/assets/images/news-3.jpg">
                                    <img src="/assets/images/news-3.jpg" class="w-100">
                                </a>
                            </div>

                           </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-5">

                            <h4>Services Offered</h4>
                           
                            <ul>


                                <li> Responsive, Mobile Friendly Websites </li>
                                <li> Front-End Development </li>
                                <li> Back-End Development </li>
                                <li> Web Applications </li>
                                <li> Corporate Websites </li>
                                <li> Blogs & Personal Websites </li>
                                <li> Content Management Systems </li>
                                <li> E-Commerce Websites </li>
                                <li> Testing & Optimization </li>
                                <li> Hosting & Support </li>

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