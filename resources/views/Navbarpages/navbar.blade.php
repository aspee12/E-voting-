{{-- new navbar --}}

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
</head>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar p-0">
    <div class="container">
        <i class="icon-user-following"></i><a class="navbar-brand logo p-0"
            href="#">i-Vote</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                class="sr-only">Toggle
                navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <div class="navbar-nav antialiased ">
                @if (Route::has('login'))
                    <div class=" navbar-nav hidden fixed top-0 right-0 px-6 py-4 md:block">
                        @auth
                            @if (Auth::user()->usertype == 'voter')

                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/"><i
                                                class="fa fa-home" style="padding: 10px;"></i>Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/voterhome"><i
                                                class="fa fa-archive" style="padding: 10px;"></i>Dashboard</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/votting"><i
                                                class="fa fa-address-card" style="padding: 10px;"></i>Vote</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active"
                                            href="/voterresult"><i class="fa fa-desktop"
                                                style="padding: 10px;"></i>Result</a></li>
                                    <li class="nav-item dropdown mt-2">
                                        <a id="navbarDropdown" class="fa fa-user-circle text-dark nav-link dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="fa dropdown-menu dropdown-menu-right"
                                            aria-labelledby="navbarDropdown">
                                            <a class="text-dark bg-light dropdown-item fa-external-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            @endif
                            @if (Auth::user()->usertype == 'admin')
                                <ul class="nav navbar-nav ml-auto">

                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/"><i
                                                class="fa fa-home" style="padding: 10px;"></i>Home</a></li>

                                    <li class="nav-item" role="presentation"><a class="nav-link active"
                                            href="/functionality"><i class="fa fa-gears"
                                                style="padding: 10px;"></i>Functionality</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/contact"><i
                                                class="fa fa-phone" style="padding: 10px;"></i>Contact Us</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/listcandidate"><i
                                                class="fa fa-archive" style="padding: 10px;"></i>Dashboard</a></li>

                                </ul>
                            @endif
                        @else
                            <ul class="nav navbar-nav ml-auto">

                                <li class="nav-item" role="presentation"><a class="nav-link active" href="/"><i class="fa fa-home"
                                            style="padding: 10px;"></i>Home</a></li>

                                <li class="nav-item" role="presentation"><a class="nav-link active" href="/functionality"><i
                                            class="fa fa-gears" style="padding: 10px;"></i>Functionality</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="/contact"><i
                                            class="fa fa-phone" style="padding: 10px;"></i>Contact Us</a></li>
                                
                                <li class="nav-item mt-2" role="presentation"><a class="nav-link active" href="/login"><i class=" "
                                            style="padding: 10px;"></i>Login</a></li>
                                <li class="nav-item mt-2" role="presentation"><a class="nav-link active" href="/register"><i class=" "
                                            style="padding: 10px;"></i>Register</a></li>

                            </ul>
                        </div>
                    @endauth

                @endif

            </div>
        </div>
    </div>
</nav>
