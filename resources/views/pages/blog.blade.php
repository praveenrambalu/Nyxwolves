<!DOCTYPE html>

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
    <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/about-us.jpg)">
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

   <!-- Blog -->
   <section id="blog" class="showcase blog-grid masonry">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2>Blog</h2>
                <p class="text-max-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus, id pellentesque mauris tincidunt.</p>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="row content blog-grid masonry">
            <main class="col-12 p-0">
                <div class="card-columns items">
                   @if (count($posts)>0)
                       @foreach ($posts as $post)
                       <div class="card p-0 text-center item">
                        <div class="image-over">
                            <img src="/storage/blog_images/{{$post->picture}}" alt="{{$post->title}} Image">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="/blog/posts/{{$post->id}}">
                                    <h4>{{$post->title}}</h4>
                                    <p></p>
                                </a>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                {{-- <a href="page-blog-single-post" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Doe</a> --}}
                                <a href="/blog/posts/{{$post->id}}" class="d-lg-flex align-items-center"><i
                                    class="icon-clock"></i>{{date('d-m-Y h:i A',strtotime($post->created_at))}}</a>
                            </div>
                        </div>
                    </div>
                       @endforeach
                       
                   @endif
                  
                    
                </div>
            </main>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul class="pagination justify-content-center">
                        {{-- <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="icon-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li> --}}
                        {{$posts->links()}}
                    </ul>
                </nav>
            </div>
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