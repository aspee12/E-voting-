{{-- @extends('includes.voterspage')
@section('body')
    <!-- Button trigger modal -->


    <div class="card p-5" id="datatable">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 class="mt-5">
                        <h4>Candidate Post For {{ $positions->candidate_post }} :</h4>
                    </h2>
                </div>
                <br><br>
                <div class="float-right fa fa-arrow-left">
                    <a class="btn btn-info" href="/votting"> Back</a>
                </div>
            </div>
        </div>
        @if (!Auth::user()->voted($positions->id))

            @if (count($candidates) == 1)
                @foreach ($candidates as $candidate)
                    <form action="{{ route('vote.single') }}" method="POST" class="form">
                        @csrf
                        @method('POST')
                        <div class="container">
                            <div class="card-group">
                                <div class="card border-warning mb-3" style="max-width: 18rem;">
                                    <img class="card-img-top " src="{{ asset('uploads/candidate/' . $candidate->image) }}"
                                        height="290px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $candidate->name }}</h5>
                                        <p class="card-text">{{ $candidate->enrol }}</p>
                                        <p class="card-text" style="font-size: 25px;">
                                            <input type="hidden" name="position_id" value="{{ $positions->id }}">
                                            <input type="radio" class="" name="option" value="yes" required
                                                style="width: 27px; height: 27px;"> YES <br>
                                            <input type="radio" name="option" value="no" required
                                                style="width: 27px; height: 27px;"> NO
                                            <input type="hidden" name="candidate_id" value="{{ $candidate->id }}" required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn submit btn-success">Vote</button>
                    </form>
                @endforeach
            @else
                <form action="{{ route('vote.multi') }}" method="POST" class="form">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="position_id" value="{{ $positions->id }}" required>

                    @foreach ($candidates as $candidate)
                        <div class="container">
                            <div class="card-group">
                                <div class="card border-warning mb-3" style="max-width: 18rem;">
                                    <img class="card-img-top " src="{{ asset('uploads/candidate/' . $candidate->image) }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $candidate->name }}</h5>
                                        <p class="card-text">{{ $candidate->enrol }}</p>

                                        <p class="card-text" style="font-size: 25px;">
                                            <input type="radio" name="candidate_id" value="{{ $candidate->id }}" required
                                                style="width: 30px; height: 30px;"> PRESS
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <button type="submit" class="btn submit btn-success" required>Vote</button>
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
    </div>
@endsection --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>voting</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <!-- CSS only -->


</head>

<body>
    @include('Navbarpages.navbar')
    <main class="page contact-us-page">

        <div class="card p-5" id="datatable">
            <div class="text-center">
                <h2 class="mt-2 ">
                    <h4>Candidate of {{ $positions->candidate_post }} :</h4>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-1">
                    <div class="float-right fa fa-arrow-left">
                        <a class="btn btn-outline-dark" href="/votting"> Back</a>
                    </div>
                </div>
                <div class="col-lg-12 margin-tb">
                </div>
            </div>
            @if (!Auth::user()->voted($positions->id))
                @if (count($candidates) == 1)
                    @foreach ($candidates as $candidate)
                        <form action="{{ route('vote.single') }}" method="POST" class="form">
                            @csrf
                            @method('POST')
                            <div class="container">
                                <div class="card-group">
                                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                                        <img class="card-img-top "
                                            src="{{ asset('uploads/candidate/' . $candidate->image) }}"
                                            height="290px">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $candidate->name }}</h5>
                                            <p class="card-text">{{ $candidate->enrol }}</p>
                                            <p class="card-text" style="font-size: 25px;">
                                                <input type="hidden" name="position_id" value="{{ $positions->id }}">
                                                <input type="radio" class="" name="option" value="yes" required
                                                    style="width: 27px; height: 27px;"> YES <br>
                                                <input type="radio" name="option" value="no" required
                                                    style="width: 27px; height: 27px;"> NO
                                                <input type="hidden" name="candidate_id" value="{{ $candidate->id }}"
                                                    required>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12 ml-5">
                                <button type="submit" class="btn btn-success btn-lg" required>Vote</button>
                            </div>
                        </form>
                    @endforeach
                @else
                    <form action="{{ route('vote.multi') }}" method="POST" class="form">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="position_id" value="{{ $positions->id }}" required>

                        @foreach ($candidates as $candidate)
                            <div class="container text-center">
                                <div class="card-group mt-2">
                                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                                        <img class="card-img-top "
                                            src="{{ asset('uploads/candidate/' . $candidate->image) }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $candidate->name }}</h5>
                                            <p class="card-text">{{ $candidate->enrol }}</p>

                                            <p class="card-text" style="font-size: 25px;">
                                                <input type="radio" name="candidate_id" value="{{ $candidate->id }}"
                                                    required style="width: 30px; height: 30px;"> PRESS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-xs-12 col-sm-12 col-md-12 ml-5">
                            <button type="submit" class="btn btn-success btn-lg" required>Vote</button>
                        </div>
                    </form>
                @endif
        </div>
    @else
        <div class="card shadow mt-5" style="background-color: rgb(216, 178, 178)">
            <div class="card-body">
                <div class="card-text">
                    Candidate for this Post has been Already voted!
                </div>
            </div>
        </div>
        @endif

    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
@include('Navbarpages.footer')

</html>
