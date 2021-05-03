@extends('includes.master')
@section('content')
<div class="container d-flex card mx-auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('ballot.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <br>
    <div class="row ml-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $candidate->enrol }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $candidate->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $candidate->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong><br>
                <img src="{{asset('uploads/candidate/'.$candidate->image)}}" height="250" width="250"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post:</strong>
                {{ $candidate->position->candidate_post  }}
            </div>
        </div>
    </div>

</div>
@endsection