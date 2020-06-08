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
            
                --footer-1-bg-color: #111111;
                --footer-2-bg-color: #040402;
            }
        </style>
      @include('inc.contact-form-white-style')  
        
    </head>

    <body>
        @include('inc.preloader')
        <div class="fullpage">
        <!-- Header -->
        @include('inc.header')
        @yield('main-content')
        @include('inc.contact-form')
        @include('inc.footer')
        @include('inc.search-menu')
        @include('inc.scroll-to-top')  
    </div>
        @include('inc.scripts')
        @include('inc.contact-form-scripts')

    </body>
</html>