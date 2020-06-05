@extends('layouts.services')
@section('main-content')
    
        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/brand-identity.jpg)">
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
                                <h2 class="featured">Branding and Identity</h2>
                                <p>Branding is a way of showing the world who you are without the need to speak. Make your brand your identity through our creative design and development strategies. Our unique and innovative brand marketing strategy allows you to gain widespread brand awareness. Be it a startup or an established business, with vigorous branding we put you ahead of your competitors, right from its inception. Our powerful branding absolutely serves your every business requirement. With amazing designs that inculcate your ideas and goals, we promise a dynamic branding to each one of our customers.  </p>

                                <div class="gallery">
                                    <a href="/assets/images/news-3.jpg">
                                        <img src="/assets/images/news-3.jpg" class="w-100">
                                    </a>
                                </div>

                                <h4>Services Offered</h4>
                               
                                <ul>


                                    <li> Corporate Branding</li>
                                    <li> Brand Identity Design</li>
                                    <li> Standard Graphic Design</li>
                                    <li> Brand Marketing Strategy</li>
                                    <li> Packaging Design</li>
                                    <li> UI/UX Designing</li>
                                    <li> Design Prototyping</li>
                                    <li> Animated Video Production</li>
                                <ul>
                            </div>
                        </div>

                        <!-- Gallery -->
                        <div class="gallery row justify-content-center">
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-1.jpg">
                                <img src="/assets/images/gallery-1.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-2.jpg">
                                <img src="/assets/images/gallery-2.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-3.jpg">
                                <img src="/assets/images/gallery-3.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-4.jpg">
                                <img src="/assets/images/gallery-4.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-5.jpg">
                                <img src="/assets/images/gallery-5.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-6.jpg">
                                <img src="/assets/images/gallery-6.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-7.jpg">
                                <img src="/assets/images/gallery-7.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-8.jpg">
                                <img src="/assets/images/gallery-8.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-9.jpg">
                                <img src="/assets/images/gallery-9.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-10.jpg">
                                <img src="/assets/images/gallery-10.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-11.jpg">
                                <img src="/assets/images/gallery-11.jpg" class="w-100">
                            </a>
                            <a class="col-6 col-sm-4 col-md-3 col-lg-2 item" href="/assets/images/portfolio-12.jpg">
                                <img src="/assets/images/gallery-12.jpg" class="w-100">
                            </a>
                        </div>

                    </main>
                </div>
            </div>
        </section>
@endsection