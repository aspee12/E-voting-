@extends('includes.master')
@section('content')
<div class="card mx-auto p-4 ">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            {{-- <div class="pull-left">
                <h2>Upload Candidate Menifesto Here!</h2>
            </div> --}}
            <br>
            <br>
            @if ($message = Session::get('success'))
            <div id="alert" class="alert bg-success alert-success">
                {{ $message }}
                <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
            </div>
            @endif
              <div class="row">
        <div class="col-lg-12 mb-1">
            <br><br>
            <div class="float-right fa fa-arrow-left">
                <a class="btn btn-info" href="{{ route('ballot.index') }}"> Back</a>
            </div>
        </div>
    </div>
            <hr>
            {{-- <div class="pull-left mb-2">
                <form action="{{route('menifesto.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs12 col-sm-12 col-md-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <strong>Upload Videos: </strong>
                                 <input id="file" type="file" name="video">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Select Post of Candidate</strong>
                                <select id="Select" name="post" class="form-select form-control">
                                    @foreach ($positions as $position)        
                                    <option value="{{ $position->id }}">{{ $position->candidate_post }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control border" style="height:150px" name="description" placeholder="Detail"></textarea>
                        </div>
                    </div>
                    
                    <div class="container">
                        <button type="submit" class="btn btn-warning">Upload</button>
                    </div>
                </form>
               
            </div> --}}
            <table class="table">
                <thead>
                    <tr class="bg-light">
                        <th scope="col"><b>Name</b></th>
                        <th scope="col"><b>Video</b></th>
                        <th scope="col"><b>Description</b></th>
                        <th scope="col"><b>Handle</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menifestos as $menifesto)
                  <tr>
                    <td>
                        <h4>
                            <div class="container mt-3">
                                {{$menifesto->name}}
                            </div>
                        </h4>
                        
                    </td>
                    <td>
                            <div class="container mt-3">
                                <video width="350" height="220" controls>
                                    <source src="{{asset('uploads/menifesto/'.$menifesto->video)}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                            </div>
                    </td>
                    <td>
                        <p>
                            <div class="container mt-3">
                                {{$menifesto->description}}
                            </div>
                        </p>
                        
                    </td>
                    <td>
                        <form action="{{ route('menifesto.destroy',$menifesto->id) }}" method="POST">
                            
                            <a class="btn btn-primary" href="{{ route('menifesto.edit',$menifesto->id) }}">Edit</a><br><br>  
                            {{-- @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger">Delete</button> --}}
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
           </table>
            
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
