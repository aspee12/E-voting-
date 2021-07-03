@extends('includes.master')
@section('content')
    <div class="container-fluid">
        <div class="row"><br>
            @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('msg') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <br>
                    @foreach ($data as $data)
                        <img src="{{ asset('uploads/userprofile/' . $data->profile) }}"
                            style="border: 3px solid gray; border-radius: 50%; width: 170px; height:167px"
                            onerror="this.src='/img/default.jpg'">
                        <h5 class="ml-auto" style="text-transform: uppercase;padding-le">{{ $data->name }}</h5>
                        <a href="{{ url('/main') }}">Home </a> / <a href="{{ route('profileset', $data->id) }}"> Profile
                            Setting</a>
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
        <div class="row"><br>
            <div class="col-md-8">
                <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:7px">
                    <br>
                    <h4>User Details</h4><br>
                    @if (session('succ'))
                        <div class="alert alert-success mt-2">
                            {{ session('succ') }}
                        </div>
                    @endif

                    @foreach ($datas as $user)
                        <b>Name:</b><br>
                        <p>{{ $user->name }}</p>
                        <b>Email:</b><br>
                        <a href="#">{{ $user->email }}</a> <br><br>
                        <b>Create Account At:</b>
                        <p>{{ $user->created_at }}</p>
                    @endforeach

                    <br>
                </div>
            </div>
        </div>
    </div>
    

@endsection
