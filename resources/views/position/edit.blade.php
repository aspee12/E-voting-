@extends('includes.master')
@section('content')
<div class="card mx-auto p-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="pull-left">
                <h2>Add Candidate Post Here!</h2>
            </div>
            <br>
            <br>
            <hr>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <br><br>
                <div class="float-right">
                    <a class="btn btn-info" href="/create"> Back</a>
                </div>
            </div>
        </div>
            <div class="pull-left mb-2">
                <form action="/update/{{$positions->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="candidate_post" value="{{$positions->candidate_post}}">
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div id="alert" class="alert bg-success alert-success">
        {{ $message }}
        <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
    </div>
@endif
<script>
  $(document).ready(function(){
    $('#close-btn').click(function(){
      $('#alert').hide();
    });
  });
</script>
@endsection
