@extends('includes.master')
@section('content')
<div class="card mx-auto p-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br><br>
            <div class="pull-left">
                <h2>Add Candidate Post Here!</h2>
            </div>
            <br><br><br>
            @if ($message = Session::get('success'))
            <div id="alert" class="alert bg-success alert-success">
                {{ $message }}
                <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
            </div>
            @endif
            <br>
            <hr>

            <div class="pull-left mb-2">
                <form action="{{url('/post')}}" method="POST">
                    @csrf
                    <input type="text" name="candidate_post" required>
                    <button type="submit" class="fa fa-calendar-plus btn btn-info"> Add Position</button>
                </form>
                
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
            @csrf
          {{csrf_field()}}
          {{method_field('DELETE')}}
        
          <div class="modal-body">
            {{-- <input type="hidden" id="delete_user_id"> --}}
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

            <table class="table" id="datatable">
                <thead>
                    <tr class="bg-light">
                        <th scope="col"><b>Candidate Post</b></th>
                        <th scope="col"><b>Handle</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $data)
                  <tr>
                    <td>
                    <h4>
                            <div class="container mt-3">
                                {{$data->candidate_post}}
                            </div>
                        </h4>
                        
                    </td>
                    <td>
                        <a class="btn btn-primary" href='/edit/{{$data->id}}'>Edit</a>  
                        <a href="javascript:void(0)" class="btn btn-danger deletebtn" data-action="{{'/destroy'.'/'.$data->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
        </div>
    </div>
  
<script>
  $(document).ready(function(){
    $('#close-btn').click(function(){
      $('#alert').hide();
    });
  });
</script>
@endsection
@section('scripts')
    <script>
      $(document).ready( function () {
        $('#datatable').DataTable();

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