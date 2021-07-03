
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
        <div class="card shadow p-5">
            @if ($message = Session::get('success'))
                <div id="alert" class="alert alert-success">
                    {{ $message }}
                    <button id="close-btn" type="button" class="border-none btn btn-sm float-right my-auto pt-0">x</button>
                </div>
            @endif
            <script>
                $(document).ready(function() {
                    $('#close-btn').click(function() {
                        $('#alert').hide();
                    });
                });
            </script>
            <form class="form-inline" action="{{ url('/vote') }}" style="padding-left:300px" method="POST" required>
                @csrf
                <div class="form-group">
                    <br><br>
                    <div class="container">
    
                        <h3>Select Post of Candidate To Cast Vote</h3><br>
                        <select name="position_id" class="form-select form-select-lg " aria-label=".form-select-lg example"
                            required>
                            <option value="" required></option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}" required>{{ $position->candidate_post }}</option>
                            @endforeach
                        </select>
                             <button type="submit" class="btn btn-success float-right mt-2" required>Select</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
@include('Navbarpages.footer')

</html>
