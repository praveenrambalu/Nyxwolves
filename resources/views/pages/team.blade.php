<!DOCTYPE html>
@section('page','Team - ')

<html lang="en">

    <head>
            @include('inc.head')

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/theme-classic.css">
        <link rel="stylesheet" href="/assets/css/about.css">

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
  
            .showcase .card .image-over, .showcase .card:hover .image-over::before{
            border-radius:30px;
            }
            .showcase .card .image-over::before{
            background:none;
            }
            .card:not(.no-hover):hover{
                background:none !important;
            }
                .showcase .card:hover .image-over::before {
                background:none !important;
                }

                a.filter-button{
                    color: #9fa1b5 ;
                    margin-right: 4%;
                    padding-bottom: 1%;
                    cursor:pointer;
                    line-height: 3;
                }
                a.filter-button.active{
                    border-bottom: 1px solid #000;
                    color: #040402;
                }
                a.filter-button:hover{
                    color: #040402 ;
                  /* text-decoration: underline; */
                }
                

.team-content-prav p {
font-size: 10px;
}


img.lazy {
        opacity: 0;
      }
      img:not(.initial) {
        transition: opacity 1s;
      }
      img.initial,
      img.loaded,
      img.error {
        opacity: 1;
      }

      img:not([src]) {
        visibility: hidden;
      }
        </style>
        @include('inc.contact-form-white-style')
        <style>
            
        </style>
    </head>

    <body>
        <!-- Header -->
        @include('inc.header')

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd" style="background:linear-gradient(45deg,#00000012,#000000c4),url(/assets/images/banners/works.jpg); background-size:cover; background-repeat:no-repeat;">
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"> Team

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work -->
       <section id="custom-team">
           <div class="custom-container">
               <div class="row">
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=1" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=2" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=3" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=4" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=5" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=6" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=7" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=8" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=9" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=A" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-12 align-self-center">
                       <div class="team_card fadeInRight" data-scroll data-scroll-offset="20%">
                           <img data-src="//placehold.it/900x1192?text=B" class="lazy img img-repsonsive team_custom_image" alt="">
                           <div class="team-content">
                               <h3>John Doe</h3>
                               <p>Junior Developer</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
        @include('inc.scripts')
        @include('inc.contact-form-scripts')
<script>
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
           
            $(".filter-button").removeClass('active');
            $(this).addClass('active');
            if(value == "all")
            {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
            
            }
            else
            {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
            }
            });
            
            // if ($(".filter-button").removeClass("active")) {
            //     $(this).removeClass("active");
            // }
            //     $(this).addClass("active");
            
            // });

        </script>
        <script src="/assets/js/about.min.js"></script>

        <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
            <script>
                ScrollOut({
  onShown(el) {
    el.classList.add("animated");
  }
});

var lazyLoadInstance = new LazyLoad({
  // Your custom settings go here
});
lazyLoadInstance.update();
            </script>
        
    </body>
</html>