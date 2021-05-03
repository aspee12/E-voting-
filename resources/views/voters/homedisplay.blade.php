@extends('includes.voterspage')
@section('body')

<div class="container">
    <div class="row">
        <div class=" card bg-light shadow p-5 ml-5 col-lg-10 col-md-10">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-sm table-bordered">
                        <h4>Candidate List:</h4>
                        <thead>
                        <tr>
                            <th scope="col">ID.</th>
                            <th scope="col">Enrol No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                        </tr>
                        </thead>
                    @foreach ($candidates as $candidate)
                        <tbody>
                        <tr>
                            <td>{{ $candidate->id }}</td>
                            <td>{{ $candidate->enrol }}</td>
                            <td>{{ $candidate->name }}</td>
                            <td><b>{{ $candidate->position->candidate_post}}</b></td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        
        </div>
        {{-- <div class="card shadow p-5 col-lg-6">
            <div class="row">
                <div class="col-lg-12 bg-success">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><h4>Result:</h4></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</td> 
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}

    </div>
</div>
@endsection