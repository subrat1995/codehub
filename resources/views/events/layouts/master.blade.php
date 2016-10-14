<!doctype html>
<html lang="en-US">
    

<head>

        <!-- Meta -->
        <meta charset="UTF-8">
        <title>Codehub | The official Coding Club of NIT Rourkela.</title>
        <meta name="keywords" content="Codehub, official, coding, club, nit, rourkela, coderush, lost, symbol, computer, science">
        <meta name="description" content="If you find coding fun — then you have landed at the right place.">
        <meta name="author" content="Subrat">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ URL::to('img/favicons/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ URL::to('img/favicons/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('img/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('img/favicons/apple-touch-icon-114x114.png') }}">
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/reset.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">
        
        <link href="http://fonts.googleapis.com/css?family=Raleway:300|Muli:300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('css/idangerous.swiper.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
        
        

    </head>

    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>

        <!-- Overlay -->
        <div id="overlay"></div>

        <!-- Top header -->
        <div id="top">

            <!-- Sidebar button -->
            <a href="#" id="sidebar-button"></a>
            
            <!-- Logo -->
            <header id="logo">
                <img src="{{URL::to('img/logo.png')}}" alt="Codehub">
            </header>

            <!-- Fullscreen slider navigation arrows -->
            <nav id="nav-arrows">
               
                
                
            </nav>
            <!-- Portfolio close button -->
            <a href="#" id="portfolio-close"></a>

        </div>
        @yield('body')
        @include('events.includes.sidenavbar')

        <!-- JavaScripts -->
        <script type='text/javascript' src="{{ URL::to('js/jquery.min.js') }}"></script>
        <script type='text/javascript' src="{{ URL::to('js/bootstrap.min.js') }}"></script>
        <script type='text/javascript' src="{{ URL::to('js/swiper/idangerous.swiper.min.js') }}"></script>
        <script type='text/javascript' src="{{ URL::to('js/masonry/masonry.pkgd.min.js') }}"></script>
        <script type='text/javascript' src="{{ URL::to('js/isotope/jquery.isotope.min.js') }}") }}"></script>
        <script type='text/javascript' src="{{ URL::to('js/custom.js') }}"></script>
        <script type='text/javascript' src="{{ URL::to('js/crypt.js') }}"></script>
        
        

    </body>

<!-- Mirrored from r6themes.com/rayleigh/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2016 18:49:49 GMT -->
</html>