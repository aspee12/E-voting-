@extends('includes.master')
@section('content')
<div class="container mr-0">
    <div class="row mr-10">
        <div class="card shadow p-5 col-lg-11">
            <div class="row">
                <div class="col-lg-12 bg-light">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><h3>Result For The Candidate:</h3></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr> 
                            <td>
                                    @foreach ($candidates as $candidate)
                                        <div class="form-check">
                                            <div class="ml-3">
                                               <b>ID: {{$candidate->id}}. </b> <br>
                                                <strong>{{$candidate->name}}</strong> 
                                                <strong> ({{$candidate->enrol}})</strong>
                                            </div>
                                             <br><img src="{{asset('uploads/candidate/'.$candidate->image)}}" class="ml-5 rounded-circle" height="220" width="220"/>
                                            </div> <br>
                                        <div class="form-check ml-5">
                                                <b>Post: {{$candidate->position->candidate_post}}</b>
                                            </div>
                                
                                        @if($candidate->vote_count)
                                         <div class="form-check text-success ml-5">
                                            <b>Total Vote:  {{$candidate->vote_count}}</b> 
                                         </div> 
                                        @endif
                                        @if($candidate->no_count || $candidate->yes_count) 
                                         <div class="form-check text-success ml-5">
                                            <b>Total Vote YES :  {{$candidate->yes_count}} <br>
                                               Total Vote NO  :  {{$candidate->no_count}}
                                            </b> 
                                        </div>
                                        @endif  
                                        <br>
                                    @endforeach
                             </td> 
                        </tr>
                        </tbody>
                    </table>
                    <form action="{{url('/delcare')}}" method="POST">
                        
                        <button  type="submit" class="btn submit btn-success" required>Make it public</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection