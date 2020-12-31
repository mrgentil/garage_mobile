@extends('layouts.main')
@section('title') @parent Créer un compte @endsection

@section('description')
    Inscrivez vous et réparez rapidement vos voitures chez Garage Mobike
@endsection

@section('keywords')
    Inscription
@endsection
@section('meta-image')
    {{--{{ Voyager::image($news->image) }}--}}
@endsection
@section('content')

    <!--Sign Up Page-->
    <div class="sign padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="sign-register-area" style="background-image: url(assets/img/sign-in/01.png)">
                        <div class="sign-register-area-inner">
                            <h4 class="title">Déjà membre ?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and</p>
                            <div class="main-btn-wrap text-center">
                                <a href="#" class="main-btn white uppercase">SE CONNECTER</a>
                            </div>
                        </div>
                    </div>
                    <!--// Register Area-->
                </div>
                <div class="col-lg-5">
                    <div class="sign-in-area">
                        <!--Form-->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <a href="#" class="btn-login-with google">
                                <i class="icon fab fa-google-plus-g"></i>
                                <span class="text">Se connecter avec Google</span>
                            </a>
                            <!--// Google BTN-->
                            <a href="#" class="btn-login-with facebook">
                                <i class="icon fab fa-facebook-f"></i>
                                <span class="text">Se connecter avec Facebook</span>
                            </a>
                            <!--// Facebook BTN-->
                            <div class="hr-border">OU</div>
                            <!--// Border-->

                            <label for="name">Nom*</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-man-user"></i>
                                    </span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Entrez votre nom">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--// Email-->

                            <label for="phone" class="padding-top-30">Téléphone*</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-black-back-closed-envelope-shape"></i>
                                    </span>
                                </div>
                                <input type="tel" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Entrez votre téléphone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--// Email-->

                            <!--// phone-->

                            <label for="email" class="padding-top-30">Email (optionel)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-black-back-closed-envelope-shape"></i>
                                    </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Entrez votre Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--// phone-->

                            <label for="password" class="padding-top-30">Password*</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-lock"></i>
                                    </span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                       placeholder="Entrez le Mot de Passe">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-group-prepend">
                                    <span class="input-group-text btn-show-pass">
                                        <i class="show-hide-icon fa fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <!--// Password-->

                            <label for="password-confirm" class="padding-top-30">Confirmation*</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-lock"></i>
                                    </span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                       placeholder="Confirmation Mot de Passe">
                                <div class="input-group-prepend">
                                    <span class="input-group-text btn-show-pass">
                                        <i class="show-hide-icon fa fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <!--// Confirm Password-->

                            <div class="main-btn-wrap text-center padding-top-60">
                                <input type="submit" class="main-btn black uppercase" value="M'INSCRIRE">
                            </div>

                        </form>
                        <!--// Form-->
                    </div>
                    <!--// Sign In Area-->
                </div>
            </div>
        </div>
    </div>
    <!--// Sign Up Page-->
@endsection
