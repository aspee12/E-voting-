@extends('includes.voterspage')
@section('body')
<div class="card mx-auto p-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="pull-left">
                <h2>Manifesto Of the Candidate</h2>
            </div>
            <br>
            <hr>
            <table class="table">
                {{-- <thead>
                    <tr class="bg-light">
                        <th scope="col"><b>Video</b></th>
                        <th scope="col"><b>Description</b></th>
                    </tr>
                </thead> --}}
                <tbody>
                    @foreach ($menifestos as $menifesto)
                  <tr>
                    <td>
                        
                        <h5>
                            <div class="container mt-3">
                               Name: {{$menifesto->name}}
                            </div>
                            {{-- <div class="container mt-3">
                                Post: {{$menifesto->position->candidate_post}}
                             </div> --}}
                        </h5>
                            <div class="container mt-3">
                                <video width="600" height="340" controls>
                                    <source src="{{asset('uploads/menifesto/'.$menifesto->video)}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                            </div>
                            <div class="container mt-3">
                               <b>Description:</b>  <br>
                                {{-- <textarea class="border-primary" style="height:350px; width:250px;" readonly>{{$menifesto->description}}</textarea>  --}}
                                {{$menifesto->description}}
                            </div> <b><hr></b>
                    </td>
                </tr>
                @endforeach
                </tbody>
           </table>
            
        </div>
    </div>
@endsection
