@extends('includes.master')
@section('content')

    <div class="card p-5 mx-auto d-flex justify-content-center w-75">
        <div class="row">
                <div class="col-lg-12 mb-1">
                    <div class="float-left fa fa-arrow-left">
                        <a class="btn btn-outline-dark" href="{{ route('ballot.index') }}"> Back</a>
                    </div>
                </div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="mt-5">Edit Candidate</h2>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ballot.update', $candidate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID:</strong>
                        <input type="text" name="enrol" value="{{ $candidate->enrol }}" class="form-control"
                            placeholder="ID">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $candidate->name }}" class="form-control"
                            placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control border" style="height:150px" name="detail"
                            placeholder="Commitment">{{ $candidate->detail }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="Post Image"
                            style="opacity: 100%; position:relative;">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('uploads/candidate/' . $candidate->image) }}" class="rounded-circle" height="250"
                            width="250" />
                    </div>
                </div>
                {{-- <div class="pull-left">
                <h2>Update Candidate Manifesto!</h2>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Manifesto Description:</strong>
                    <textarea class="form-control border" style="height:150px" value="{{$menifestos->description}}" name="description" placeholder="Detail"></textarea>
                </div>
            </div>

            <div class="col-xs12 col-sm-12 col-md-12">
                <div class="input-group">
                    <div class="custom-file">
                        <strong>Upload Manifesto Videos: </strong>
                         <input id="file" type="file" name="video">
                         <div class="container mt-3">
                            <video width="260" height="220" controls>
                                <source src="{{asset('uploads/menifesto/'.$menifestos->video)}}" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div>
                </div>
            </div> --}}

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Select Post of Candidate:</strong>
                        <select id="Select" name="position_id" value="{{ $candidate->candidate_post }}"
                            class="form-select form-control">
                            <option vlaue=""></option>
                            @foreach ($positions as $position)

                                <option value="{{ $position->id }}">{{ $position->candidate_post }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
