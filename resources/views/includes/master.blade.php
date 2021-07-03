
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{asset('assets/css/dataTable.min.css')}}"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body class="">
  <div class="wrapper ">

    <div class="sidebar" data-color="orange" style="background-color: rgb(196, 102, 102)"> <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="/" src="/img/logo.png" class="simple-text logo-normal">
          <img class="sidebar-logo ml-4" src="/img/logo.png" width="150" height="65" alt="Card image cap">
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'main' == request()->path() ? 'active' : ''}}">
            <a href="/main">
              <i class="fa fa-home"></i>
              <p><strong>Home</strong></p>
            </a>
          </li>
      
          <li class="{{ 'role' == request()->path() ? 'active' : ''}}">
            <a href="/role">
              <i class="fa fa-user"></i>
              <p><strong>Users Details</strong></p>
            </a>
          </li>
          <li class="{{ 'create' == request()->path() ? 'active' : ''}}">
            <a href="/create">
              <i class="fa fa-users"></i>
              <p><strong>Add Candidate Position</strong></p>
            </a>
          </li>

          <li class="{{ 'ballot' == request()->path() ? 'active' : ''}}">
            <a href="/ballot">
              <i class="fa fa-envelope"></i>
              <p><strong>Create Election</strong></p>
            </a>
          </li>
          <li class="{{ 'listcandidate' == request()->path() ? 'active' : ''}}">
            <a href="/listcandidate">
              <i class="fa fa-desktop"></i>
              <p><strong>Candidate List</strong></p>
            </a>
          </li>
          <li class="{{ 'adminresults' == request()->path() ? 'active' : ''}}">
            <a href="/adminresults">
              <i class="fa fa-cog"></i>
              <p><strong>Result Setting</strong></p>
            </a>
          </li>
          <li>
            <li class="{{ 'menifesto/create' == request()->path() ? 'active' : ''}}">
              <a href="{{route('menifesto.create')}}">
                <i class="fa fa-upload"></i>
                <p><strong>Handle Menifesto</strong></p>
              </a>
            </li>
        </ul>
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            
            <a class="navbar-brand" href="#pablo"><h4>Admin Dashboard</h4></a>
          </div>
        
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
               
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" style="font-size: 17px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }} &nbsp;
                    <img src="{{asset('uploads/userprofile/'.Auth::user()->profile)}}" style="border: 2px solid rgb(25, 197, 40); border-radius: 50%; width: 41px; height:40px;" onerror="this.src='/img/default.jpg'">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('/profile')}}">User Profile</a>
                  <a class="dropdown-item" href="change-password">Change Password</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                    <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header-sm " style="opacity:2; background-color:rgb(248, 207, 73)">
      </div>

      <div class="content">
        @yield('content')
        
      </div>


      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="/">
                  i-Vote
                </a>
              </li>
              <li>
                <a href="/About">
                  About Us
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com"target="_blank">GCIT I-VOTE</a>. Coded by <a href="" target="_blank">Tenzin Sonam Tashi</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="{{asset('assets/js/dataTable.min.js')}}"></script>
  @yield('scripts')
</body>

</html>