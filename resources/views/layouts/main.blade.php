<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@section('title'){{ setting('site.title') }} - @show</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@section ('keywords')Garage Mobile @show"/>

    <meta name="language" content="fr"/>
    <meta name="copyright" content="//umoja-technology.com"/>
    <meta name="author" content="Guerth Manzala"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#78AB4E"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:site_name" content="{{ setting('site.title') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:language" content="{{ app()->getLocale() }}"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show"/>

    <!-- Schema.org meta pour Google+ -->
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">

    <!-- Card meta pour Twitter -->
    <meta name="twitter:card" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">
    <meta name="twitter:site" content="@GarageMobile">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <!-- Twitter summary card avec image large de 280x150px -->
    <meta name="twitter:image:src" content="@section ('meta-image'){{  Voyager::image(setting('site.meta_image')) }}@show">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('css')


    <!-- favicon -->
    <link rel=icon href="{{ asset('assets/umoja.png') }}" sizes="20x20" type="image/png">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!--Themefy Icons-->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--Video Popup-->
    <link rel="stylesheet" href="{{ asset('assets/css/rpopup.min.css') }}">
    <!--Slick Carousel-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="https://codingeek.net/html/coche/index.html" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- // search Popup -->

@include('partials.sidebar')

@include('partials.popup')

<!--Full Width Sider Start-->
<div class="full-width-slider">
    <!--Main Header Start-->
    <header {{ !request()->is('/') ? 'class=position-inherit border-none':  '' }}>
        <!--Topbar area-->
        <div class="topbar-area style-02">
            <div class="container">
                <div class="row">
                    <div class="topbar-inner">
                        <div class="left-content">
                            Contact d'urgence: (+243) 800 456 789
                        </div>
                        <div class="right-content">
                            <div class="social-icon">
                                <ul>
                                    @auth
                                        <li><a href="#" class="icon">Connnecté en tant que {{ auth()->user()->name }}</a></li>
                                    @endauth
                                    <li><a class="icon" href="https://twitter.com/codingeeknet" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                           target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                            <div class="custom-select-box style-02">
                                <select>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Top Bar Area End-->

        <div class="container">
            <div class="row">
                <div class="header-bottom-area">
                    <!--Logo Area Start-->
                    <div class="logo-area">
                        <a href="{{ route('home') }}">
                            <img src="{{ Voyager::image(setting('site.logo2')) }}" alt="Garage Mobile Logo">
                        </a>
                    </div>
                    <!--// Logo Area End-->
                   @include('partials.nav-bar')
                </div>
                <!--// header Bottom-->
            </div>
        </div>
    </header>
    <!--// Main Header End Here-->

   @yield('main-header')
</div>
<!--// Full Width Sider End-->


@yield('home-tab-section')

@yield('content')

@include('partials.footer')

<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<!--migrate-->
<script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--Mean Menu-->
<!--Jwuery UI-->
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- waypoint -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- wow -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!--Slick Js-->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('assets/js/jQuery.rcounter.js') }}"></script>
<!--Custom Video Popup-->
<script src="{{ asset('assets/js/jquery.rPopup.js') }}"></script>
<!--Nice Select-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- imageloaded -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!--Google Map API-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&callback=initMap"
    async defer></script> -->
<!--Google Map Active-->
<!-- <script src="assets/js/goolg-map-activate.js"></script> -->
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
