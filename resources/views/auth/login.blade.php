@extends('layouts.main')

@section('title') @parent Connexion @endsection

@section('description')
  Connectez vous et réparez rapidement vos voitures chez Garage Mobike
@endsection

@section('keywords')
    Connexion
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
                            <h4 class="title">Pas de compte ?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and</p>
                            <div class="main-btn-wrap text-center">
                                <a href="{{ route('register') }}" class="main-btn white uppercase">S'INSCRIRE</a>
                            </div>
                        </div>
                    </div>
                    <!--// Register Area-->
                </div>
                <div class="col-lg-5">
                    <div class="sign-in-area">
                        <!--Form-->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!--// Border-->
                            <label for="email">Téléphone ou Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-black-back-closed-envelope-shape"></i>
                                    </span>
                                </div>
                                <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Entrez votre Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <!--// Email-->
                            <label for="password" class="padding-top-30">Mot de Passe</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon flaticon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror" id="password"
                                       placeholder="Entrez Votre Mot de Passe">
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
                            <div class="form-bottom-area padding-top-30">
                                <div class="remember-me">
                                    <label class="sign-in-area-switch">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>>
                                        <span class="slider round"></span>
                                    </label>
                                    <a href="#">Se Souvenir de moi</a>
                                </div>
                                <div class="forgot-password">
                                    <a href="{{ route('password.request') }}">Mot de Passe oublié</a>
                                </div>
                            </div>

                            <div class="main-btn-wrap text-center padding-top-60">
                                <input type="submit" class="main-btn black uppercase" value="ME CONNECTER">
                            </div>

                        </form>
                        <!--// Form-->
                    </div>
                    <!--// Sign In Area-->
                </div>
            </div>
        </div>
    </div>
@endsection
