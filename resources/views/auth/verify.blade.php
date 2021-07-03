@extends('layouts.app')

@section('content')
<div class="container text-dark">
    <div class="row justify-content-center text-dark">
        <div class="col-md-8">
            <div class="card text-dark">
                <div class="card-header" style="background-color: rgb(163, 209, 163); font-weight: bold;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body text-dark">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Please check your email for a verification link before proccessing further. You need to verify with your email before login!') }} <br>
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
