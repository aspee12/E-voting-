@extends('includes.master')
@section('content')
<div class="card mx-auto p-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="pull-left">
                <h2>UPLOAD LIST OF THE CANDIDATE HERE</h2>
            </div>
            <br>
            <br>
            <hr>
            <div class="pull-left mb-2">
                <label for="">Enter the Election Title:</label>
                <input type="text" name="election_name" id="election">
                <a class="btn btn-success " href="{{ route('ballot.index') }}">Submin</a>
            </div>
        </div>
    </div>

@endsection