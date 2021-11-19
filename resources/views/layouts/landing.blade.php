<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Description">
        <meta name="author" content="Author">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="The Von Neumann Team" /> <!-- website name -->
        <meta property="og:site" content="https://thevonneumannteam.elsoft.com.py" /> <!-- website link -->
        <meta property="og:title" content="The Von Neumann Team"/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="Equipo de la Jornada de Extensión Universitaria de Mantenimiento Preventivo y Correctivo de la UNIDA - 11/2021" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="{{ asset('images/logocompacto.jpg') }}" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="https://thevonneumannteam.elsoft.com.py" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>VNT - Von Neumann Team</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
        <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/crosswords.css') }}" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        
        @include('includes.navigation')

        @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="{{ asset('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
        <script src="{{ asset('js/scripts.js') }}"></script> <!-- Custom scripts -->
        <script src="{{ asset('js/crosswords.js') }}"></script>
        @stack('scripts')

    </body>
</html>