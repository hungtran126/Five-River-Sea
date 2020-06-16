
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets')}}/img/apple-icon.png">
  <link rel="shortcut icon" type="image/png" href="{{asset('images')}}/icon1.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('assets')}}/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets')}}/demo/demo.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Five River Sea
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        @section('dashboard')
        @show
        @section('page')
        @show
        @section('sanpham')
        @show
        @section('gallery')
        @show
        @section('user')
        @show
        @section('table')
        @show
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
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
          <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>
          @section('title')
          @show
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <form>
              <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                  <div class="input-group-text">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
              </div>
              </div>
          </form>
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                </a>
              </li>
              <li class="nav-item dropdown" style="font-size: 13pt;">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <i class="now-ui-icons location_world"></i> -->
                    @if(session('admin'))  
                      <span class="users_single-02">Hi <strong style="font-size: 14pt;">{{ session('admin')->user }}</strong></span>
                      <!-- <i class="now-ui-icons users_single-02"></i> -->
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#" style="font-size: 13pt;">Chỉnh sửa</a>
                    <a class="dropdown-item" href="#" style="font-size: 13pt;">Cài đặt</a>
                    <a class="dropdown-item" href="/admin/logout" style="font-size: 13pt;">Log out</a>
                </div>
              </li>
          </ul>
          </div>
      </div>
      </nav>
      @section('content')
      @show    
      <!-- <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer> -->
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assets')}}/js/core/jquery.min.js"></script>
  <script src="{{asset('assets')}}/js/core/popper.min.js"></script>
  <script src="{{asset('assets')}}/js/core/bootstrap.min.js"></script>
  <script src="{{asset('assets')}}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets')}}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets')}}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets')}}/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets')}}/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>