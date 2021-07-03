@extends('includes.master')
@section('content')
<div class="card mx-auto p-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
                <h2>Update Candidate Post Here!</h2>
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="float-left fa fa-arrow-left">
                    <a class="btn btn-outline-dark" href="/create"> Back</a>
                </div>
            </div>
        </div>
            <div class="text-center mt-4">
                <form action="/update/{{$positions->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="candidate_post" value="{{$positions->candidate_post}}">
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                
            </div>
        </div>
    </div>
<script>
  $(document).ready(function(){
    $('#close-btn').click(function(){
      $('#alert').hide();
    });
  });
</script>
@endsection
