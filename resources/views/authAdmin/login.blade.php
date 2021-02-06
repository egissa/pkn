<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Kuala Samboja</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ asset('frontend/logo/logo.png') }}">

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
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('/') }}" class="text-white"><i class="mdi mdi-home h1"></i></a>
        </div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="p-3">
                        <div class="float-right text-right">
                            <h4 class="font-18 mt-3 m-b-5">Welcome Back !</h4>
                            <p class="text-muted">Silahkan Login untuk melanjutkan.</p>
                        </div>
                        <a href="{{ url('/') }}" class="logo-admin"><img src="{{ asset('frontend/logo/logo.png') }}" height="100" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        
                        <form class="form-horizontal m-t-10" action="{{ route('admin.login.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-30">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-30 mb-0 row">
                                <div class="col-12 text-center">
                                    <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center text-white-50">
                <p>© 2020 - 2021 PKN Politani</p>
            </div>

        </div>
        <!-- end wrapper-page -->

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>

    </body>
</html>