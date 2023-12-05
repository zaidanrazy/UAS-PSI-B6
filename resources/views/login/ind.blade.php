<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/meteor/Source/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 01:06:36 GMT -->

<head>

    <!-- Title -->
    <title>Login</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="stacks" />

    <!-- Styles -->
    <link href="{{ asset('assets/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/uniform/css/default.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/meteor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}"></script>


</head>

<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            {{-- @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Failed!</strong> {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-3 center">
                        <div class="panel panel-white" id="js-alerts">
                            <div class="panel-body">
                                <div class="login-box">
                                    <a href="index.html" class="logo-name text-lg text-center m-t-xs">Login</a>
                                    <p class="text-center m-t-md">Please login into your account.</p>
                                    <form action="/login" method="post" class="m-t-md"
                                        action="http://polygons.space/meteor/Source/admin1/index.html">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid  @enderror"
                                                id="email" placeholder="Email" autofocus required
                                                value="{{ old('email') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control password"
                                                id="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Login</button>

                                    </form>
                                    <p class="text-center m-t-xs text-sm">2016 &copy; stacks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

    <!-- Javascripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pace-master/pace.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/uniform/js/jquery.uniform.standalone.js') }}"></script>
    <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
    <script src="{{ asset('assets/plugins/waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/meteor.min.js') }}"></script>

</body>

</html>
