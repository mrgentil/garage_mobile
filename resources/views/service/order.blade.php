@extends('layouts.main')

@section('title') @parent Commander le service {{ title_case($service->name) }} @endsection

@section('description')
    {{ $service->excerpt }}
@endsection

@section('meta-image')
    {{ $service->file }}
@endsection

@section('content')
    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url({{ asset('assets/img/breadcrumb/05.png') }})">
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

    <!--Step Car Sell-->
    <div class="step-car-sell">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-car-sell__thumb margin-minus">
                        <img src="{{ asset('assets/img/car-sell/01.png') }}" alt="{{ $service->name }}">
                    </div>
                </div>
                <!--// Thumbnail-->

                <div class="col-lg-12 padding-bottom-160" id="order-form">
                    <div class="step-car-sell__content">
                        <div class="step-car-sell__details">
                            @include('partials.flash')
                            <form action="{{ route('service.order.post') }}" method="post">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <div class="step-car-sell__details_form style-02">
                                    <div class="row">
                                        <div class="col-lg-6 margin-bottom-30">
                                            <label for="first_name">Prénom</label>
                                            <input id="first_name" name="first_name" type="text" required  value="{{ old('first_name') ? old('first_name') : auth()->user()->name }}"
                                                   class="margin-bottom-0 form-control @error('first_name') is-invalid @enderror" autofocus>

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 margin-bottom-30">
                                            <label for="last_name">Nom</label>
                                            <input id="last_name" name="last_name"  value="{{ old('last_name') }}"
                                                   type="text" required class="margin-bottom-0 form-control @error('last_name') is-invalid @enderror">

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 margin-bottom-30">
                                            <label for="email_address">Adresse Email</label>
                                            <input id="email_address" name="email"  value="{{ old('email')  }}" type="email"
                                                   required class="margin-bottom-0 form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 margin-bottom-30">
                                            <label for="phone_number">Téléphone</label>
                                            <input id="phone_number" name="phone"
                                                   value="{{ old('phone') ? old('phone') : auth()->user()->phone }}"
                                                   required type="text" class="margin-bottom-0 form-control @error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 margin-bottom-30">
                                            <label for="car_make">Marque de voiture</label>
                                            <input id="car_make" type="text" name="car_make"
                                                   value="{{ old('car_make') }}" required class="margin-bottom-0 form-control @error('car_make') is-invalid @enderror">
                                            @error('car_make')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 margin-bottom-30">
                                            <label for="car_model">Modèle (optionel)</label>
                                            <input id="car_model" type="text"  value="{{ old('model') }}" name="model" class="margin-bottom-0 form-control @error('model') is-invalid @enderror">
                                            @error('model')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 margin-bottom-30">
                                            <label for="fuel_type">Type de carburant (optionel)</label>
                                            <input id="fuel_type" type="text" name="fuel_type"  value="{{ old('fuel_type') }}" class="margin-bottom-0 form-control @error('fuel_type') is-invalid @enderror">
                                            @error('fuel_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 margin-bottom-30">
                                            <label for="engine_size">Taille du moteur (optionel)</label>
                                            <input id="engine_size" type="text"  value="{{ old('engine_size') }}" name="engine_size" class="margin-bottom-0 form-control @error('engine_size') is-invalid @enderror">
                                            @error('engine_size')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 margin-bottom-30">
                                            <label for="desired_date">Date et heure souhaitées</label>
                                            <input type="text" name="desired_date" id="desired_date"  value="{{ old('desired_date') }}" class="margin-bottom-0 form-control @error('desired_date_and_time') is-invalid @enderror datepicker" autocomplete="off">
                                            @error('desired_date_and_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 margin-bottom-30">
                                            <label for="localization">Votre Adresse</label>
                                            <input type="text" name="localization" id="localization"
                                                   value="{{ old('localization') }}"
                                                   class="margin-bottom-0 form-control @error('localization') is-invalid @enderror"
                                                   autocomplete="localization">
                                            @error('localization')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 margin-bottom-20">
                                            <label for="desired_date">Problème</label>
                                            <textarea type="text" required name="problem" id="desired_date"  class="margin-bottom-0 form-control @error('problem') is-invalid @enderror">{{ old('problem') }}</textarea>
                                            @error('problem')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <div class="main-btn-wrap padding-top-5 pr-5">
                                                    <button type="submit" href="#" class="main-btn black">COMMANDER</button>
                                                </div>
                                                <!--// Main Btn-->
                                                <p>
                                                    En soumettant ce formulaire, vous demanderez la valeur de reprise
                                                    sans aucune obligation et serez bien contacté dans les prochaines heures par un représentant commercial.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!--// Step Car Sell Content-->
                </div>
            </div>
        </div>
    </div>
    <!--// Step Car Sell-->
@endsection
