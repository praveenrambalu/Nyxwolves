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
    color: #000 !important;
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
            <link rel="stylesheet" href="/assets/css/kavya-style.css">
</head>
<body>
    @include('inc.header_dark')

    <div class="col-12 p-0">
        <div class="col-12 ">
                <img src="/assets/img/kavya/1 2.png" alt="" class="logo__img" />
        </div>
        <div class="col-12 p-0">
            <div class="col-8 col-sm-8" >
                <p class="disp_img_text">
                    Makeup<br />
                    Beyond<br />
                    Imagination
                </p>
            </div>
            <div class="col-12 col-sm-12 disp_img">
                <img src="/assets/img/kavya/2 2.png" alt="" width="60%" />
            </div>
        </div>
        <div class="col-12 doublequotes">
            <p>“</p>
        </div>
        <div class="col-12 text1" >
            <div class="row">
                <div class="col-6 p-0 folderonmob">
                    <p class="text2">
                        A Boutique<br />
                        Website<br />
                        Portfolio for a<br />
                        Makeup Artist<br />
                    </p>
                </div>
                <div class="col-6 p-0 folderonmob">
                    <p class="text3">
                        I was very passionate in the art of<br/>
                        applying makeup. My initial thoughts <br/>
                        when i pursued it was why there was <br/>
                        so many overdone makeups tutorials <br/>
                        and services around. Felt like I needed <br/>
                        to show people how to do Natural<br/>
                        Makeup looking towards enhancing<br/>
                        features rather than change them all<br/>
                        together. with minimal effort and with<br/>
                        extordinary results. It was my passion<br/>
                        turned into my profession.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="backcont">
    
            </div>
        </div>
        <div class="col-12 thirdimg__cont" >
            <img src="/assets/img/kavya/3 2.png" width="100%" alt="" >            
        </div>
        <div class="col-12" style="padding: 0 30px;" >
            <p class="text4">A complete <br/>
            Responsive <br/>
        Website</p>           
        </div>
        <div class="col-12 p-0">
            <img src="/assets/img/kavya/4 2.png" alt="" class="lastb4__img" />
        </div>
        
        <div class="col-12 p-0">
            <img src="/assets/img/kavya/Untitled-5 1.png" alt="" class="" width="100%" />
        </div>
        <div class="col-12">
            <div class="backcont2">
    
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