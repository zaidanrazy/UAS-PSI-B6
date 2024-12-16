<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/meteor/Source/admin1/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 01:12:45 GMT -->

<head>
    <style>
        body {
            position: relative;
        }
    </style>
    {{--
    <style>
        .select2-selection {
            display: none;
        }

        hash .select2-selection--single {
            display: none;

        }

        /* .selection {
            display: none;
        } */
    </style> --}}

    <!-- Title -->
    <title>barang</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="stacks" />
    <link href="{{ asset('assets/images/logo-d.png') }}" rel="icon">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    {{-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> --}}
    {{-- BARU  --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

    {{-- <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}"> --}}

    {{-- ASLI --}}
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- DATA TABLE TEMPLATE --}}

    <link href="{{ asset('assets/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/css/jquery.datatables_themeroller.css') }}" rel="stylesheet"
        type="text/css" />


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">

    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- FA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- ANIMASI -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- copy kah -->

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
    <link href="{{ asset('assets/plugins/slidepushmenus/css/component.css') }}" rel="stylesheet" type="text/css" />

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> --}}
    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/meteor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/jawir.css') }}" />

    <script src="{{ asset('assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}"></script>

    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
     WARNING: Respond.js doesn't work if you view the page via file://
    [if lt IE 9]>
        <![endif]--!> --}}

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- SELECT 2 -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

    {{-- Image --}}
    <link href="{{ asset('assets/plugins/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css') }}"
        rel="stylesheet" type="text/css" />
    <script
        src="
                                                                                                                                                                                                                                                                                                                                                                                                                    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
                                                                                                                                                                                                                                                                                                                                                                                                                    ">
    </script>
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<body class="compact-menu">
    <div class="overlay"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
        <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i
                    class="icon-close"></i></a></h3>
    </nav>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right"
                id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="{{ asset('assets/images/avatar2.png') }}" alt="">
                </div>
                <div class="chat-message">
                    Duis aute irure dolor?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Ut ullamcorper, ligula.
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Curabitur pretium?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Etiam tempor. Ut tempor! ull amcorper.

                </div>
            </div>
        </div>
        <div class="chat-write">
            <form class="form-horizontal" action="javascript:void(0);">
                <input type="text" class="form-control" placeholder="Say something">
            </form>
        </div>
    </nav>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
                <div class="logo-box ms-5">
                    <a href="index.html" class="logo-text"
                        style= "font-family:candara; font-weight: bold; height:15px; font-size:18px; bold"><span>SIPPB-DISHUB
                            {{-- font-family: "poppins", sans-serif; --}}
                            <img src="{{ asset('assets/images/pak-dishub.png') }}" class="" height="20">
                        </span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            {{-- <li>
                                <a href="javascript:void(0);" class="sidebar-toggle"><i
                                        class="icon-arrow-left"></i></a>
                            </li> --}}
                            {{-- <li>
                                <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
                            </li> --}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Header
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right fixed-header-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Sidebar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right fixed-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Horizontal bar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right horizontal-bar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Toggle Sidebar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right toggle-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Compact Menu
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right compact-menu-check" checked>
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Hover Menu
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right hover-menu-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Boxed Layout
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox"
                                                        class="js-switch pull-right boxed-layout-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="no-link"><button class="btn btn-default reset-options">Reset
                                            Options</button></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>

                            </li>
                            <li class="dropdown">

                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li>
                                        <p class="drop-title">You have 4 new messages!</p>
                                    </li>
                                    <li class="dropdown-menu-list slimscroll messages">

                                    <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                </ul>
                            </li>
                            {{-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-bell"></i><span
                                        class="badge badge-warning pull-right">3</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li>
                                        <p class="drop-title">You have 3 pending tasks!</p>

                                    </li>
                                    <li class="dropdown-menu-list slimscroll tasks">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-success"><i
                                                            class="fa fa-user"></i></div>
                                                    <span
                                                        class="badge badge-roundless badge-default pull-right">1m</span>
                                                    <p class="task-details">New user registered</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-primary"><i
                                                            class="fa fa-refresh"></i></div>
                                                    <span
                                                        class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">3 Charts refreshed</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-danger"><i
                                                            class="fa fa-phone"></i></div>
                                                    <span
                                                        class="badge badge-roundless badge-default pull-right">1h</span>
                                                    <p class="task-details">2 Missed calls</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                </ul>
                            </li> --}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{-- <div class="d-flex align-items-center justify-content-between"> --}}
                                    <span class="user-name">{{ auth()->user()->name }}<i
                                            class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="{{ asset('assets/images/avatar1.png') }}"
                                        width="40" height="40" alt="">
                                    {{-- <i class='bx bx-user-circle bx-lg mr-5 fs-3 text-white'></i> --}}
                                    {{-- </div> --}}

                                </a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        {{-- <li role="presentation"><a href="profile.html"><i
                                                class="icon-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="calendar.html"><i
                                                class="icon-calendar"></i>Calendar</a></li> --}}
                                        {{-- <li role="presentation"><a href="inbox.html"><i
                                                class="icon-envelope-open"></i>Inbox<span
                                                class="badge badge-success pull-right">4</span></a></li> --}}
                                        {{-- <li role="presentation" class="divider"></li> --}}

                                        <li role="presentation">
                                            <button
                                                class="nav-link d-flex btn btn-light align-items-center gap-2 bg-transparent border-0"
                                                type="submit">
                                                <i class="icon-key m-r-xs"></i>Log
                                                out</a>
                                        </li>
                                    </ul>
                                </form>
                            </li>

                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->

        @include('layout.sidebar')

        <!-- Page Sidebar -->

        @yield('tes')
        <div id="main-wrapper">
            <div class="row">
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        {{-- <div class="page-footer">
        </div> --}}
        <style>
            .page-footer {
                text-align: center;
            }
        </style>
        <div class="page-footer">
            <p class="no-s">Made with <i class="fa fa-heart"></i>SIPPB-DISHUB</p>
        </div>

        {{-- <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p> --}}
        <!-- Page Inner -->
    </main><!-- Page Content -->
    {{-- <nav class="cd-nav-container" id="cd-nav">
        <header>
            <h3>DEMOS</h3>
        </header>
        <div class="col-md-6 demo-block demo-selected demo-active">
            <p>Dark<br>Design</p>
        </div>
        <div class="col-md-6 demo-block">
            <a href="http://polygons.space/meteor/Source/admin2/index.html">
                <p>Light<br>Design</p>
            </a>
        </div>
        <div class="col-md-6 demo-block">
            <a href="http://polygons.space/meteor/Source/admin3/index.html">
                <p>Material<br>Design</p>
            </a>
        </div>
        <div class="col-md-6 demo-block demo-coming-soon">
            <p>Horizontal<br>(Coming)</p>
        </div>
        <div class="col-md-6 demo-block demo-coming-soon">
            <p>Coming<br>Soon</p>
        </div>
        <div class="col-md-6 demo-block demo-coming-soon">
            <p>Coming<br>Soon</p>
        </div>
    </nav> --}}
    <div class="cd-overlay"></div>

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> --}}
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
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
    <script src="{{ asset('assets/plugins/3d-bold-navigation/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/meteor.min.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <link rel="stylesheet" href="{{ asset('/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}">
    {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> --}}


    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/charts-chartjs.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    {{-- upload --}}

    <script src="{{ asset('assets/plugins/plupload/js/plupload.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-plupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-select2.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>


    {{-- DATA TABLE TMPLTE --}}

    <script src="{{ asset('assets/plugins/datatables/js/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/table-data.js') }}"></script>

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    {{-- BARU --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}



    <!-- Latest compiled and minified JavaScript -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script> --}}



    {{-- <script>
        new DataTable('#example'    );
    </script> --}}
    {{--
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    @if (session('success'))
        {{-- <style>
            .selection {
                display: none
            }
        </style> --}}
        <script type="text/javascript">
            let timerInterval;
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                timer: 5000,
                icon: 'success',
                timerProgressBar: true,
                confirmButtonText: 'Oke',
                didOpen: () => {
                    timerInterval = setInterval(() => {}, 250)
                },
                willClose: () => {
                    // window.location.reload();

                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {

                }
            });
        </script>
    @endif



    @if (session('failed'))
        {{-- <style>
            .selection {
                display: none
            }
        </> --}}

        <script type="text/javascript">
            let timerInterval;
            Swal.fire({
                title: "Fail!",
                text: "{{ session('failed') }}",
                timer: 500000,
                icon: 'error',
                timerProgressBar: true,
                confirmButtonText: 'Oke',
                didOpen: () => {
                    timerInterval = setInterval(() => {}, 100)
                },
                willClose: () => {
                    // window.location.reload();
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {

                }
            });
        </script>
    @endif

    <script>
        const deleteData = (page) => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                // confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteForm').attr('action', page);
                    $('#deleteForm').submit();
                }
            });
        }
    </script>

</body>
{{-- @include('sweetalert::alert') --}}


<!-- Mirrored from polygons.space/meteor/Source/admin1/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 01:12:45 GMT -->

</html>
