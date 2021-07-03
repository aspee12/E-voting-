<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Voting</title>
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
    <div class="container "> <br><br>
        <h3 class="text-center">Result for the Candidates</h3>
        @if ($declared > 0)
            <div class="card-group">
                @foreach ($candidates as $candidate)
                    @if ($candidate->declareresult->resultState() == 1)
                        <div class="card col-md-3 m-3 shadow">
                            <i class="text-center"><strong>{{$candidate->position->id}}. Elected - </strong>{{ $candidate->position->candidate_post }}</i>
                            <img src="{{ asset('uploads/candidate/' . $candidate->image) }}" class="card-img-top my-2"
                                height="290" width="100">
                            <div class="card-body">
                                <p class="card-title"><strong>ID:</strong> {{ $candidate->id }}.</p>
                                <p class="card-text"><strong>Name:</strong> {{ $candidate->name }}</p>
                                @if ($candidate->vote_count)
                                    <b>Total Vote: &nbsp; </b>
                                    <button type="button" class="btn btn-outline-success">
                                        {{ $candidate->vote_count }}</button>
                                @endif
                            </div>
                            <div class="card-body">
                                @if ($candidate->no_count || $candidate->yes_count)
                                    <table class="table table-sm table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>YES</th>
                                                <th>NO</th>
                                            </tr>
                                            <tr>
                                                <td>{{ $candidate->yes_count }}</td>
                                                <td>{{ $candidate->no_count }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div class="container">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body text-danger" style="font-size: 29px;">
                         <p>Please Wait Result is not declared!</p>
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


