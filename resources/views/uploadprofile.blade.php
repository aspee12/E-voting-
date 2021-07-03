@extends('includes.master')
@section('content')

<div class="container-fluid">
        <div class="col-md-12">
            <div class="link-1 mb-3" style="border: 1px solid gray; padding-left:15px">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="float-right fa fa-arrow-left mt-3">
                                <a class="btn btn-outline-dark" href="/profile"> Back</a>
                            </div>
                        </div>
                    </div>
                   
                 @foreach($data as $data)
                    <img src="{{asset('uploads/userprofile/'.$data->profile)}}" style="border: 3px solid rgb(149, 161, 163); border-radius: 50%; width: 165px; height:170px" onerror="this.src='/img/default.jpg'">
                    <h5 class="ml-auto" style="text-transform: uppercase;padding-le">{{$data->name}}</h5>
                    <form action="{{route('uploadprofle',$data->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-xs12 col-sm-12 col-md-12">
                            <div class="input-group">
                                <div class="custom-file">
                                    <strong>Upload Image   : </strong>
                                    <input id="file" type="file" name="profile" pattern="image/png,image/jpg,image/jpeg,image/gif,image/svg">
                                </div>
                            </div>
                            <button class="btn btn-info" type="submit">Upload</button>
                        </div>
                      </form>
                    <a href="{{url('/main')}}">Home  </a> 
                 @endforeach
                 <br>
            </div>
        </div>
    </div>
</div>

@endsection