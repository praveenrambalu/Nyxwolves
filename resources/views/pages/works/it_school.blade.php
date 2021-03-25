<!DOCTYPE html>
@section('page','Works - ')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('inc.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/theme-classic.css">

        <!-- ==============================================
        Section Configuration
        =============================================== -->
        <style>
            .navbar .nav-link.effect-motion-hover {
    color: #fff !important;
  }
  
  
  
  .navbar-sticky .nav-link.effect-motion-hover {
    color: #fff !important;
  }
  
  .navbar .navbar-nav.toggle li a {
    color: #000 !important;
  }
  .navbar-sticky .navbar-nav.toggle li a {
    color: #fff !important;
  }
  
  
  
  section{
    padding: 0 ;
  }
  #footer{
    background:#111111
 }
 #copyright{
     background:#040402
 }
 body{
     background:#fff;
 }
        </style>
            <link rel="stylesheet" href="/assets/css/it_school.css">
</head>
<body>
    @include('inc.header_dark')

   
    <div id="it_school_banner">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/itschool/logo.png" class="img img-responsive it_school_logo" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <span class="banner-bar gray"></span>
                    <h1 class="banner_text"><span>THE
                        DIGITAL 
                        SCHOOL: 
                        </span>LEARNING DIFFERENTLY IS POSSIBLE</h1>

                </div>
                <div class="col-sm-6">
                    <img src="/assets/img/itschool/bannerimag.png" class="img img-responsive banner_image" alt="">
                    <span class="banner-bar red"></span>
                    
                </div>
            </div>


        </div>


    </div>

    <div id="it_school_deliverables">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="deliverables-title">
                        <h1>Deliverables</h1>
                        <span ></span>
                    </div>

                    <div class="deliverables-content">
                        <h3>Logo</h3>
                        <h3>A Complete Responsive Website</h3>

                        <img src="/assets/img/itschool/deliverables.png" class="img img-repsonsive" alt="">

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="divider_section full">
       <div class="custom-container">
           <div class="row">
               <div class="col-sm-12">
                   <h1>Course <br> and Activities</h1>
               </div>
           </div>
       </div>
    </div>
    <div class="courses_activities">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <p>Modeling and 3D printing for children</p>
                    <p>Create your first mobile application from 8 years old</p>
                    <p>Online Python Programming Course</p>
                    <p>Programming course with the Scratch language</p>
                    <p>Software Training</p>
                </div>
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/itschool/courses_activities.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div>
   
    <div class="divider_section half">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-center">
                    <h1>Internships</h1>
                </div>
            </div>
        </div>
     </div>
     <div class="internships">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <img src="/assets/img/itschool/internships.png" class="img img-responsive " alt="">
                </div>
                <div class="col-sm-6 align-self-center">
                    <p>ROBOTICS AND PROGRAMMING</p>
                    <p>CREATION OF MOBILE APPLICATIONS</p>
                    <p>3D MODELING AND PRINTING</p>
                </div>
               
            </div>
        </div>
    </div>

    <div class="forums">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h3>Succeed, teach, learn
                        differently with digital
                        technology</h3>

                    <p>This forum was created to
                        discuss the contribution of
                        digital technology (or other
                        innovative concept) in
                        learning.</p>

                    <p>It is intended to be a place of
                        exchange and sharing on the
                        contribution of these “new
                        methods” and supports.</p>

                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="forum-image-holder">
                        <img src="/assets/img/itschool/forums.png" class="img img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clean-title">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>And a Clean and Elegant</h2>
                    <h1>Design</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="clean_phone">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/assets/img/itschool/design.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="it_school_footer">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="/assets/img/itschool/footer_logo.png" class="img img-responsive " alt="">
                </div>
            </div>
        </div>
    </div> 

@include('inc.footer')
@include('inc.search-menu')
@include('inc.scripts')
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
<script>
  window.onload = function () {
    ScrollOut({
      threshold: 0.5,
    });
  };
</script>
</body>
</html>