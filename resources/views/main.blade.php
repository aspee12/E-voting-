<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>iVote</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
</head>

<body>
    @include('Navbarpages.navbar')
    <main class="page landing-page">
        <section class="clean-block clean-hero"
            style="background-image:url(&quot;assets/img/tech/votebg.jpg&quot;);color:rgba(188, 220, 214, 0.09);">
            <div class="text">
                <h2><br><br><br><br> The ingorance of one voter in a democracy impairs the security of all.</h2>
                <p>"Democracy is based upon the conviction there are extraordinary possibilities in ordinary people."
                </p>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">The Easiest Way to Election Excellence</h2>
                    <p>Bad Governments are Elected by Good Citizens who Don't Vote.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail width-50" src="assets/img/scenery/download.jpg">
                    </div>
                    <div class="col-md-6">
                        <h3>Vote according to your convinence</h3>
                        <div class="getting-started-info">
                            <p>An online voting system is a software platform that allows groups to securely conduct
                                votes and elections. Electronic voting, a form of computer-mediated voting in which
                                voters make their selections with the aid of a computer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p></p>
                </div>
            </div>
        </section>
        <div class="row justify-content-center">
            <div class="col-md-5 feature-box"><i class="icon-notebook icon"></i><br>
                &nbsp; <h4>Fill in details</h4>
                <p>The details of the Candidates are fill for voters convinence, like the name, ID and post for which
                    they are competing for.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon ion-android-checkbox-outline icon"></i><br><br>
                <h4>Ballot</h4>
                <p>A ballot is a device used to cast votes in an election and may be found as a piece of paper or a
                    small ball used in secret voting.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-user-follow icon"></i><br>
                &nbsp; <h4>Add voters</h4>
                <p>voter registration (or enrollment) is the requirement that a person otherwise eligible to vote must
                    register, which is usually a prerequisite for being entitled or permitted to vote.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-user-following icon"></i><br>
                &nbsp; <h4>View Result</h4>
                <p>Once the voting is over, the result will be generate and declared to the users. The result will
                    displayed on the website.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i><br>
                &nbsp; <h4>Validate voters</h4>
                <p>The Voters are confirmed and validated so that there won't be any problems during voting.</p>
            </div>
            <div class="col-md-5 feature-box"><i class="icon-envelope-letter icon"></i><br>
                &nbsp; <h4>Email Notices</h4>
                <p>The verification is done using e-mail. A mail verification is sent while signing up to confirm the
                    crenditials of the one registering.</p>
            </div>
        </div>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block"
                                src="assets/img/scenery/BALLOT-BOX-Photo.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block"
                                src="assets/img/scenery/photo-1598630954946-06cae04b7249.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block"
                                src="assets/img/scenery/photo-1534293230397-c067fc201ab8.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                            class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                                class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                    </ol>
                </div>
            </div>
        </section>
        {{-- <section class="clean-block about-us">
            <div class="container" style="/*width: 300px;*/">
                <div class="row justify-content-center" id="flexx" style="/*width: 900px;*//*border-radius: 50%;*/">
                    <div class="col-sm-6 col-lg-3" style="/*width: 25%;*//*border-radius: 50%;*/">
                        <div class="card clean-card text-center" style="/*width: 25%;*/"><img
                                class="card-img-top w-100 d-block" src="assets/img/avatars/a1.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Sonam Jamtsho</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" style="/*width: 25%;*//*border-radius: 50%;*/">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                src="assets/img/avatars/a2.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Tashi Wangmo</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 offset-sm-0" style="/*width: 25%;*//*border-radius: 50%;*/">
                        <div class="card clean-card text-center&quot; style =&quot;width: 900px;&quot;"><img
                                class="card-img-top w-100 d-block" src="assets/img/avatars/a3.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Sonam Jamtsho</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" style="/*width: 5%;*//*border-radius: 50%;*/">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                src="assets/img/avatars/a4.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Tenzin Lhamo</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <div class="container">
            <div class="row">
                <h3 class="text-center">Manifesto</h3><br>
                
                    @foreach ($menifestos as $menifesto)
                    <div class="col-md-3 shadow-lg bg-white mx-3">
                        <video width="290" height="300" controls>
                            <source src="{{ asset('uploads/menifesto/' . $menifesto->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h2 class="lead text-center"><strong>Name: {{$menifesto->name}}</strong></h2>
                        <p class="lead text-center">{{$menifesto->description}}</p>
                        <div class="icons text-center"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                        class="icon-social-instagram"></i></a><a href="#"></a></div>
                    </div>    
                    @endforeach
                
            </div>
        </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body><br>
@include('Navbarpages.footer')

</html>
