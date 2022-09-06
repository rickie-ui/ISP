<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <title>
    Blitz
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('css/soft-ui-dashboard.css?v=1.0.6')}}" rel="stylesheet" />

  {{-- Jquery --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

  <style>
   li  a:hover{
        background-color:  #FEB952;
        border-radius: 5px;
        color: #ffffff;

    }

    a.index-btn:hover {
     
         background-color: #FEB952 !important;  
         transition: 0.4s all;
         color: #ffffff;
         
    }

    .logo-index {
          
          width: 100px;
          object-fit: contain;
          height: 40px;
          border-radius: 5px    
         }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h4 class="font-weight-bolder mb-0" ><img src="{{asset('img/theme/slack.png')}}" class="logo-index">Blitz</h4>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
  
          </div>
          <ul class="navbar-nav  justify-content-between">
            <li class="nav-item d-flex align-items-center">
              <a href="/login" class="nav-link text-body font-weight-bold px-3">
                <span class="d-sm-inline d-none">Sign In /</span>
              </a>
            </li>
             <li class="nav-item d-flex align-items-center">
              <a href="#" class="nav-link text-body font-weight-bold px-3">
            
                <span class="d-sm-inline d-none">About us /</span>
              </a>
            </li>

             <li class="nav-item d-flex align-items-center  ">
              <a href="#" class="nav-link text-body font-weight-bold px-3">
              
                <span class="d-sm-inline d-none">Careers /</span>
              </a>
            </li>
              <li class="nav-item d-flex align-items-center ">
              <a href="#" class="nav-link text-body font-weight-bold px-3">
            
                <span class="d-sm-inline d-none">Contact /</span>
              </a>
            </li>
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>
    <div class="container " style="height:75vh; width:100%;background-image:url('{{asset('/img/shapes/wave-up.svg')}}')">


      <div style="position:fixed; top:50%;left:20%;">
        <h3 style="margin: 25px 0;">IT'S NICE TO MEET YOU</h3>
        <a href="/register"class="index-btn" style="background-color: #2E79F3; padding:14px 55px;width:auto;border-radius:5px;border:1px solid #2E79F3;font-weight:bold;text-decoration:none;color:#ffffff;">SIGN UP</a>
      </div>
    </div>

    <footer class="footer pt-3 w-45" style="position: fixed;bottom:10px; left:33.5%;">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="#" class="font-weight-bold" target="_blank">Erick</a>
              for a better web.
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
  </main>
 
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/soft-ui-dashboard.min.js?v=1.0.6')}}"></script>
</body>

</html>