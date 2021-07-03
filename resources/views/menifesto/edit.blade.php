@extends('includes.master')
@section('content')
    <div class="card mx-auto p-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2 class="text-center">Edit Your Candidate Menifesto Here</h2>
                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="float-left fa fa-arrow-left">
                            <a class="btn btn-outline-dark" href="{{ route('menifesto.create') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('menifesto.update', $menifestos->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-xs12 col-sm-12 col-md-12">
                            <div class="input-group">
                                <div class="custom-file">
                                    <strong>Upload Manifesto Videos: </strong>
                                     <input id="file" type="file" name="video">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <video width="400" height="320" controls>
                                <source src="{{ asset('uploads/menifesto/' . $menifestos->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col-md-5">
                            <label for="name"><strong>Name: </strong></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                value="{{ $menifestos->name }}">
                            <label for="des"><strong>Description: </strong></label>
                            <textarea class="form-control border" id="des" style="height:150px" name="description"
                                value="{{ $menifestos->description }}">{{ $menifestos->description }}</textarea>
                            <label for="select"><strong>Select Post of Candidate: </strong> </label>
                            <select id="Select" name="position_id" class="form-select form-control">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->candidate_post }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                 
                </form>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#close-btn').click(function() {
                $('#alert').hide();
            });
        });
    </script>
@endsection
