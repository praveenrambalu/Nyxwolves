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
            <link rel="stylesheet" href="/assets/css/northbay-style.css">
</head>
<body>
    @include('inc.header_dark')

   
    <section id="logo-intro-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                  {{-- <img src="http://placehold.it/810x655" alt="" class="img img-responsive first-girl-image" > --}}
                  <img src="/assets/img/northbay/firstimage.png" alt="" class="img img-responsive first-girl-image" >
              </div>
              <div class="col-sm-6">
                  <img src="/assets/img/northbay/logo.png" class="img img-responsive logo-image">
              </div>
          </div>
      </div>
  </section>
  <section id="second-section-iphone">
      <div class="bluebar"></div>
      <div class="whitebar"></div>
      <div class="container-fluid iphone-section-rect">
          <div class="row">
              <div class="col-sm-6">
                  {{-- <img src="http://placehold.it/584x912" alt="" class="img img-responsive iphone-right-image" data-scroll=""> --}}
                  <img src="/assets/img/northbay/iphone.png" alt="" class="img img-responsive iphone-right-image" data-scroll="">
              </div>
              <div class="col-sm-6">
                  <p class="iphone-left-text">
                      With an extensive collection of trendy swimwear and beachwear, North Bay Bikini is one of the leading companies in their realm. 
                  </p>
              </div>
          </div>
      </div>
      <div class="whitebar"></div>

  </section>

  <section id="girl-standing-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                  <p class="girl-side-text">
                      Our dynamic team developed a vibrant and
                      robust plan to engage their clients on different social media sites.
                  </p>
              </div>
              <div class="col-sm-6">
                  {{-- <img src="http://placehold.it/584x914" class="img img-responsive girl-single-image" data-scroll=""> --}}
                  <img src="/assets/img/northbay/single-girl.png" class="img img-responsive girl-single-image" data-scroll="">
              </div>
          </div>
      </div>
  </section>

  <section id="second-iphone-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-7">
                  <img src="/assets/img/northbay/iphone2.png" class="img img-responsive second-iphone-image">
                  {{-- <img src="http://placehold.it/886x501" class="img img-responsive second-iphone-image"> --}}
              </div>
              <div class="col-sm-5">
                  <p class="with-over-text">
                      With over 100 posts in
just one month, the brand’s popularity skyrocketed and elevated the sales.

                  </p>
              </div>
          </div>
      </div>
  </section>

  <section id="social-media-section">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-4 text-center">
                  {{-- <img src="http://placehold.it/400" class="img  img-responsive left-image"> --}}
                  <img src="/assets/img/northbay/left-image.png" class="img  img-responsive left-image">
              </div>
              <div class="col-sm-4">
                  {{-- <img src="http://placehold.it/522x915" class="img img-responsive middle-phone" alt=""> --}}
                  <img src="/assets/img/northbay/middlePhone.png" class="img img-responsive middle-phone" alt="">
              </div>
              <div class="col-sm-4 text-center">
                  {{-- <img src="http://placehold.it/400" class="img  img-responsive right-image"> --}}
                  <img src="/assets/img/northbay/right-image.png" class="img  img-responsive right-image">
              </div>
          </div>
      </div>
  
  </section>
  <section class="white-frame-footer"></section> 

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