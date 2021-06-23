@extends('includes.master')
@section('content')
<div class="container d-flex card mx-auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="float-right fa fa-arrow-left">
                <a class="btn btn-warning " href="{{ route('ballot.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <br>
   <div class="card border-warning mx-auto col-md-6" >
    <img src="{{asset('uploads/candidate/'.$candidate->image)}}" class="card-img-top my-2" height="450px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Candidate Details</h5>
      <p class="card-text"> <strong>Position:</strong>  {{ $candidate->position->candidate_post  }}</p>
      <p class="card-text"><strong>ID:</strong> {{ $candidate->enrol }} </p>
      <p class="card-text"> <strong>Name:</strong> {{ $candidate->name }} </p>
      <p class="card-text"> <strong>Description:</strong> {{ $candidate->detail }} </p>
    </div>
  </div>
</div>
@endsection