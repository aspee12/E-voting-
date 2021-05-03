@extends('includes.master')

@section('title')
    Registered Recorded | i-Vote Buddy
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Register Details</h4>
        </div>

      @if ($message = Session::get('success'))
          <div id="alert" class="alert bg-success alert-success">
              {{ $message }}
              <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">X</button>
          </div>
      @endif
      <script>
        $(document).ready(function(){
          $('#close-btn').click(function(){
            $('#alert').hide();
          });
        });
      </script>

{{-- Delete Modal --}}
<!-- Button trigger modal -->

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
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="datatable">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Usertype</th>
                <th>EDIT</th>
                <th>DELETE</th>

              </thead>
              <tbody>
              @foreach ($users as $row)
                <tr>
                  <td>{{ $row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->phone}} </td>
                  <td> {{$row->email}}</td>
                  <td> -{{$row->usertype}}</td>
                  
                  @if ($row->usertype!='admin')
                  <td> 
                      <a href='{{route("admin.edit",$row->id)}}' class="btn btn-info">EDIT</a>
                  </td>
                  <td> 
                    <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a>

                 </td>
                 @endif

                 @if ($row->usertype=='admin')
                    <td> 
                      <a href='{{route("admin.edit",$row->id)}}' class="btn btn-info">EDIT</a>
                    </td>
                 @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

@section('scripts')
    <script>
      $(document).ready( function () {

          $('#datatable').on('click', '.deletebtn', function (){

              $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function () {
                return $(this).text();
              }).get();


              $('#delete_user_id').val(data[0]);

              $('#delete_modal_form').attr('action','/delete/'+data[0]);

              $('#deletemodalpop').modal('show');
          });
      });
    </script>
@endsection