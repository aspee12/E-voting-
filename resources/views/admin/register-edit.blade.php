@extends('includes.master')

@section('title')
    Edit-Registered | i-Vote Buddy
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Edit the Users.</h3>
                    @if (session('success'))
                         <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                         </div>
                     @endif
                </div>
                <div class="card-body">
                       <div class="row">
                           <div class="col-md-6">
                        @if($users->usertype!='admin')
                            <form action="/register-update/{{$users->id}}" method="POST">
                                {{ csrf_field() }}
                                {{@method_field('PUT')}}
                                <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" class="form-control"placeholder="Enter Name" name="name" value="{{$users->name}}">
                                </div>
                                <div class="form-group">
                                  <label> User Type</label>
                                   <select name="usertype" class="form-control">
                                        <option value="voter">Voter</option>
                                       <option value="">None</option>
                                       <option value="admin">Admin</option>
                                   </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role" class="btn btn-danger">Cancel</a>
                              </form>
                            @endif
                            @if ($users->usertype=='admin')
                            <form action="/register-update/{{$users->id}}" method="POST">
                                {{ csrf_field() }}
                                {{@method_field('PUT')}}
                                
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control"placeholder="Enter Name" name="name" value="{{$users->name}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control"placeholder="Enter Phone" name="phone" value="{{$users->phone}}">
                                  </div>
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control"placeholder="Enter Email" name="email" value="{{$users->email}}">
                                  </div>
                                  {{-- <div class="form-group">
                                    <label> User Type</label>
                                     <select name="usertype" class="form-control">
                                         <option value="admin">admin</option>
                                     </select>
                                  </div> --}}
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role" class="btn btn-danger">Cancel</a>
                            </form>
                            @endif
                           </div>
                       </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection