@extends('includes.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
        @endif --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center">Update your new password!</div>
   
                <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                         <div class="alert" style="background-color:rgb(226, 173, 182)">
                            {{ $error }}
                            {{-- <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0"></button> --}}
                        </div>
                         @endforeach 
                         {{-- <script>
                            $(document).ready(function(){
                              $('#close-btn').click(function(){
                                $('#alert').hide();
                              });
                            });
                          </script> --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" required>
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" required>
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" required>
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
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