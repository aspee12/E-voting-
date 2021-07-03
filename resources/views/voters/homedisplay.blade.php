{{-- @extends('includes.voterspage')
@section('body')

<div class="container">
    <div class="row">
        <div class=" card bg-light shadow p-5 ml-5 col-lg-10 col-md-10">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-sm table-bordered">
                        <h4>Candidate List:</h4>
                        <thead>
                        <tr>
                            <th scope="col">ID.</th>
                            <th scope="col">Enrol No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                        </tr>
                        </thead>
                    @foreach ($candidates as $candidate)
                        <tbody>
                        <tr>
                            <td>{{ $candidate->id }}</td>
                            <td>{{ $candidate->enrol }}</td>
                            <td>{{ $candidate->name }}</td>
                            <td><b>{{ $candidate->position->candidate_post}}</b></td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        
        </div>

    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Functionality</title>
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
    <br><br><br><br>
    <div class="container my-2">
        <div class="row">
            <div class=" card bg-light shadow p-5 ml-5 col-lg-10 col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-sm table-bordered">
                                <h4>Candidate List:</h4>
                                <thead>
                                    <tr>
                                        <th scope="col">Enrol No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                    </tr>
                                </thead>
                                @foreach ($candidates as $candidate)
                                    <tbody>
                                        <tr>
                                            <td>{{ $candidate->enrol }}</td>
                                            <td>{{ $candidate->name }}</td>
                                            <td><b>{{ $candidate->position->candidate_post }}</b></td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
@include('Navbarpages.footer')

</html>
