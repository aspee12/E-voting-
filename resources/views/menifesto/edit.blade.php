@extends('includes.master')
@section('content')
<div class="card mx-auto p-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="pull-left">
                <h2>Edit Your Candidate Menifesto Here</h2>
            </div>
            <br>
            <br>
            @if ($message = Session::get('success'))
            <div id="alert" class="alert bg-success alert-success">
                {{ $message }}
                <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
            </div>
        @endif
            <hr>
            <div class="pull-left mb-2">
                <form action="{{ route('menifesto.update',$menifestos->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$menifestos->name}}">
                        </div>
                    </div>
                    <div class="col-xs12 col-sm-12 col-md-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <strong>Upload Videos: </strong>
                                 <input id="file" type="file" name="video">
                            </div>
                            <div class="container mt-3">
                                <video width="260" height="220" controls>
                                    <source src="{{asset('uploads/menifesto/'.$menifestos->video)}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control border" style="height:150px" name="description" value="{{$menifestos->description}}"></textarea>
                        </div>
                    </div>
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
