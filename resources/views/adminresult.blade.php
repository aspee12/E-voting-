@extends('includes.master')
@section('content')
<br><br>
    @if ($message = Session::get('msg'))
    <div id="alert" class="alert mr-4" style="background-color: rgb(224, 171, 171);" >
    {{ $message }}
    <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
</div>
@endif
<script>
$(document).ready(function(){
    $('#close-btn').click(function(){
    $('#alert').hide();
    });
});
</script>

<!--++++++++++++++++-->
<div class="container">
<div class="card-group">
    <form action="/testroute" method="post" >
    <div class="d-flex">
        @csrf
    @method('post')    
    @foreach ($candidates as $candidate)
    <div class="card col-md-3 m-4">
      <img src="{{asset('uploads/candidate/'.$candidate->image)}}" class="card-img-top my-2" height="220" width="100">
      <div class="card-body">
        <p><strong>Posistion: </strong>{{$candidate->position->candidate_post}}</p>
        <p class="card-title"><strong>ID:</strong> {{$candidate->id}}.</p>
        <p class="card-text"><strong>Name:</strong> {{$candidate->name}}</p>
    </div>
    <div class="card-body">
        @if($candidate->vote_count)
            <b>Total Vote: </b>
            <p class="btn btn-outline-success"> {{$candidate->vote_count}}</p>
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
            <div class="form-check form-check-inline ml-3 mb-2">
            <input class="form-check-input" type="radio" name="{{$candidate->id}}" id="{{'private'.$candidate->id}}" value="0" @if($candidate->declareresult->resultState() == 0) checked @endif>
            <label class="form-check-label" for="private">
                Private
            </label>
          </div>
          <div class="form-check form-check-inline ml-3 mb-2">
            <input class="form-check-input" type="radio" name="{{$candidate->id}}" id="{{'public'.$candidate->id}}" value="1"  @if($candidate->declareresult->resultState() == 1) checked @endif>
            <label class="form-check-label" for="public">
                Public
            </label>
        </div>
    </div>
    @endforeach
    </div>
    <button type="submit" class="btn btn-success">submit</button>
    </form>
</div>

</div>

@endsection