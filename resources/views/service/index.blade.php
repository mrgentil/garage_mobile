@extends('layouts.main')

@section('title') @parent Nos services @endsection

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
    <div class="breadcrumb-area" style="background-image: url({{ asset('assets/img/breadcrumb/02.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Nos Services</h1>
                        <ul class="page-list">
                            <li><a href="{{ route('service.index') }}">Accueil</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Service Offer Section-->
    <section class="service-offer-section padding-top-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 m-auto">
                    <!-- Section Title Wrap -->
                    <div class="section-title-wrap text-center">
                        <!--Section Title-->
                        <div class="section-title padding-bottom-65">
                            <h2 class="heading-02 padding-bottom-10">Nos Meilleurs Services</h2>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                        <!--// Section Title-->
                    </div>
                    <!--// Section Title Wrapper End-->
                </div>
            </div>
            <!--// Row-->
        </div>
        <!--// Container-->
    </section>
    <!--// Service Offer Section-->

    @foreach($services as $service)
        <!--Section Single Item-->
        <section class="service-single-item{{ $counter % 2 === 0 ? ' padding-120' : '' }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 {{ $counter % 2 === 0 ? ' offset-lg-4' : '' }} col-md-6">
                        <div class="thumb-wrap">
                            <div class="thumb">
                                <img src="{{ Voyager::image($service->image) }}" alt="{{ $service->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-content">
                            <div class="item-number">0{{ $service->id }}</div>
                            <div class="title-wrap">
                                <h3 class="title"><a href="{{ $service->order }}">{{ $service->name }}</a></h3>
                            </div>
                            <p>
                                {{ $service->excerpt }}
                            </p>
                            <div class="main-btn-wrap padding-20 pr-5" style="padding-top: 0;">
                                <a href="{{ $service->order }}" class="main-btn black uppercase">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Section Single Item-->
        @php
            isset($counter) ? $counter++ : ''
        @endphp
    @endforeach

    <!--Home Testimonial -->
    <section class="home-testimonial-section  padding-bottom-110 padding-top-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--Section Title-->
                    <div class="section-title">
                        <h6 class="title uppercase both-line gray">Our client say</h6>
                        <div class="padding-15">
                            <h2 class="heading-02">Happy Client Feedback</h2>
                        </div>
                    </div>
                    <!--// Section Title-->
                </div>
                <div class="col-lg-12 px-0">
                    <!--Testimonial Inner-->
                    <div class="testimonial-inner style-02 padding-top-110">
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
@endsection
