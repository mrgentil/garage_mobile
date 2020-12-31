@extends('layouts.main')

@section('title') @parent Accueil @endsection

@section('description')
    {{ setting('site.description') }}
@endsection

@section('keywords')
    {{ setting('site.keywords') }}
@endsection

@section('meta-image')
    {{ Voyager::image(setting('site.logo')) }}
@endsection

@section('main-header')
    @include('partials.header')
@endsection

@section('home-tab-section')
    @include('partials.tab-section')
@endsection

@section('content')
    <!--How We Are Section Start-->
    <section class="how-we-are padding-top-120 padding-bottom-110">

        <!-- Side form icons -->
        <div id="service_info_item" class="side-form-icons">
            <i class="icon flaticon-placeholder" id="open-location-popup"></i>
            <i class="icon flaticon-email" id="open-message-popup"></i>
            <i class="icon flaticon-phone-call" id="open-contact-popup"></i>
        </div>
        <!--// Side form icons -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!--Section Left Content-->
                    <div class="common-section-content">
                        <!--Section Title-->
                        <div class="section-title">
                            <div class="padding-bottom-10">
                                <h6 class="title uppercase gray"> Ce que nous sommes </h6>
                            </div>
                            <h2 class="heading-02">Ümoja  Driving Solution </h2>
                        </div>
                        <!--// Section Title End-->
                        <div class="paragraph padding-top-20 padding-bottom-25">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                            </p>
                            <p>
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                PageMaker including versions
                                of Lorem Ipsum
                            </p>
                        </div>
                        <div class="how-we-are__offer-section">
                            <div class="how-we-are__offer-section__item">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icons/03.png') }}" alt="img">
                                    </div>
                                </div>
                                <h6 class="heading-06">WE OFFERS LOWER CARS PRICES</h6>
                            </div>
                            <div class="how-we-are__offer-section__item">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icons/04.png') }}" alt="img">
                                    </div>
                                </div>
                                <h6 class="heading-06">LARGEST CARS DEALER SHIP</h6>
                            </div>
                            <div class="how-we-are__offer-section__item">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icons/05.png') }}" alt="img">
                                    </div>
                                </div>
                                <h6 class="heading-06">MULTIPOINT SAFETY CHECKS OFFERS</h6>
                            </div>
                        </div>
                        <!--// Offer Section-->

                    </div>
                    <!--// Section Left Content End-->
                </div>
                <div class="col-lg-6">
                    <!--Section Right Content-->
                    <div class="section-border-image margin-left white-gray">
                        <div class="border-design">
                            <div class="border-bg full-bg"></div>
                            <div class="we-are-img">
                                <img src="{{ asset('assets/img/home-02/01.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <!--// Section Right Content End-->
                </div>
            </div>
            <!--// Row End-->
        </div>
        <!--// Container End-->
    </section>
    <!--// How We Are Section End-->
    <!--Featured Vehicles Section-->
    <section class="featured-vehicles-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <!--Section Title-->
                    <div class="section-title text-center">
                        <div class="padding-bottom-15">
                            <h6 class="title both-line uppercase gray"> Récentes Voitures </h6>
                        </div>
                        <h2 class="heading-02 padding-bottom-70">Nouveaux arrivages</h2>
                    </div>
                    <!--// Section Title End-->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-vehicle-slider">
                        <div class="vehicle-slider-active">
                            <!--Home 02 Vehicle Slider items-->
                            <div class="h2-vehicle-slider-items">
                                <div class="items-head">
                                    <img src="assets/img/home-02/slider-01.png" alt="img">
                                </div>
                                <div class="items-body">
                                    <h5 class="heading-05">Mercedes S-Class</h5>
                                    <ul class="list-items-wrap">
                                        <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                                Model:</span> 2017 </li>
                                        <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                Speed:</span> 182mph </li>
                                        <li class="list-items"> <i class="flaticon-fuel-station"></i><span
                                                class="title"> Auto: </span> Petrol </li>
                                        <li class="list-items"> <i class="flaticon-engine"></i><span class="title">
                                                Engine:</span> 563hp </li>
                                    </ul>
                                </div>
                                <div class="main-btn-wrap text-center">
                                    <a href="#" class="main-btn gray-border uppercase">EXPLORE</a>
                                </div>
                            </div>
                            <!--//Home 02 Vehicle Slider items-->

                            <!--Home 02 Vehicle Slider items-->
                            <div class="h2-vehicle-slider-items">
                                <div class="items-head">
                                    <img src="assets/img/home-02/slider-02.png" alt="img">
                                </div>
                                <div class="items-body">
                                    <h5 class="heading-05">Mercedes A-Class</h5>
                                    <ul class="list-items-wrap">
                                        <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                                Model:</span> 2017 </li>
                                        <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                Speed:</span> 182mph </li>
                                        <li class="list-items"> <i class="flaticon-fuel-station"></i><span
                                                class="title"> Auto: </span> Petrol </li>
                                        <li class="list-items"> <i class="flaticon-engine"></i><span class="title">
                                                Engine:</span> 563hp </li>
                                    </ul>
                                </div>
                                <div class="main-btn-wrap text-center">
                                    <a href="#" class="main-btn gray-border uppercase">EXPLORE</a>
                                </div>
                            </div>
                            <!--// Home 02 Vehicle Slider items-->

                            <!--Home 02 Vehicle Slider items-->
                            <div class="h2-vehicle-slider-items">
                                <div class="items-head">
                                    <img src="assets/img/home-02/slider-03.png" alt="img">
                                </div>
                                <div class="items-body">
                                    <h5 class="heading-05">Mercedes AMG GT</h5>
                                    <ul class="list-items-wrap">
                                        <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                                Model:</span> 2017 </li>
                                        <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                Speed:</span> 182mph </li>
                                        <li class="list-items"> <i class="flaticon-fuel-station"></i><span
                                                class="title"> Auto: </span> Petrol </li>
                                        <li class="list-items"> <i class="flaticon-engine"></i><span class="title">
                                                Engine:</span> 563hp </li>
                                    </ul>
                                </div>
                                <div class="main-btn-wrap text-center">
                                    <a href="#" class="main-btn gray-border uppercase">EXPLORE</a>
                                </div>
                            </div>
                            <!--// Home 02 Vehicle Slider items-->

                            <!--Home 02 Vehicle Slider items-->
                            <div class="h2-vehicle-slider-items">
                                <div class="items-head">
                                    <img src="assets/img/home-02/slider-04.png" alt="img">
                                </div>
                                <div class="items-body">
                                    <h5 class="heading-05">Mercedes CLS</h5>
                                    <ul class="list-items-wrap">
                                        <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                                Model:</span> 2017 </li>
                                        <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                Speed:</span> 182mph </li>
                                        <li class="list-items"> <i class="flaticon-fuel-station"></i><span
                                                class="title"> Auto: </span> Petrol </li>
                                        <li class="list-items"> <i class="flaticon-engine"></i><span class="title">
                                                Engine:</span> 563hp </li>
                                    </ul>
                                </div>
                                <div class="main-btn-wrap text-center">
                                    <a href="#" class="main-btn gray-border uppercase">EXPLORE</a>
                                </div>
                            </div>
                            <!--// Home 02 Vehicle Slider items-->

                            <!--Home 02 Vehicle Slider items-->
                            <div class="h2-vehicle-slider-items">
                                <div class="items-head">
                                    <img src="assets/img/home-02/slider-01.png" alt="img">
                                </div>
                                <div class="items-body">
                                    <h5 class="heading-05">Mercedes C-Class</h5>
                                    <ul class="list-items-wrap">
                                        <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                                Model:</span> 2017 </li>
                                        <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                Speed:</span> 182mph </li>
                                        <li class="list-items"> <i class="flaticon-fuel-station"></i><span
                                                class="title"> Auto: </span> Petrol </li>
                                        <li class="list-items"> <i class="flaticon-engine"></i><span class="title">
                                                Engine:</span> 563hp </li>
                                    </ul>
                                </div>
                                <div class="main-btn-wrap text-center">
                                    <a href="#" class="main-btn gray-border uppercase">EXPLORE</a>
                                </div>
                            </div>
                            <!--// Home 02 Vehicle Slider items-->

                            <!--Home 02 Vehicle Slider items-->
                            <div class="h2-vehicle-slider-items">
                                <div class="items-head">
                                    <img src="assets/img/home-02/slider-02.png" alt="img">
                                </div>
                                <div class="items-body">
                                    <h5 class="heading-05">Mercedes GLA</h5>
                                    <ul class="list-items-wrap">
                                        <li class="list-items"> <i class="flaticon-car-1"></i><span class="title">
                                                Model:</span> 2017 </li>
                                        <li class="list-items"> <i class="flaticon-speedometer"></i><span class="title">
                                                Speed:</span> 182mph </li>
                                        <li class="list-items"> <i class="flaticon-fuel-station"></i><span
                                                class="title"> Auto: </span> Petrol </li>
                                        <li class="list-items"> <i class="flaticon-engine"></i><span class="title">
                                                Engine:</span> 563hp </li>
                                    </ul>
                                </div>
                                <div class="main-btn-wrap text-center">
                                    <a href="#" class="main-btn gray-border uppercase">EXPLORE</a>
                                </div>
                            </div>
                            <!--// Home 02 Vehicle Slider items-->
                        </div>
                        <!--// Slider Active -->
                    </div>
                    <!--// Featured Vehicle Slider-->

                </div>
            </div>
            <!--// Row-->
        </div>
        <!--Container Fluid-->

    </section>

    <!--Home 02 Our Service Section-->
    <section class="h2-service-section padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-border-image margin-right white-gray">
                        <div class="border-design">
                            <div class="border-bg top"></div>
                            <div class="we-are-img">
                                <img src="{{ asset('assets/img/home-02/02.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <!--// Section Border Image-->
                </div>
                <div class="col-lg-6">
                    <div class="service-section-right">
                        <div class="section-title">
                            <div class="padding-bottom-15">
                                <h6 class="title uppercase gray"> nos Services </h6>
                            </div>
                            <div class="padding-bottom-30">
                                <h2 class="heading-02"> Les Services Que Nous Offrons </h2>
                            </div>
                        </div>
                        <!--// Section title-->
                        <div class="service-section-bottom">
                            <ul class="items-wrap">
                                <li class="home-02-our-service-items color-01">
                                    <div class="item-left">
                                        <div class="item-border">
                                            <div class="border-bg"></div>
                                            <div class="icon">
                                                <i class="flaticon-car-service"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-right">
                                        <h5 class="title">Vente Véhicules</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit sed eiusmod</p>
                                    </div>
                                </li>
                                <!--// Service items-->

                                <!--// Service items-->

                                <!--// Service items-->
                                <li class="home-02-our-service-items color-04">
                                    <div class="item-left">
                                        <div class="item-border">
                                            <div class="border-bg"></div>
                                            <div class="icon">
                                                <i class="flaticon-car-repair"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-right">
                                        <h5 class="title">Réparation Véhicules</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit sed eiusmod</p>
                                    </div>
                                </li>
                                <!--// Service items-->
                                <li class="home-02-our-service-items color-05">
                                    <div class="item-left">
                                        <div class="item-border">
                                            <div class="border-bg"></div>
                                            <div class="icon">
                                                <i class="flaticon-car-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-right">
                                        <h5 class="title">Lavage Véhicules</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit sed eiusmod</p>
                                    </div>
                                </li>
                                <!--// Service items-->

                                <li class="home-02-our-service-items color-06">
                                    <div class="item-left">
                                        <div class="item-border">
                                            <div class="border-bg"></div>
                                            <div class="icon">
                                                <i class="flaticon-car-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-right">
                                        <h5 class="title">Location Véhicules</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit sed eiusmod</p>
                                    </div>
                                </li>
                                <!--// Service items-->
                            </ul>
                        </div>
                        <!--// Service Section bottom-->
                    </div>
                    <!--// Service Section Right-->
                </div>
            </div>
            <!--// Row-->
        </div>
        <!--// Container-->
    </section>
    <!--// Home 02 Our Service Section-->


    <!--Our Process Section-->
    <section class="our-process-section padding-top-110  style-02"
             style="background-image: url({{ asset('assets/img/bg/our-process-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center">
                        <!--Section Title-->
                        <div class="section-title">
                            <h6 class="title uppercase both-line"> Commandes </h6>
                            <div class="padding-15">
                                <h2 class="heading-02">Processus de Commandes</h2>
                            </div>
                        </div>
                        <!--// Section Title-->
                    </div>
                </div>
            </div>
            <!--// Row End-->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Work Items-->
                    <div class="our-process-section__work-items">
                        <div class="items-number">01</div>
                        <div class="work-tiems-inner">
                            <div class="padding-bottom-20">
                                <h5 class="items-title">Recherche de nos offres</h5>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <!--// Work Items-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Work Items-->
                    <div class="our-process-section__work-items">
                        <div class="items-number">02</div>
                        <div class="work-tiems-inner">
                            <div class="padding-bottom-20">
                                <h5 class="items-title">Choisire un de nos services</h5>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <!--// Work Items-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Work Items-->
                    <div class="our-process-section__work-items">
                        <div class="items-number">03</div>
                        <div class="work-tiems-inner">
                            <div class="padding-bottom-20">
                                <h5 class="items-title">Passer au paiement</h5>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <!--// Work Items-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Work Items-->
                    <div class="our-process-section__work-items">
                        <div class="items-number">04</div>
                        <div class="work-tiems-inner">
                            <div class="padding-bottom-20">
                                <h5 class="items-title">Obtenez votre commande</h5>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <!--// Work Items-->
                </div>
            </div>
            <!--// Row End-->
        </div>
        <!--// Container-->
    </section>
    <!--Our Process Section End-->

    <!--Car Adds Section-->
    <section class="car-adds-section padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <!-- home-2 Car adds Items-->
                    <div class="home-2-car-adds-items">
                        <div class="text-center">
                            <div class="items-head one">
                                <div class="border-one">
                                    <div class="border-two-wrap">
                                        <div class="border-two"></div>
                                    </div>
                                    <div class="icon">
                                        <i class="flaticon-search"></i>
                                    </div>
                                </div>
                            </div>
                            <!--// items Head-->
                            <div class="items-body">
                                <div class="padding-top-25 title-border">
                                    <h5 class="title">Recherche d'une voiture ?</h5>
                                </div>
                                <div class="padding-around">
                                    <p>Our cars are delivered fully-registered with all requirements completed.
                                        We’ll deliver your car wherever you are.</p>
                                </div>
                                <div class="main-btn-wrap">
                                    <a href="#" class="main-btn gray-border">Louer une voiture</a>
                                </div>
                            </div>
                            <!--// items body-->
                        </div>
                    </div>
                    <!--// home-2 Car adds Items-->
                </div>

                <div class="col-lg-4 col-md-4">
                    <!-- home-2 Car adds Items-->
                    <div class="home-2-car-adds-items">
                        <div class="text-center">
                            <div class="items-head two">
                                <div class="border-one">
                                    <div class="border-two-wrap">
                                        <div class="border-two"></div>
                                    </div>
                                    <div class="icon">
                                        <i class="flaticon-auto-sale"></i>
                                    </div>
                                </div>
                            </div>
                            <!--// items Head-->
                            <div class="items-body">
                                <div class="padding-top-25 title-border">
                                    <h5 class="title">Besoins d'une voiure?</h5>
                                </div>
                                <div class="padding-around">
                                    <p>Our cars are delivered fully-registered with all requirements completed.
                                        We’ll deliver your car wherever you are.</p>
                                </div>
                                <div class="main-btn-wrap">
                                    <a href="#" class="main-btn gray-border">Acheter une voiture</a>
                                </div>
                            </div>
                            <!--// items body-->
                        </div>
                    </div>
                    <!--// home-2 Car adds Items-->
                </div>

                <div class="col-lg-4 col-md-4">
                    <!-- home-2 Car adds Items-->
                    <div class="home-2-car-adds-items">
                        <div class="text-center">
                            <div class="items-head three">
                                <div class="border-one">
                                    <div class="border-two-wrap">
                                        <div class="border-two"></div>
                                    </div>
                                    <div class="icon">
                                        <i class="flaticon-service"></i>
                                    </div>
                                </div>
                            </div>
                            <!--// items Head-->
                            <div class="items-body">
                                <div class="padding-top-25 title-border">
                                    <h5 class="title">Reservation d'une réparation?</h5>
                                </div>
                                <div class="padding-around">
                                    <p>Our cars are delivered fully-registered with all requirements completed.
                                        We’ll deliver your car wherever you are.</p>
                                </div>
                                <div class="main-btn-wrap">
                                    <a href="#" class="main-btn gray-border">Reserver</a>
                                </div>
                            </div>
                            <!--// items body-->
                        </div>
                    </div>
                    <!--// home-2 Car adds Items-->
                </div>

            </div>
        </div>
        <!--// Container-->
    </section>
    <!--// Car Adds Section-->

    <!--Home Testimonial -->
    <section class="home-testimonial-section padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--Section Title-->
                    <div class="section-title">
                        <h6 class="title both-line uppercase gray">Nos clients disent</h6>
                        <div class="padding-15">
                            <h2 class="heading-02">Des clients satisfaits</h2>
                        </div>
                    </div>
                    <!--// Section Title-->
                </div>
                <div class="col-lg-12 px-0">
                    <!--Testimonial Inner-->
                    <div class="testimonial-inner style-02  padding-top-95">
                        <div class="testimonial-left">
                            <div class="testimonial-images">
                                <div class="items"><img src="{{ asset('assets/img/testimonial/01.png') }}" alt="img"> </div>
                                <!--// Item -->
                                <div class="items"><img src="{{ asset('assets/img/testimonial/01.png') }}" alt="img"> </div>
                                <!--// Item -->
                                <div class="items"><img src="{{ asset('assets/img/testimonial/02.png') }}" alt="img"> </div>
                                <!--// Item -->
                            </div>
                            <!--// Testimonial images Slider Active Class-->
                        </div>
                        <!--// Testimonial Left End-->

                        <div class="testimonial-right">
                            <div class="quote-icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <!--// Quote Icon-->
                            <div class="testimonial-content-wrap">
                                <div class="testimonial-content">
                                    <div class="items">
                                        <p>Here are many variations of passages of Lorem Ipsum available,
                                            butinjected of the humour, or randomised words which don't look even
                                            slightly in the rom believable. If you are going to use a passage of
                                            Lorem Ipsum, you Here are many variations of passages of Lorem Ipsum
                                            available, butinjected of the humour, or randomised word</p>
                                        <h5 class="honor-name">Martin Alexa</h5>
                                        <div class="honor-disignation">Designer</div>
                                    </div>
                                    <!--// Item-->
                                    <div class="items">
                                        <p>Here are many variations of passages of Lorem Ipsum available,
                                            butinjected of the humour, or randomised words which don't look even
                                            slightly in the rom believable. If you are going to use a passage of
                                            Lorem Ipsum, you Here are many variations of passages of Lorem Ipsum
                                            available, butinjected of the humour, or randomised word</p>
                                        <h5 class="honor-name">Martin Alexa</h5>
                                        <div class="honor-disignation">Designer</div>
                                    </div>
                                    <!--// Item-->
                                    <div class="items">
                                        <p>Here are many variations of passages of Lorem Ipsum available,
                                            butinjected of the humour, or randomised words which don't look even
                                            slightly in the rom believable. If you are going to use a passage of
                                            Lorem Ipsum, you Here are many variations of passages of Lorem Ipsum
                                            available, butinjected of the humour, or randomised word</p>
                                        <h5 class="honor-name">Martin Alexa</h5>
                                        <div class="honor-disignation">Designer</div>
                                    </div>
                                    <!--// Item-->
                                </div>
                                <!--// Testimonial Content Slider Active Class-->

                                <div class="testimonial-arrow-02"></div>
                                <div class="testimonial-dots-02"></div>
                            </div>
                            <!--// Testimonial Content Wrap-->
                        </div>
                        <!--// Testimonial Right End-->
                    </div>
                    <!--// Testimonial Inner End-->
                </div>
            </div>
            <!--// Row-->
        </div>
        <!--// Container-->
    </section>
    <!--// Home Testimonial End-->

    <!--Our Latest New Section-->
    <section class="latest-news style-02 padding-top-110 padding-bottom-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Section Title-->
                    <div class="section-title">
                        <h6 class="title uppercase white">News du Blog</h6>
                        <div class="padding-top-10 padding-bottom-60">
                            <h2 class="heading-02 white">Les Plus Récents</h2>
                        </div>
                    </div>
                    <!--// Section Title-->
                </div>
                <div class="col-lg-12">
                    <div class="latest-news-slider-wrap padding-top-10">
                        <div class="slider-arrow"></div>
                        <!--// Slider Arrow-->
                        <div class="latest-news-slider-active row">
                            @foreach($news as $new)
                                <div class="col-lg-12">
                                <div class="latest-news-slider-items">
                                    <div class="cards">
                                        <div class="cards-img"><img src="{{ $new->image }}" alt="{{ $new->title }}"></div>
                                        <div class="cards-body">
                                            <div class="padding-bottom-20">
                                                <h5 class="heading-05"><a href="#">{{ $new->title }}</a></h5>
                                            </div>
                                            <div class="name-date">
                                                <div class="author-name"><i class="icon flaticon-avatar"></i>
                                                </div>
                                                <div class="publish-date"><i class="icon flaticon-small-calendar"></i>
                                                    May
                                                    26, 2019</div>
                                            </div>
                                        </div>
                                        <!--// Cards Body-->
                                    </div>
                                    <!--//cards-->
                                </div>
                            </div>
                            @endforeach
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
