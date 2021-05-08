@extends('includes.master')
@section('content')

<div class="card mx-auto p-4">
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <br><br>
          <div class="pull-left">
              <h2>UPLOAD LIST OF THE CANDIDATE HERE</h2>
          </div>
          <br>
          <br>
          <hr>
          <div class="pull-left mb-2">
              <a class="btn fa fa-plus-square btn-warning " href="{{ route('ballot.create') }}"> Add new Candidate</a>
          </div>
      </div>
  </div>
  @if ($message = Session::get('success'))
      <div id="alert" class="alert bg-success alert-success">
          {{ $message }}
          <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
      </div>
  @endif
  @if ($message = Session::get('fail'))
      <div id="alert" class="alert bg-danger alert-danger">
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
</div>

{{-- Delete Modal --}}
<!-- Modal -->
<div class="modal fade" id="deletemodalpop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete before you make changes!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="delete_modal_form" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
      
        <div class="modal-body">
          <input type="hidden" id="delete_user_id">
          <h4>Are You ure want to delete this Data?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Yes. Confirm Delete</button>
        </div>
      </form>

    </div>
  </div>
</div>
{{-- end Modal --}}

<div class="card mx-auto p-4">
  <table class="table table-bordered  table-sm" id="datatable">
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Image</th>
          <th>Description</th>
          <th>Position</th>
          <th width="280px">Action</th>
      </tr>
      @foreach ($candidates as $candidate)
      <tr>
          <td>{{ $candidate->enrol }}</td>
          <td>{{ $candidate->name }}</td>
          <td><img src="{{asset('uploads/candidate/'.$candidate->image)}}"  class="rounded-circle" height="100" width="100"/></td>
          <td>{{ $candidate->detail }}</td>
          <td><b>{{ $candidate->position->candidate_post }}</b>
            <a href="{{route('menifesto.create')}}">View Manifestos</a>
          </td>
          <td>
  
                  <a class="btn btn-info" href="{{ route('ballot.show',$candidate->id) }}">View</a>
  
                  <a class="btn btn-primary" href="{{ route('ballot.edit',$candidate->id) }}">Edit</a>
  
                  <a href="javascript:void(0)" class="btn btn-danger deletebtn" data-action={{ route('ballot.destroy',$candidate->id) }}>Delete</a>
          </td>
      </tr>
      @endforeach
  </table>
  
  {{$candidates->links()}}
</div>
@endsection  

{{-- jquary for the modal --}}
@section('scripts')
    <script>
      $(document).ready( function () {
        
          $('.deletebtn').on('click', function (){

              $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function () {
                return $(this).text();
              }).get();


              $('#delete_user_id').val(data[0]);
              $action = $(this).attr('data-action');
              $('#delete_modal_form').attr('action', $action);

              $('#deletemodalpop').modal('show');
          });
      });
    </script>
@endsection