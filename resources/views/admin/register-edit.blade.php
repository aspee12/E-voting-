@extends('layouts.master')

@section('title')
    Edit-Registered | i-Vote Buddy
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Edit the Users.</h3>
                    @if (session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                         </div>
                     @endif
                </div>
                <div class="card-body">
                       <div class="row">
                           <div class="col-md-6">
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
                                       <option value="admin">Admin</option>
                                       <option value="candidate">Candidate</option>
                                       <option value="">None</option>
                                   </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role" class="btn btn-danger">Cancel</a>
                              </form>
                           </div>
                       </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
@endsection