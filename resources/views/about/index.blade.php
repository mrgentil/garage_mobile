@extends('layouts.main')

@section('title') @parent A propos de nous @endsection

@section('description')
    {{ setting('site.description') }}
@endsection

@section('keywords')
    {{ setting('site.keywords') }}
@endsection

@section('meta-image')
    {{ Voyager::image(setting('site.logo')) }}
@endsection

@section('content')

    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url({{ asset('assets/img/breadcrumb/01.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">A propos de nous</h1>
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>A propos de nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->

    <!--About Story Start-->
    <section class="about-story-section padding-top-120 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="common-section-content">
                        <!--Section Title-->
                        <div class="section-title padding-bottom-20">
                            <h2 class="heading-02">About Story</h2>
                        </div>
                        <!--// Section Title End-->
                        <div class="paragraph padding-bottom-15">
                            <p>This is a list of automotive parts mostly for vehicles using interna combustion eng- ines
                                which are
                                manufactured components of automobiles This category is for components and parts that
                                make up
                                automobile (car) bodies including accessories.On motorbikes their main function is to
                                shield the rider from wind,
                                though not as completely as in a car, whereas on sports and racing motorcycles the main
                                function is reducing drag
                                when the rider On motorbikes their main function is to shield the rider from wind,
                                though not as completely as in a car,
                                whereas on sports and racing motorcycles the main function is reducing drag when the
                                rider</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="thumb">
                        <img src="assets/img/about-us/01.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="paragraph padding-top-20">
                        <p>This is a list of automotive parts mostly for vehicles using interna combustion eng- ines
                            which are
                            manufactured components of automobiles This category is for components and parts that make
                            up
                            automobile (car) bodies including accessories.On motorbikes their main function is to shield
                            the rider from wind,
                            though not as completely as in a car, whereas on sports and racing motorcycles the main
                            function is reducing drag
                            when the rider</p>

                        <p>On motorbikes their main function is to shield the rider from wind, though not as completely
                            as in a car,
                            whereas on sports and racing motorcycles the main function is reducing drag when the rider
                        </p>
                    </div>
                </div>
            </div>
            <!--// Row-->
        </div>
        <!--// Container-->
    </section>
    <!--// About Story End-->


    <!-- Our Mission Section-->
    <section class="our-mission-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-mission-section__left">
                        <!--Work Items-->
                        <div class="our-mission-section__left__items">
                            <div class="work-tiems-inner">
                                <div class="padding-bottom-20">
                                    <h4 class="items-title">Easy Financing</h4>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and industry.
                                    Lorem Ipsum has been the industry's standard</p>
                            </div>
                            <div class="items-number">01</div>
                        </div>
                        <!--// Work Items-->

                        <!--Work Items-->
                        <div class="our-mission-section__left__items white">
                            <div class="section-title">
                                <h2 class="heading-02">Our Mission</h2>
                            </div>
                        </div>
                        <!--// Work Items-->

                        <!--Work Items-->
                        <div class="our-mission-section__left__items borderr">
                            <div class="work-tiems-inner">
                                <div class="padding-bottom-20">
                                    <h4 class="items-title">All Brands Cars</h4>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and industry.
                                    Lorem Ipsum has been the industry's standard</p>
                            </div>
                            <div class="items-number">02</div>
                        </div>
                        <!--// Work Items-->

                        <!--Work Items-->
                        <div class="our-mission-section__left__items">
                            <div class="work-tiems-inner">
                                <div class="padding-bottom-20">
                                    <h4 class="items-title">Quality Services</h4>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and industry.
                                    Lorem Ipsum has been the industry's standard </p>
                            </div>
                            <div class="items-number">03</div>
                        </div>
                        <!--// Work Items-->


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="assets/img/service/details-02.png" alt="img">
                    </div>
                    <div class="our-mission-section__right">
                        <div class="paragraph">
                            <p>
                                This is a list of automotive parts mostly for vehicles using internal combustion eng-
                                ines which are manufactured
                                components of automobiles.This category is for components and parts that make up
                                automobile (car) bodies including accessories.
                            </p>

                            <p>
                                This is a list of automotive parts mostly for vehicles using internal combustion eng-
                                ines which are manufactured
                                components of automobiles.This category is for components and parts that make up
                                automobile (car) bodies including
                            </p>
                        </div>
                    </div>
                    <!--// Mission Right Scetion-->
                </div>
            </div>
        </div>
    </section>
    <!--// Our Mission Section-->


    <!--Out Team Section-->
    <div class="our-team-section padding-110 md-padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center">
                        <!--Section Title-->
                        <div class="section-title">
                            <div class="padding-bottom-10">
                                <h6 class="title both-line uppercase gray"> our team </h6>
                            </div>
                            <h2 class="heading-02">Meet The Our Sales Team</h2>
                        </div>
                        <!--// Section Title-->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="padding-top-70">
                        <div class="h2-our-team-slider-active row">
                            <div class="col-lg-12">
                                <div class="home-2-our-team-items">
                                    <div class="items-inner">
                                        <!-- Team image-->
                                        <div class="team-thumb-area">
                                            <div class="thumb">
                                                <img src="assets/img/home-02/team-1.png" alt="img">
                                                <ul class="social-icon">
                                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a class="icon"
                                                           href="https://www.linkedin.com/company/codingeek/about"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="number">
                                                <span class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </span>
                                                +88018-18200-00
                                            </div>
                                        </div>
                                        <!--// Team image-->
                                        <div class="team-content-area">
                                            <div class="content-bg">
                                                <h4 class="name">Pual Linkon</h4>
                                                <span class="designation">Director</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Our Team items-->
                            <div class="col-lg-12">
                                <div class="home-2-our-team-items">
                                    <div class="items-inner">
                                        <!-- Team image-->
                                        <div class="team-thumb-area">
                                            <div class="thumb">
                                                <img src="assets/img/home-02/team-2.png" alt="img">
                                                <ul class="social-icon">
                                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a class="icon"
                                                           href="https://www.linkedin.com/company/codingeek/about"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="number">
                                                <span class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </span>
                                                +88018-18200-00
                                            </div>
                                        </div>
                                        <!--// Team image-->
                                        <div class="team-content-area">
                                            <div class="content-bg">
                                                <h5 class="name">Kisont Hayat</h5>
                                                <span class="designation">Sales Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Our Team items-->
                            <div class="col-lg-12">
                                <div class="home-2-our-team-items">
                                    <div class="items-inner">
                                        <!-- Team image-->
                                        <div class="team-thumb-area">
                                            <div class="thumb">
                                                <img src="assets/img/home-02/team-3.png" alt="img">
                                                <ul class="social-icon">
                                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a class="icon"
                                                           href="https://www.linkedin.com/company/codingeek/about"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="number">
                                                <span class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </span>
                                                +88018-18200-00
                                            </div>
                                        </div>
                                        <!--// Team image-->
                                        <div class="team-content-area">
                                            <div class="content-bg">
                                                <h5 class="name">Nadiya Surma</h5>
                                                <span class="designation">CO-Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Our Team items-->
                            <div class="col-lg-12">
                                <div class="home-2-our-team-items">
                                    <div class="items-inner">
                                        <!-- Team image-->
                                        <div class="team-thumb-area">
                                            <div class="thumb">
                                                <img src="assets/img/home-02/team-4.png" alt="img">
                                                <ul class="social-icon">
                                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a class="icon"
                                                           href="https://www.linkedin.com/company/codingeek/about"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="number">
                                                <span class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </span>
                                                +88018-18200-00
                                            </div>
                                        </div>
                                        <!--// Team image-->
                                        <div class="team-content-area">
                                            <div class="content-bg">
                                                <h5 class="name">Merina Jonse</h5>
                                                <span class="designation">Marketing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Our Team items-->
                            <div class="col-lg-12">
                                <div class="home-2-our-team-items">
                                    <div class="items-inner">
                                        <!-- Team image-->
                                        <div class="team-thumb-area">
                                            <div class="thumb">
                                                <img src="assets/img/home-02/team-2.png" alt="img">
                                                <ul class="social-icon">
                                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a class="icon"
                                                           href="https://www.linkedin.com/company/codingeek/about"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="number">
                                                <span class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </span>
                                                +88018-18200-00
                                            </div>
                                        </div>
                                        <!--// Team image-->
                                        <div class="team-content-area">
                                            <div class="content-bg">
                                                <h5 class="name">William Henry</h5>
                                                <span class="designation">Auto Mechanic</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Our Team items-->
                            <div class="col-lg-12">
                                <div class="home-2-our-team-items">
                                    <div class="items-inner">
                                        <!-- Team image-->
                                        <div class="team-thumb-area">
                                            <div class="thumb">
                                                <img src="assets/img/home-02/team-3.png" alt="img">
                                                <ul class="social-icon">
                                                    <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                           target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                           target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a class="icon"
                                                           href="https://www.linkedin.com/company/codingeek/about"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="number">
                                                <span class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </span>
                                                +88018-18200-00
                                            </div>
                                        </div>
                                        <!--// Team image-->
                                        <div class="team-content-area">
                                            <div class="content-bg">
                                                <h5 class="name">Pual Linkon</h5>
                                                <span class="designation">Director</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Our Team items-->
                        </div>
                        <!--// Slider Active-->

                        <div class="team-slider-arrow"></div>
                    </div>
                </div>
            </div>
            <!--// Row-->
        </div>
        <!--// Container-->
    </div>
    <!--// Out Team Section-->


    <!--Our Latest New Section-->
    <section class="latest-news style-02 padding-top-110 padding-bottom-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Section Title-->
                    <div class="section-title">
                        <h6 class="title uppercase white">News From Blog</h6>
                        <div class="padding-top-10 padding-bottom-60">
                            <h2 class="heading-02 white">Our Latest News</h2>
                        </div>
                    </div>
                    <!--// Section Title-->
                </div>
                <div class="col-lg-12">
                    <div class="latest-news-slider-wrap padding-top-10">
                        <div class="slider-arrow"></div>
                        <!--// Slider Arrow-->
                        <div class="latest-news-slider-active row">
                            <div class="col-lg-12">
                                <div class="latest-news-slider-items">
                                    <div class="cards">
                                        <div class="cards-img"><img src="assets/img/latest-news/01.png" alt="img"></div>
                                        <div class="cards-body">
                                            <div class="padding-bottom-20">
                                                <h5 class="heading-05"><a href="#">What is Important for Product Design
                                                        or
                                                        Sales</a></h5>
                                            </div>
                                            <div class="name-date">
                                                <div class="author-name"><i class="icon flaticon-avatar"></i>Tim Brown
                                                </div>
                                                <div class="publish-date"><i class="icon flaticon-small-calendar"></i>
                                                    May
                                                    26, 2021</div>
                                            </div>
                                        </div>
                                        <!--// Cards Body-->
                                    </div>
                                    <!--//cards-->
                                </div>
                            </div>
                            <!--// Items-->
                            <div class="col-lg-12">
                                <div class="latest-news-slider-items">
                                    <div class="cards">
                                        <div class="cards-img"><img src="assets/img/latest-news/02.png" alt="img"></div>
                                        <div class="cards-body">
                                            <div class="padding-bottom-20">
                                                <h5 class="heading-05"><a href="#">What is Important for Product Design
                                                        or
                                                        Sales</a></h5>
                                            </div>
                                            <div class="name-date">
                                                <div class="author-name"><i class="icon flaticon-avatar"></i>Tim Brown
                                                </div>
                                                <div class="publish-date"><i
                                                        class="icon flaticon-small-calendar"></i>May
                                                    26, 2021</div>
                                            </div>
                                        </div>
                                        <!--// Cards Body-->
                                    </div>
                                </div>
                            </div>
                            <!--// Items-->
                            <div class="col-lg-12">
                                <div class="latest-news-slider-items">
                                    <div class="cards">
                                        <div class="cards-img"><img src="assets/img/latest-news/03.png" alt="img"></div>
                                        <div class="cards-body">
                                            <div class="padding-bottom-20">
                                                <h5 class="heading-05"><a href="#">What is Important for Product Design
                                                        or
                                                        Sales</a></h5>
                                            </div>
                                            <div class="name-date">
                                                <div class="author-name"><i class="icon flaticon-avatar"></i>Tim Brown
                                                </div>
                                                <div class="publish-date"><i
                                                        class="icon flaticon-small-calendar"></i>May
                                                    26, 2021</div>
                                            </div>
                                        </div>
                                        <!--// Cards Body-->
                                    </div>
                                </div>
                            </div>
                            <!--// Items-->
                            <div class="col-lg-12">
                                <div class="latest-news-slider-items">
                                    <div class="cards">
                                        <div class="cards-img"><img src="assets/img/latest-news/04.png" alt="img"></div>
                                        <div class="cards-body">
                                            <div class="padding-bottom-20">
                                                <h5 class="heading-05"><a href="#">What is Important for Product Design
                                                        or
                                                        Sales</a></h5>
                                            </div>
                                            <div class="name-date">
                                                <div class="author-name"><i class="icon flaticon-avatar"></i>Tim Brown
                                                </div>
                                                <div class="publish-date"><i
                                                        class="icon flaticon-small-calendar"></i>May
                                                    26, 2021</div>
                                            </div>
                                        </div>
                                        <!--// Cards Body-->
                                    </div>
                                </div>
                            </div>
                            <!--// Items-->
                            <div class="col-lg-12">
                                <div class="latest-news-slider-items">
                                    <div class="cards">
                                        <div class="cards-img"><img src="assets/img/latest-news/03.png" alt="img"></div>
                                        <div class="cards-body">
                                            <div class="padding-bottom-20">
                                                <h5 class="heading-05"><a href="#">What is Important for Product Design
                                                        or
                                                        Sales</a></h5>
                                            </div>
                                            <div class="name-date">
                                                <div class="author-name"><i class="icon flaticon-avatar"></i>Tim Brown
                                                </div>
                                                <div class="publish-date"><i
                                                        class="icon flaticon-small-calendar"></i>May
                                                    26, 2021</div>
                                            </div>
                                        </div>
                                        <!--// Cards Body-->
                                    </div>
                                </div>
                            </div>
                            <!--// Items-->
                        </div>
                        <!--// Slider Active Class-->

                        <div class="latest-news-slider-progressbar">
                            <div class="progress-bar">
                                <div class="porgress-bar-active"></div>
                            </div>
                        </div>
                        <!--// Slider Progressbar-->
                    </div>
                    <!--// Latest News Slider Wrap-->
                </div>
            </div>
        </div>
    </section>
    <!--//Our Latest New Section End-->
@endsection
