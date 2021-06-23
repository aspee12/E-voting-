@extends('includes.voterspage')
@section('body')
<div class="container">      
    <h3>Result for the Candidates</h3>
    @if($declared > 0)
    <div class="card-group">
        @foreach ($candidates as $candidate)
        @if($candidate->declareresult->resultState() == 1)
        <div class="card col-md-3 m-3">
            <img src="{{asset('uploads/candidate/'.$candidate->image)}}" class="card-img-top my-2" height="220" width="100">
            <div class="card-body">
            <p><strong>Posistion: </strong>{{$candidate->position->candidate_post}}</p>
            <p class="card-title"><strong>ID:</strong> {{$candidate->id}}.</p>
            <p class="card-text"><strong>Name:</strong> {{$candidate->name}}</p>
        </div>
        <div class="card-body">
            @if($candidate->vote_count)
                <b>Total Vote: </b>
                <button type="button" class="btn btn-outline-success"> {{$candidate->vote_count}}</button>
            @endif
            @if($candidate->no_count || $candidate->yes_count) 
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <th>YES</th>
                        <th>NO</th>
                    </tr>
                    <tr>
                        <td>{{$candidate->yes_count}}</td>
                        <td>{{$candidate->no_count}}</td>
                    </tr>
                </tbody>
                </table>
            @endif 
            </div>
    
        </div>
        @endif
        @endforeach
    </div>
    @else
        <h1>Not Declared Yet</h1>
    @endif
@endsection