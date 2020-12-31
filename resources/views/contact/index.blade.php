@extends('layouts.main')

@section('title') @parent Nous contacter @endsection

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
    <div class="breadcrumb-area" style="background-image: url({{ asset('assets/img/contact/01.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Nous Contacter</h1>
                        <ul class="page-list">
                            <li><a href="{{ route('contact.index') }}">Accueil</a></li>
                            <li>Nous Contacter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->

    <!--Cantact-->
    <div class="contact-page padding-top-115 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-content">
                        <div class="section-title">
                            <h2 class="heading-02 padding-bottom-20">Get In Touch</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" id="contact-form">
                    @include('partials.flash')
                    <form action="{{ route('contact.store') }}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 margin-bottom-30">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text"
                                           class="margin-bottom-0 form-control @error('name') is-invalid @enderror"
                                           id="name"  value="{{ old('name')  }}" name="name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 margin-bottom-30">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="margin-bottom-0 form-control @error('email') is-invalid @enderror"
                                           id="email"  value="{{ old('email')  }}">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 margin-bottom-30">
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="tel" name="phone" class="margin-bottom-0 form-control @error('phone') is-invalid @enderror"
                                           id="phone"  value="{{ old('phone')  }}">
                                </div>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 margin-bottom-30">
                                <div class="form-group">
                                    <label for="subject">Sujet</label>
                                    <input type="text" name="subject" class="margin-bottom-0 form-control @error('subject') is-invalid @enderror"
                                           id="subject"  value="{{ old('subject')  }}">
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 margin-bottom-30">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="margin-bottom-0 form-control @error('message')
                                    is-invalid @enderror" name="message" cols="30" rows="10" id="message">{{ old('message')  }}</textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="main-btn-wrap">
                                    <input class="main-btn black" type="submit" value="Envoyer">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--// Cantact-->

    <div class="quick-find-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class='find-us-inner'>
                        <h4 class="title">Quick Find Us</h4>
                        <!--Contact Items-->
                        <div class="contact-items padding-top-20">
                            <div class="icon">
                                <img src="{{ asset('assets/img/marker.png') }}" alt="marker">
                            </div>
                            <h5 class="heading">Showroom</h5>
                            <div class="contact">
                                <span class="contact-info">FairView Ave, El Monte</span>
                                <span class="contact-info">California 91732</span>
                            </div>
                        </div>
                        <!--// Contact Items-->

                        <!--Contact Items-->
                        <div class="contact-items padding-top-20">
                            <div class="icon">
                                <i class="flaticon-call-answer"></i>
                            </div>
                            <h5 class="heading">Phone</h5>
                            <div class="contact">
                                <span class="contact-info">(+88) 0172 570051</span>
                                <span class="contact-info">(+88) 0172 570051</span>
                            </div>
                        </div>
                        <!--// Contact Items-->

                        <!--Contact Items-->
                        <div class="contact-items padding-top-20">
                            <div class="icon">
                                <i class="flaticon-black-back-closed-envelope-shape"></i>
                            </div>
                            <h5 class="heading">Email</h5>
                            <div class="contact">
                                <span class="contact-info">autoshop@gmaill.com</span>
                                <span class="contact-info">autoshop@gmaill.com</span>
                            </div>
                        </div>
                        <!--// Contact Items-->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Google Map -->
    <div class="google-map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div id="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd"
                            style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Google Map End-->
@endsection
