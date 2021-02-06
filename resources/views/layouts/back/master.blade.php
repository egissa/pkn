<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Kelurahan - Kuala Samboja</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ asset('frontend/logo/logo.png') }}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css')}}">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">

        <!-- Basic Css files -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/images/logo.png')}}" alt="" height="20" class="logo-large">
                        <img src="{{ asset('assets/images/logo-sm.png')}}" alt="" height="22" class="logo-sm">
                    </a>
                </div>

                <nav class="navbar-custom">
                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="navbar-right d-flex list-inline float-right mb-0">


                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>

                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/user.png')}}" alt="user" class="rounded-circle">
                                <span class="d-none d-md-inline-block ml-1">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="dripicons-exit text-muted"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="{{ url('/admin') }}" class="waves-effect">
                                    <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-address-book"></i><span> Pelayanan <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('pemerintahan') }}">Pemerintahan</a></li>
                                    <li><a href="{{ route('pembangunan') }}">Pembangunan</a></li>
                                    <li><a href="{{ route('sosial') }}">Sosial</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('jabatan') }}" class="waves-effect">
                                    <i class="dripicons-user-id"></i><span class="badge badge-info badge-pill float-right"></span> <span> Jabatan </span>
                                </a>
                            </li>

                            <li class="menu-title">Registrasi Penduduk</li>

                                                        <li>
                            <a href="{{ route('penduduk') }}" class="waves-effect"><i class="fa fa-user-plus"></i><span> Registrasi </span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                @yield('content')
                <footer class="footer">
                    © 2020 - 2021 Foxia <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>

        <script src="{{ asset('plugins/peity-chart/jquery.peity.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{ asset('plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{ asset('assets/pages/dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
        @yield('footer')
    </body>
</html>