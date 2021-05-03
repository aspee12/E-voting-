@extends('layouts.app')

@section('content')
<style>
    h1{
        position: absolute;
        margin: 0;
        font-size: 60px;
        color: #fff;
        z-index: 2;
        line-height: 2;
    }
    .banner{
        position: relative;
        height: 300px;
        background-image: url('/img/2.jpg');
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .btn-block{
        margin-top: 10px;
        text-align: center;
    }
    button{
        width: 100px;
        height: 35px;
        padding: 20px;
        border: none;
        border-radius: 5px;
        background: #669999;
        font-size: 18px;
        color: #fff;
        cursor: pointer;
    }
    button:hover{
        background: #a3c2c2;
    }
    body,div,form,input,select,textarea,label,p{
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark">
                <div class="card-header">
                    <div class="banner">
                        <h1>{{ __('Login') }}</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row text-dark">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-dark">
                            <label for="password" class="col-md-4 col-form-label  text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-dark">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0 text-dark">
                            <div class="col-md-8 offset-md-4">
                                    <a class="btn btn-link" href="/register"> Register Now!</a>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <div class="btn-block">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
