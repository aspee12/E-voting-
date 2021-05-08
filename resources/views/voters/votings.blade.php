@extends('includes.voterspage')
@section('body')
<!-- Button trigger modal -->

  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <form action="{{ route('vote.single') }}" id="submit_modal_form" method="POST" class="form">
              @csrf
              @method('POST')
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Think Before You Vote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <b>Are You Sure Want to Vote for This Candidate</b>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                    <button  type="submit" class="btn submit btn-success">Confirm Vote</button>
             </div>
        </div>
    </form>
    </div>
  </div> --}}

<div class="card p-5" id="datatable">   
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="mt-5"> <h4>Candidate Post For {{$positions->candidate_post}} :</h4></h2>
            </div>
            <br><br>
            <div class="float-right">
                <a class="btn btn-info" href="/votting"> Back</a>
            </div>
        </div>
    </div>
    @if(!Auth::user()->voted($positions->id))

        @if (count($candidates) == 1)
        @foreach ($candidates as $candidate)
        <form action="{{ route('vote.single') }}" method="POST" class="form">
            @csrf
            @method('POST')
            <input type="hidden" name="position_id" value="{{$positions->id}}">
            <h4> <label class="form-check-label text-dark">{{$candidate->name}}</label></h4><br>
            <img src="{{asset('uploads/candidate/'.$candidate->image)}}" height="100" width="100"/><br><br>
            <input type="radio" name="option" value="yes" required> YES <br>
            <input type="radio" name="option" value="no" required> NO
            <input type="hidden" name="candidate_id" value="{{$candidate->id}}" required>
            <br>
            <button  type="submit" class="btn submit btn-success">Vote</button>
        </form>
        @endforeach
        @else
        <form action="{{ route('vote.multi') }}" method="POST" class="form">
            @csrf
            @method('POST')
            <input type="hidden" name="position_id" value="{{$positions->id}}" required>

            @foreach ($candidates as $candidate)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="candidate_id" value="{{$candidate->id}}" required>
                <b><label class="form-check-label text-dark">{{$candidate->name}}</label> ({{$candidate->enrol}})</b>
                <br><img src="{{asset('uploads/candidate/'.$candidate->image)}}" height="100" width="100"/>
            </div>
            <br>
            @endforeach
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Vote
            </button> --}}
            
            <button  type="submit" class="btn submit btn-success" required>Vote</button>
        </form>        
        @endif
     @else 
        <div class="card shadow mt-5">
            <div class="card-body">
                <div class="card-text">
                    Already voted!
                </div>
            </div>
        </div>
     @endif

{{-- <script>
    $(document).ready(function(){
        $('.submit').click(function (e) { 
            e.preventDefault();
            $(this).hide();
            $('.form').submit();
        });
    });
</script> --}}

</div>
{{-- 
<script>
    $(document).ready(function(){
    
    $('#datatable').on('click,','.sumbitbtn',function(){
        $div = $(this).closest('div');
        var data = $div.children('br').map(function(){
            return $(this).text();
        }).get();
        $('#confirmvote_id').val(data[0]);
        $('#submit_modal_form').attr('action','vote.single'+data[0]);
        $('#exampleModal').modal('show');
    });
    });
</script> --}}
@endsection
