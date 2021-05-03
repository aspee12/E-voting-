
      <nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="#">i-VoteBuddy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/candidate">Candidate <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/functionality">Functionality</a>
            <a class="nav-item nav-link" href="/features">Features</a>
            <a class="nav-item nav-link" href="/About">About</a>
           
                <div class="navbar-nav antialiased ">
                    @if (Route::has('login'))
                        <div class=" navbar-nav hidden fixed top-0 right-0 px-6 py-4 md:block">
                            @auth
                            @if(Auth::user()->usertype == 'voter')
                               <a href="/voterhome"class="text-sm btn btn-primary mt-0 p-1" style="border-radius: 20px 20px">Dashboard</a>
                            @endif
                            @if(Auth::user()->usertype == 'admin')
                                <a href="/home"class="text-sm btn btn-primary mt-0 p-1" style="border-radius: 20px 20px">Dashboard</a>
                            @endif
                            @else
                                <a href="{{ route('login') }}" class="text-sm btn p-1 mr-2 btn-primary"  style="border-radius: 20px 20px">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="p-1 btn-primary" style="border-radius: 20px 20px">Register</a>
                                    @endif
                            @endauth
                        </div>
                    @endif
                </div> 
              </div>
          </div>
      </nav>