<!DOCTYPE html>
{{-- @section('page','{{$post->title}} - ') --}}
@section('page','Blog - ')

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

</head>

<body>
    <!-- Header -->
   @include('inc.header')


    <!-- Banner -->
    <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/about-us.jpg);  background-size:cover; background-repeat:no-repeat;">
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
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">{{$post->title}}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="blog" class="single">
        <div class="container">
            <div class="row content">
                <div class="col-12 col-lg-2"></div>
                <main class="col-12 col-lg-8 p-0">

                    <!-- Text -->
                    <div class="row">
                        <div class="col-12 align-self-center">
                            {!!$post->description!!}
                            <div class="gallery">
                                <a >
                                <img src="/storage/blog_images/{{$post->picture}}" class="w-100">
                                </a>
                            </div>

                        </div>
                    </div>


                    <!-- Post Holder -->
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <ul class="post-holder">
                                <li class="post-meta-item">
                                <time class="date"><span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2018-11-01T06:18:46+00:00">{{date('M  d ,Y',strtotime($post->created_at))}}</time></a></span></time>
                                </li>
                            </ul>
                        </div>
                    </div>

        
                </main>
                {{-- <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">

                    
                    <!-- Categories -->
                    <div class="row item">
                        <div class="col-12 align-self-center">
                            <h4 class="title">Categories</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Technology</a>
                                    <span class="badge circle">23</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Education</a>
                                    <span class="badge circle">41</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Industry</a>
                                    <span class="badge circle">26</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Development</a>
                                    <span class="badge circle">75</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Architecture</a>
                                    <span class="badge circle">39</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="#">Management</a>
                                    <span class="badge circle">62</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                    <!-- Tags -->
                    <div class="row item">
                        <div class="col-12 align-self-center">
                            <h4 class="title">Tags</h4>
                            <div class="ml--03">
                                <span class="badge tag active">Technology</span>
                                <span class="badge tag">App</span>
                                <span class="badge tag">Health</span>
                                <span class="badge tag">Industry</span>
                                <span class="badge tag">Work</span>
                                <span class="badge tag">Mobile</span>
                                <span class="badge tag">Management</span>
                                <span class="badge tag">Development</span>
                                <span class="badge tag">Education</span>
                                <span class="badge tag">Business</span>
                            </div>
                        </div>
                    </div>

                        
                    <!-- Share This -->
                   <div class="row item">
                        <div class="col-12 align-self-center">
                            <h4 class="title">Share This</h4>
                            <ul class="navbar-nav social share-list">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>     

                </aside> --}}
            </div>
        </div>
    </section>




    

    <!-- Footer -->
  
    @include('inc.footer')

    @include('inc.search-menu')
    @include('inc.scroll-to-top')

    <!-- ==============================================
        Vendor Scripts
        =============================================== -->
   @include('inc.scripts')
   <script src="/assets/js/counter.js"></script>
</body>

</html>