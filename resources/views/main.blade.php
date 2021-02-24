<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>i-VoteBuddy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */ 
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive"> 
    <header>
        {{-- start Navigation --}}

        <nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-light">
            <a class="navbar-brand font-weight-bold" href="#">i-VoteBuddy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar stic" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Candidate <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Functionality</a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">About</a>
               </div>
            
                     
                    <div class="navbar-nav antialiased">
                        @if (Route::has('login'))
                            <div class=" navbar-nav hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ route('home') }}"class="text-sm text-gray-700 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                                @endauth
                            </div>
                        @endif
                    </div> 
                </div>
            </nav>
        </header>

 {{-- end Navigation --}}


<div class="container-fluid">
    <h1 class="heading text-white text-center pt-4">Online Voting</h1>
    <p class="text-center text-white font-weight-bold sub-heading py-4">i-vote</p>
    <div class="container text-center text-white">
        <div class="row">
            <div class="col-md-7 col-sm-12"></div>
            <h5>The ignorance of one voter in a democracy impairs the security of all</h5>
            <h1>"The ballot is stronger than the bullet"</h1>
            <p>"Democracy is based upon the conviction there are extraordinary possibilities in ordinary people."</p>
            <div class="col-md-5 col-sm-12"></div>
        </div>
    </div>


    <br>
    <hr>
    {{-- candiadte --}}
    <div class="col-md-12">
      <div class="row d-flex align-items-center justify-content-center text-center ml-auto">
  
        <div class="card m-1 data-tilt" style="width: 200rem;">
          {{-- <img class="card-img-top" src="https://images.pexels.com/photos/619419/pexels-photo-619419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap"> --}}
          <div class="card-body">
            <h5 class="card-title">The Easiest Way to Election Excellence</h5>
            <p class="card-text">i-vote ensures election integrity, 
                saves serious hours and improves turnout for election voting. 
            </p>
                <script src="vanilla-tilt.js"></script>
          </div>
        </div>
        <br>

        <hr>

        <br>

        {{-- endcandidate --}}

          {{-- satrt functionality --}}

        <div class="card m-1" style="width: 188rem;">
          {{-- <img class="card-img-top" src="https://images.pexels.com/photos/1679719/pexels-photo-1679719.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap"> --}}
          <div class="card-body">
            <h5 class="card-title">how it works</h5>
            <p class="card-text">fill in details,ballot,add voter,validate voter,view result</p>
          </div>
        </div>
        {{-- end functionality --}}
        <hr class="hr1">

        {{-- start features --}}

        <div class="container">
            <div calss=" card title font-size-12 "></div>
            <div class="raw pt-3 col-lg-4 col-md-4, col-sm-4 col-12">
        <div class="card m-1" style="width: 18rem;">
          <div class="card-body">
              {{-- <h4>Features</h4> --}}
            <h5 class="card-title">Voter reminder</h5>
            <p class="card-text">reminds voters through mail</p>
          </div>
        </div>
        <div class="card m-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Secure</h5>
            <p class="card-text">high security </p>
          </div>
        </div>

        <div class="card m-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">comfortable</h5>
            <p class="card-text">From every where</p>
          </div>
  
        </div>
        
        <div class="card m-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Fast</h5>
            <p class="card-text">really fast..how fast am i!</p>
          </div>
        </div>
    </div>
</div>
        {{-- end features --}}

        {{-- Aboutus --}}
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top" src="/img/12180045.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sonam Phuntsho </h5>
            <p class="card-text">Developer</p>
          </div>
  
        </div>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top" src="/img/12180053.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Tashi Wangmo</h5>
            <p class="card-text">Reseacher</p>
          </div>
  
        </div>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top" src="/img/12180059.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Tenzin Lhamo</h5>
            <p class="card-text">Designer</p>
          </div>
  
        </div>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top" src="/img/12180046.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sonam Jamtsho</h5>
            <p class="card-text">Co-Coder</p>
          </div>
  
        </div>
  
      </div>
      {{-- aboutus --}}
  
    </div>
  </div>
 </div>
                    <footer>
                        <div class="main-content text-white">
                          <div class="left box">
                            <h2>About us</h2>
                            <div class="content">
                              <p>Truely telling you its really frustrating to do the FINAL YEAR PROJECT</p>
                              <div class="social">
                                <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
                                <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
                              </div>
                            </div>
                          </div>
                  
                          <div class="center box">
                            <h2>Address</h2>
                            <div class="content">
                              <div class="place">
                                <span class="fas fa-map-marker-alt"></span>
                                <span class="text">Mongar, Gyalposhing</span>
                              </div>
                              <div class="phone">
                                <span class="fas fa-phone-alt"></span>
                                <span class="text">+975-765100</span>
                              </div>
                              <div class="email">
                                <span class="fas fa-envelope"></span>
                                <span class="text">i-vote@gmail.com</span>
                              </div>
                            </div>
                          </div>
                  
                          <div class="right box">
                            <h2>Contact us</h2>
                            <div class="content">
                              <form action="#">
                                <div class="email">
                                  <div class="text">Email *</div>
                                  <input type="email" required>
                                </div>
                                <div class="msg">
                                  <div class="text">Message *</div>
                                  <textarea rows="10" cols="25" required></textarea>
                                </div>
                                <div class="btn float-right">
                                  <button type="submit">Send</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="bottom">
                          <center>
                            <span class="credit">Created By i-vote</a></span>
                            <span class="far fa-copyright"></span><span> @ 2020 All rights reserved.</span>
                          </center>
                        </div>
                      </footer>
                </div>
            </div>
            </footer>
        </html>

