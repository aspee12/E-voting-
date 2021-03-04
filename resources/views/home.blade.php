@extends('layouts.app')
@section('content')
{{-- Election Creation button --}}
<div class="button" href="#collapseExample" data-toggle="tooltip" data-placement="top" title="Create Election"
    Tooltip on toprole="button" aria-expanded="false" aria-controls="collapseExample">
<button type="button" class="btn btn-outline-secondary"id="myBtn" onclick="myFunction()" value="/role">Creat Election</button>
</div>
{{-- end of button tag --}}

{{-- Election Cretion Form --}}
<div class="navbar" id="demo">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/details">Details</a></li>
        <li class="breadcrumb-item"><a href="#">Ballot</a></li> 
        <li class="breadcrumb-item"><a href="#">Notice</a></li>
        <li class="breadcrumb-item"><a href="#">Voter</a></li>
        <li class="breadcrumb-item"><a href="#">Review</a></li>
        <li class="breadcrumb-item"><a href="#">Result</a></li>
    </ol>
  </nav>
</div>
{{-- end of election form --}}
<script>
    function myFunction(){
      var x = document.getElementById("myBtn").value;
      document.getElementById("demo").innerHTML = x;
    }
</script>

  
  
        {{-- <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success alert dismissable" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('You are logged in!') }}
                            </div>
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

<h6>hello world</h6>
@endsection 


    