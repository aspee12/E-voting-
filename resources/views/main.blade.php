<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('Navbarpages.head')          
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive"> 
    <header>
        {{-- start Navigation --}}
        @include('Navbarpages.navbar')
      </header>

 {{-- end Navigation --}}


<div class="container-fluid">
    <h1 class="heading text-white text-center pt-4">Online Voting</h1>
    <p class="sub-heading text-center text-white font-weight-bold  py-4">i-Vote</p>
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
            <p class="card-text">i-Vote ensures election integrity, 
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
        <br>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top rounded-circle" src="/img/12180045.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sonam Phuntsho </h5>
            <p class="card-text">Developer</p>
          </div>
  
        </div>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top rounded-circle" src="/img/12180053.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Tashi Wangmo</h5>
            <p class="card-text">Reseacher</p>
          </div>
  
        </div>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top rounded-circle" src="/img/12180059.JPG" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Tenzin Lhamo</h5>
            <p class="card-text">Designer</p>
          </div>
  
        </div>
        <div class="card m-1" style="width: 18rem;">
          <img class="card-img-top rounded-circle" src="/img/12180046.JPG" alt="Card image cap">
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
@include('Navbarpages.footer')
</html>

