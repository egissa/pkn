<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kuala Samboja - Portal Website</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('frontend/logo/logo.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
              <li class="nav-item nav-search d-none d-lg-block ml-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li> 
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('frontend/logo/logo.png') }}" style="width: 80px; height: 70px;" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('template/images/logo-mini.svg')}}" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <a href="{{ route('user.pemerintahan') }}" class="btn btn-inverse-primary btn-sm">Pemerintahan</a>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a href="{{ route('user.pembangunan') }}" class="btn btn-inverse-primary btn-sm">Pembangunan</a>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a href="{{ route('user.sosial') }}" class="btn btn-inverse-primary btn-sm">Sosial</a>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">
                      @if (Route::has('login'))
                        @auth
                          {{ Auth::user()->penduduk->nama }}
                          @else
                          Login Dulu
                        @endauth
                      @endif
                    </span>
                    <span class="online-status"></span>
                    <img src="{{ asset('frontend/assets/avatar/default.png')}}" class="rounded-circle" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      @if (Route::has('login'))
                        @auth
                          <div class="dropdown-divider"></div>
                            <a href="{{ route('user.logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="mdi mdi-logout text-primary"></i> Logout
                            </a>
                        @else
                        
                        @endauth
                      @endif
                      
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      @yield('nav')
    </div>
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
              @yield('content')     
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
          <div class="footer-wrap">
              <div class="w-100 clearfix">
                <span class="d-block text-center text-sm-left d-sm-inline-block">Copyright ©PKN POLITANI 2020. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed PKN 2020<i class="mdi mdi-heart-outline"></i></span>
              </div>
          </div>
        </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ asset('template/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('template/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="{{ asset('template/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('template/vendors/progressbar.js/progressbar.min.js')}}"></script>
        <script src="{{ asset('template/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
        <script src="{{ asset('template/vendors/justgage/raphael-2.1.4.min.js')}}"></script>
        <script src="{{ asset('template/vendors/justgage/justgage.js')}}"></script>
    <!-- Custom js for this page-->
    <script src="{{ asset('template/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script src="{{asset('dist/js/iziToast.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
      @if(Session::has('success'))
            iziToast.success({
                title: "Sukses",
                message: "{{ Session::get('success') }}",
                position: "topRight"
              });
        @endif
  </script>
  </body>
</html>