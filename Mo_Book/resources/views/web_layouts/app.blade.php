<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('web_frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('web_frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('web_frontend/css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('web_frontend/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('web_frontend/css/styles.css') }}" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('web_frontend/images/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">


    <!-- Navbar -->
    @include('web_layouts.navbar')
    <!-- end of navbar -->

    <!-- footer -->
    @yield('content')
    <!-- end of navbar -->



    <!-- footer -->
    @include('web_layouts.footer')
    <!-- end of footer -->
    <!-- Scripts -->
    <script src="web_frontend/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="web_frontend/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="web_frontend/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="web_frontend/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="web_frontend/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="web_frontend/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="web_frontend/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="web_frontend/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="web_frontend/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="web_frontend/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
