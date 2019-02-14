@extends('layouts.app')

@section('content')
<section class="main">
    <div class="card-login-container">
        <div class="card-login">
            <h1 class="pri-title">Hinkuena Kaya</h1>
            <p class="sec-title">Build scalable realtime apps in seconds</p>
            <div class="mt-3">
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="forms-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="forms-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">

                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}" style="font-size: 0.9rem">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100 text-uppercase">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <center class="mb-2">
                            <span>Ou acesse com</span>
                        </center>
                        <div class="form-group row mb-2">
                            <div class="col-6">
                                <a href="login/account/google" class="btn btn-danger w-100 text-uppercase">
                                    Google
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="login/account/facebook" class="btn btn-facebook w-100 text-uppercase">
                                    Facebook
                                </a>
                            </div>
                        </div>
                        <center class="mb-0">
                            <a href="{{ route('register') }}">Nao tem conta? Crie uma gratis</a>
                        </center>
                    </form>
            </div>
        </div>
    </div>
</section>
<style>
        /**
    * Login Layout
    **/

    .pri-title{
        font-size: 1.5rem;
        font-weight: 400;
        color: #0c2a38;
        margin-bottom: 8px;
    }

    .sec-title {
        font-size: 1rem;
        color: #107bab;
        margin-bottom: 24px;
    }

    @media screen and (min-width: 40em){
    .main {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        background: url(/assets/svg_store/slash-single-3fd6496….svg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: auto 90%;
    }

    .card-login-container {
        max-width: 420px;
        }
    .card-login {
        padding: 24px;
        background-color: #fff;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
        }
    }



    .main {
        height: 100vh;
    }

    @media screen and (max-width: 39em){
        .card-login-container {
            -webkit-transform: matrix(0.95, 0, 0, 0.95, 0, 80);
        }
        .card-login {
        background-color: #fff;
        padding: 16px;
        }
    }
    .card-login-container {
        width: 100%;
        position: relative;
    }

    .btn{
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
        font-weight: 500;
    }

    .btn-facebook {
        color: #fff;
        border-color: #3b5999;
        background-color: #3b5999;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    a.btn.btn-facebook.w-100.text-uppercase {
        color: #fff;
    }

    .card-login-container {
        transition: all 620ms cubic-bezier(0.26, 1.58, 0.7, 0.9);
    }

    .forms-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        width: 100%;
        height: 40px;
        padding: 12px 18px;
        font-size: 1rem;
        background-color: #f0faff;
        border: 1px solid;
        border-color: transparent;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        font-family: "maison-neue", sans-serif;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        background-clip: padding-box;
        border-radius: 0.25rem;
    }

    .forms-input:focus{
        border: 1px solid #389ed2;
    }

</style>

@endsection
