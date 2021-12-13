<!DOCTYPE html>
<html lang="en">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <!-- Slick Carousel -->
    <link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet">
    <!-- Slick Carousel Theme -->
    <link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- FAVICON -->
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">

</head>

<body class="body-wrapper">


<nav class="navbar main-nav fixed-top navbar-expand-lg large">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="#feature">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollTo" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mr-auto">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }}">
                </div>
                <div class="copyright">
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }} All Rights Reserved
                    </p>
                </div>
            </div>
            <div class="col-lg-6 text-lg-right">
                <!-- Social Icons -->
                <ul class="social-icons list-inline">
                    <li class="list-inline-item">
                        <a target="_blank" href="https://facebook.com/themefisher"><i class="text-primary ti-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://twitter.com/themefisher"><i class="text-primary ti-twitter-alt"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://github.com/themefisher"><i class="text-primary ti-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://instagram.com/themefisher"><i class="text-primary ti-instagram"></i></a>
                    </li>
                </ul>
                <!-- Footer Links -->
                <ul class="footer-links list-inline">
                    <li class="list-inline-item">
                        <a class="scrollTo" href="/about">ABOUT</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="scrollTo" href="#team">TEAM</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="scrollTo" href="/contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPTS -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

<script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
