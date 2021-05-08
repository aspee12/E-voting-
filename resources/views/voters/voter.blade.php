@extends('includes.voterspage')
@section('body')
<div class="card shadow p-5">
    @if ($message = Session::get('success'))
    <div id="alert" class="alert alert-success">
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
    <form class="form-inline" action="{{url('/vote')}}" style="padding-left:300px" method="POST" required>
        @csrf
        <div class="form-group">
            <br><br>
            <div class="container">

                    <h3>Select Post of Candidate To Cast Vote</h3><br>
                    <select name="position_id" class="form-select form-select-lg " aria-label=".form-select-lg example" required>
                        <option value="" required></option>
                         @foreach ($positions as $position)  
                             <option value="{{ $position->id }}" required>{{ $position->candidate_post }}</option>
                         @endforeach 
                    </select>
            
                <button type="submit" class="btn btn-success" required>Select</button>
            </div>
    </div>
    </form>     
</div>
@endsection
