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
        <section id="work" class="showcase blog-grid">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center ">
                        
                     
                      

                    </div>
                   
                    <div class="text-center margin-center founding-team-container overflow-hidden">
                        <div class="founder-wrapper">
                            <figure class="clear-fix">
                                <img src="//placehold.it/300x200" class="grid-wd-100 va-top">
                                <figcaption class="va-top pad font-small futura">Ashwini Asokan <br> CEO </figcaption>
                            </figure>
                            <div class="founder-bio color-black font-small text-left futura-light">
                                <span class="display-block va-abs-m l-0 r-0 grid-wd-85 margin-center team-content-prav">
                                    <p>Ashwini Asokan is the CEO &amp; founder of Mad Street Den<sup>®</sup>. Ashwini and her team teach machines to see and experience the world like we humans do. Ashwini returned to India from Silicon Valley after more than a decade, to bootstrap her startup which she founded with her husband, Anand Chandrasekaran, a neuroscientist. As a product designer and cultural researcher, she explores how Artificial Intelligence can be brought out of the Science and Tech labs of the world, applied meaningfully and put in the hands of people across the globe.</p>
                                    <p>A Carnegie Mellon alumni, Ashwini's work typically sits at the intersection of technology, people and complex organizational systems. Until recently, she led the Mobile Innovation Portfolio as part of Intel Labs in California, driving research and development of cutting edge mobile products.</p>
                                    <p>
                                        <a class="float-left margin-r-1" href="https://twitter.com/ladyashborg" target="_blank">
                                            <img class="social-media-icon" src="/static/images/twitter-icon.png">
                                        </a>
                                        <a class="float-left margin-r-1" href="https://www.linkedin.com/in/ashwiniasokan" target="_blank">
                                            <img class="social-media-icon" src="/static/images/linkedin-icon.png">
                                        </a>
                                    </p>
                                </span>
                                <span class="close-icon close-bio"></span>
                            </div>
                        </div>
                        <div class="founder-wrapper">
                            <figure class="clear-fix">
                                <img src="//placehold.it/300x200" class="grid-wd-100 va-top">
                                <figcaption class="va-top pad font-small futura">Dr. Anand Chandrasekaran<br>CTO &amp; Neuroscientist </figcaption>
                            </figure>
                            <div class="founder-bio color-black font-small text-left futura-light">
                                <span class="display-block va-abs-m l-0 r-0 grid-wd-85 margin-center team-content-prav">
                                    <p>Anand is the CTO and founder of Mad Street Den<sup>®</sup>. A Neuroscientist &amp; Neuromorphic engineer by training, Anand comes from a History in academia. As a postdoctoral fellow at Stanford University he was a member of the team that built Neurogrid, a neuromorphic chip that simulates a million neurons in real-time. He also designed and simulated an axon router chip, enabling structural plasticity in addition to synaptic plasticity. His professional focus since has been technical computing in the realms of pattern recognition and machine learning.</p>
                                    <p>Prior to co-founding Mad Street Den<sup>®</sup>, Anand developed neural algorithms for real-world sensory classification problems in work with IBM, DARPA, and others. Anand holds a PhD degree in neuroscience from Baylor College of Medicine.</p>
                                    <p>
                                        <a class="float-left margin-r-1" href="https://www.linkedin.com/in/anandchandrasekaran" target="_blank">
                                            <img class="social-media-icon" src="/static/images/linkedin-icon.png">
                                        </a>
                                    </p>
                                </span>
                                <span class="close-icon close-bio"></span>
                            </div>
                        </div>
                        <div class="founder-wrapper">
                            <figure class="clear-fix">
                                <img src="//placehold.it/300x200" class="grid-wd-100 va-top">
                                <figcaption class="va-top pad font-small futura">Dr. Costa Colbert<br>Senior VP and Chief Scientist,<br>AI Labs</figcaption>
                            </figure>
                            <div class="founder-bio color-black font-small text-left futura-light">
                                <span class="display-block va-abs-m l-0 r-0 grid-wd-85 margin-center team-content-prav">
                                    <p>Costa is Senior VP and Chief Scientist at Mad Street Den<sup>®</sup> Labs. He is well-known internationally as an experimental and computational neuroscientist in the area of single neuron electrophysiology. He has been the principal investigator on grants from the National Institutes of Health and others to study how neurons encode and transmit information. After taking the leap from academia to industry, he built perhaps the first large-scale GPU-based neuron simulator, long before GPU's were widely used in machine learning. Subsequently, he developed advanced imaging and classification systems for the Naval Research Labs, NASA, and DHS before coming full circle to improve neuronal simulation with GPU's for NIH.</p>
                                    <p>He holds MD and PhD degrees in neuroscience from the University of Virginia along with biomedical engineering, electrical engineering and computer science degrees from Johns Hopkins University. He leads MSD's charter alongside Anand, building future neural network architectures that can enable more generalizable models of intelligence.</p>
                                    <p>
                                        <a class="float-left margin-r-1" href="https://www.linkedin.com/in/costa-colbert-854421106" target="_blank">
                                            <img class="social-media-icon" src="/static/images/linkedin-icon.png">
                                        </a>
                                    </p>
                                </span>
                                <span class="close-icon close-bio"></span>
                            </div>
                        </div>
                        <div class="founder-wrapper">
                            <figure class="clear-fix">
                                <img src="//placehold.it/300x200" class="grid-wd-100 va-top">
                                <figcaption class="va-top pad font-small futura">Ashwini Asokan <br> CEO </figcaption>
                            </figure>
                            <div class="founder-bio color-black font-small text-left futura-light">
                                <span class="display-block va-abs-m l-0 r-0 grid-wd-85 margin-center team-content-prav">
                                    <p>Ashwini Asokan is the CEO &amp; founder of Mad Street Den<sup>®</sup>. Ashwini and her team teach machines to see and experience the world like we humans do. Ashwini returned to India from Silicon Valley after more than a decade, to bootstrap her startup which she founded with her husband, Anand Chandrasekaran, a neuroscientist. As a product designer and cultural researcher, she explores how Artificial Intelligence can be brought out of the Science and Tech labs of the world, applied meaningfully and put in the hands of people across the globe.</p>
                                    <p>A Carnegie Mellon alumni, Ashwini's work typically sits at the intersection of technology, people and complex organizational systems. Until recently, she led the Mobile Innovation Portfolio as part of Intel Labs in California, driving research and development of cutting edge mobile products.</p>
                                    <p>
                                        <a class="float-left margin-r-1" href="https://twitter.com/ladyashborg" target="_blank">
                                            <img class="social-media-icon" src="/static/images/twitter-icon.png">
                                        </a>
                                        <a class="float-left margin-r-1" href="https://www.linkedin.com/in/ashwiniasokan" target="_blank">
                                            <img class="social-media-icon" src="/static/images/linkedin-icon.png">
                                        </a>
                                    </p>
                                </span>
                                <span class="close-icon close-bio"></span>
                            </div>
                        </div>
                        <div class="founder-wrapper">
                            <figure class="clear-fix">
                                <img src="//placehold.it/300x200" class="grid-wd-100 va-top">
                                <figcaption class="va-top pad font-small futura">Dr. Anand Chandrasekaran<br>CTO &amp; Neuroscientist </figcaption>
                            </figure>
                            <div class="founder-bio color-black font-small text-left futura-light">
                                <span class="display-block va-abs-m l-0 r-0 grid-wd-85 margin-center team-content-prav">
                                    <p>Anand is the CTO and founder of Mad Street Den<sup>®</sup>. A Neuroscientist &amp; Neuromorphic engineer by training, Anand comes from a History in academia. As a postdoctoral fellow at Stanford University he was a member of the team that built Neurogrid, a neuromorphic chip that simulates a million neurons in real-time. He also designed and simulated an axon router chip, enabling structural plasticity in addition to synaptic plasticity. His professional focus since has been technical computing in the realms of pattern recognition and machine learning.</p>
                                    <p>Prior to co-founding Mad Street Den<sup>®</sup>, Anand developed neural algorithms for real-world sensory classification problems in work with IBM, DARPA, and others. Anand holds a PhD degree in neuroscience from Baylor College of Medicine.</p>
                                    <p>
                                        <a class="float-left margin-r-1" href="https://www.linkedin.com/in/anandchandrasekaran" target="_blank">
                                            <img class="social-media-icon" src="/static/images/linkedin-icon.png">
                                        </a>
                                    </p>
                                </span>
                                <span class="close-icon close-bio"></span>
                            </div>
                        </div>
                        <div class="founder-wrapper">
                            <figure class="clear-fix">
                                <img src="//placehold.it/300x200" class="grid-wd-100 va-top">
                                <figcaption class="va-top pad font-small futura">Dr. Costa Colbert<br>Senior VP and Chief Scientist,<br>AI Labs</figcaption>
                            </figure>
                            <div class="founder-bio color-black font-small text-left futura-light">
                                <span class="display-block va-abs-m l-0 r-0 grid-wd-85 margin-center team-content-prav">
                                    <p>Costa is Senior VP and Chief Scientist at Mad Street Den<sup>®</sup> Labs. He is well-known internationally as an experimental and computational neuroscientist in the area of single neuron electrophysiology. He has been the principal investigator on grants from the National Institutes of Health and others to study how neurons encode and transmit information. After taking the leap from academia to industry, he built perhaps the first large-scale GPU-based neuron simulator, long before GPU's were widely used in machine learning. Subsequently, he developed advanced imaging and classification systems for the Naval Research Labs, NASA, and DHS before coming full circle to improve neuronal simulation with GPU's for NIH.</p>
                                    <p>He holds MD and PhD degrees in neuroscience from the University of Virginia along with biomedical engineering, electrical engineering and computer science degrees from Johns Hopkins University. He leads MSD's charter alongside Anand, building future neural network architectures that can enable more generalizable models of intelligence.</p>
                                    <p>
                                        <a class="float-left margin-r-1" href="https://www.linkedin.com/in/costa-colbert-854421106" target="_blank">
                                            <img class="social-media-icon" src="/static/images/linkedin-icon.png">
                                        </a>
                                    </p>
                                </span>
                                <span class="close-icon close-bio"></span>
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
    </body>
</html>