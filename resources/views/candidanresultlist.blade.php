@extends('includes.master')
@section('content')

<div class="row">
    <br><br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br><br>
            <h2>List of Candidate and View Resutl!</h2>
        </div>
    </div>
</div>

 <div class=" card shadow p-5 mr-5 col-lg-12 col-md-12">
     <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-sm table-bordered">
                            <h4 class="text-center">Candidate List:</h4>
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
                                <td><b>{{ $candidate->position->candidate_post }}</b></td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
     </div>
        
 </div>
 
@endsection