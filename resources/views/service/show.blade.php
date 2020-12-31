@extends('layouts.main')

@section('title') @parent Service {{ $service->name }} @endsection

@section('description')
    {{ $service->excerpt }}
@endsection

@section('meta-image')
    {{ $service->file }}
@endsection

@section('content')
    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url({{ asset('assets/img/breadcrumb/02.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">{{ title_case($service->name) }}</h1>
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>{{ title_case($service->name) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Home section How We are-->
    <section class="how-we-are padding-120 md-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-lg-0">
                    <!--Section border image-->
                    <div class="section-border-image margin-right white-gray">
                        <div class="border-design">
                            <div class="border-bg full-bg"></div>
                            <div class="we-are-img">
                                <img src="{{ $service->file }}" alt="{{ $service->name }}">
                            </div>
                        </div>
                    </div>
                    <!--// Section border image End-->
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <!--Section Left Content-->
                    <div class="common-section-content">
                        <!--Section Title-->
                        <div class="section-title padding-bottom-20">
                            <h2 class="heading-02">{{ title_case($service->name) }}</h2>
                        </div>
                        <!--// Section Title End-->
                        <div class="paragraph">
                            {!! $service->description !!}
                        </div>
                        <div class="main-btn-wrap padding-20 pr-5">
                            <a href="{{ $service->order }}" class="main-btn black uppercase">Commander</a>
                        </div>
                    </div>
                    <!--// Section Left Content End-->
                </div>

            </div>
            <!--// Row End-->
        </div>
        <!--// Container End-->
    </section>
    <!--// Home section How We are-->


    <!--Process Section -->
    <section class="process-section padding-bottom-105">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title padding-bottom-50">
                        <h2 class="heading-02">Process</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="process-section__right">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="assets/img/service/details-02.png" alt="img">
                            </div>
                        </div>
                        <div class="content-area white absolute">
                            <div class="number">01</div>
                            <h4 class="title">Engine Testing</h4>
                            <p>Hence, the electric car owners should ensure that the car is frequently inspected by a
                                skilled and knowledgeable repair
                                service station like Auto to ensure a smooth and hassle free glide. Apart from it, there
                                are about six or seven parts
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!--Process left Content-->
                    <div class="process-section__left__items">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="assets/img/service/details-03.png" alt="img">
                            </div>
                        </div>
                        <div class="content-area">
                            <div class="number">01</div>
                            <h4 class="title">Engine Functions</h4>
                            <p>Hence, the electric car owners should ensure that the car is frequently inspected
                                by a skilled and knowledgeable repair
                                service station like Auto to ensure a smooth and hassle free glide. Apart from
                                it, there are about six or seven parts
                            </p>
                        </div>
                    </div>
                    <!--// Process item-->
                </div>
                <div class="col-lg-4">
                    <!--Process left Content-->
                    <div class="process-section__left__items">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="assets/img/service/details-04.png" alt="img">
                            </div>
                        </div>
                        <div class="content-area">
                            <div class="number">02</div>
                            <h4 class="title">Engine Functions</h4>
                            <p>Hence, the electric car owners should ensure that the car is frequently inspected
                                by a skilled and knowledgeable repair
                                service station like Auto to ensure a smooth and hassle free glide. Apart from
                                it, there are about six or seven parts
                            </p>
                        </div>
                    </div>
                    <!--// Process item-->
                </div>
                <div class="col-lg-4">
                    <!--Process left Content-->
                    <div class="process-section__left__items">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="assets/img/service/details-04.png" alt="img">
                            </div>
                        </div>
                        <div class="content-area">
                            <div class="number">03</div>
                            <h4 class="title">Engine Functions</h4>
                            <p>Hence, the electric car owners should ensure that the car is frequently inspected
                                by a skilled and knowledgeable repair
                                service station like Auto to ensure a smooth and hassle free glide. Apart from
                                it, there are about six or seven parts
                            </p>
                        </div>
                    </div>
                    <!--// Process item-->
                </div>
            </div>
        </div>
    </section>
    <!--// Process Section-->
@endsection
