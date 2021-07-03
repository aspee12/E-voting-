@extends('includes.master')
@section('content')
    <div class="card mx-auto p-4 ">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                @if ($message = Session::get('success'))
                    <div id="alert" class="alert alert-success" style="background-color: rgb(139, 230, 139)">
                        {{ $message }}
                        <button id="close-btn" type="button"
                            class="border-none btn btn-sm float-right my-auto pt-0">x</button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="float-left fa fa-arrow-left">
                            <a class="btn btn-outline-dark" href="{{ route('ballot.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($menifestos as $menifesto)
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <video width="450" height="300" controls>
                                <source src="{{ asset('uploads/menifesto/' . $menifesto->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <p><strong>Name: {{ $menifesto->name }}</strong> </p>
                            <p>{{ $menifesto->description }}</p>
                            <form action="{{ route('menifesto.destroy', $menifesto->id) }}" method="POST">
                                <a class="btn btn-primary"
                                    href="{{ route('menifesto.edit', $menifesto->id) }}">Edit</a><br><br>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#close-btn').click(function() {
                    $('#alert').hide();
                });
            });
        </script>
    @endsection
