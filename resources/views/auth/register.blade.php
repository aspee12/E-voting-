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
        background-image: url('/img/33.jpg');
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
                <div class="card-header" style="text-align: center;">
                    <div class="banner">
                        <h1>{{ __('Register') }}</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row text-dark">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" pattern="[a-zA-Z]{2,10}(\s){0,4}[a-zA-Z]{2,20}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-dark">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" pattern="(17|77)[0-9]{6}" title="Must start with 17 or 77 and should have only 8 digit." required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <style>
                        input:valid{
                            border: 2px solid green;
                        }
                        input:invalid{
                            border: 2px solid red;
                        }
                    </style>
                        <div class="form-group row text-dark">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-dark">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-dark">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group text-dark row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="btn-block">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
<script>
    var myInput = document.getElementById("pass");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    myInput.onfocus = function() {
       document.getElementById("checksField").style.display = "block";
    };
    myInput.onblur = function() {
       document.getElementById("checksField").style.display = "none";
    };
    myInput.onkeyup = function() {
       var lowerCaseLetters = /[a-z]/g;
       if (myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("wrong");
          letter.classList.add("correct");
       } else {
          letter.classList.remove("correct");
          letter.classList.add("wrong");
       }
       var upperCaseLetters = /[A-Z]/g;
       if (myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("wrong");
          capital.classList.add("correct");
       } else {
          capital.classList.remove("correct");
          capital.classList.add("wrong");
       }
       var numbers = /[0-9]/g;
       if (myInput.value.match(numbers)) {
          number.classList.remove("wrong");
          number.classList.add("correct");
       } else {
          number.classList.remove("correct");
          number.classList.add("wrong");
       }
    };
 </script>

@endsection
