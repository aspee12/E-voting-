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
            <div class="float-right fa fa-arrow-left">
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
            <div class="container">
                <div class="card-group">
                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                        <img class="card-img-top " src="{{asset('uploads/candidate/'.$candidate->image)}}" height="290px">
                        <div class="card-body">
                        <h5 class="card-title">{{$candidate->name}}</h5>
                        <p class="card-text">{{$candidate->enrol}}</p>
                        <p class="card-text" style="font-size: 25px;">
                            <input type="hidden" name="position_id" value="{{$positions->id}}">
                            <input type="radio" class="" name="option" value="yes" required style="width: 27px; height: 27px;"> YES <br>
                            <input type="radio" name="option" value="no" required style="width: 27px; height: 27px;"> NO
                            <input type="hidden" name="candidate_id" value="{{$candidate->id}}" required>
                        </p>
                        </div>
                    </div>
                </div>
            </div> 
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
            <div class="container">
                <div class="card-group">
                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                        <img class="card-img-top " src="{{asset('uploads/candidate/'.$candidate->image)}}">
                        <div class="card-body">
                        <h5 class="card-title">{{$candidate->name}}</h5>
                        <p class="card-text">{{$candidate->enrol}}</p>
                            {{-- <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button"  name="candidate_id" value="{{$candidate->id}}" class="btn btn-outline-success">Press</button>
                                </div>
                            </div> --}}
                            <p class="card-text" style="font-size: 25px;">
                                <input type="radio" name="candidate_id" value="{{$candidate->id}}" required style="width: 30px; height: 30px;">  PRESS
                            </p>
                        </div>
                    </div>
                </div>
            </div>  
            @endforeach
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Vote
            </button> --}}
            <button  type="submit" class="btn submit btn-success" required>Vote</button>
        </form>
        @endif
     @else 
        <div class="card shadow mt-5" style="background-color: rgb(216, 178, 178)">
            <div class="card-body">
                <div class="card-text">
                  Candidate for this Post has been Already voted!
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
