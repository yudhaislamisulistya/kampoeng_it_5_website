<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/assets/images/favicon.png')}}">
    <title>Panel - Kampoeng IT 5 2020</title>
    <!-- Custom CSS -->
    <link href="{{asset('public/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{asset('public/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('public/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{asset('public/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{asset('public/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                {{-- <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" /> --}}
                                <!-- Light Logo text -->
                                {{-- <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> --}}
                            </span>
                        </a>
                    </div>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('public/assets/images/users/profile-pic.jpg')}}" alt="user"
                                    class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">{{$dataauth['name']}}</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>Logout</button>
                                </form>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        @if ($dataauth['role'] == '1')
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{route('admin_dashboard')}}" aria-expanded="false"><i data-feather="home"
                                    class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Main</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Lomba</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">Siswa</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Line Followers</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Desain Grafis</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Network Competition</span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">Mahasiswa</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> UI/UX Competition</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Competitive Programming</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Network Competition</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> IOT Competition</span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">Umum</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Desain Grafis</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> LKTI</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> Sinematografi</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="post.php"
                                aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span
                                    class="hide-menu">Bukti Pembayaran
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{route('admin_post_utama')}}" aria-expanded="false"><i data-feather="layers"
                                    class="feather-icon"></i><span class="hide-menu">Post
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="aktivasi.php"
                                aria-expanded="false"><i data-feather="key" class="feather-icon"></i><span
                                    class="hide-menu">Aktivasi
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{route('admin_peserta_utama')}}" aria-expanded="false"><i data-feather="user"
                                    class="feather-icon"></i><span class="hide-menu">Peserta
                                </span></a>
                        </li>
                        @elseif($dataauth['role'] == '2')
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{route('member_dashboard')}}" aria-expanded="false"><i data-feather="home"
                                    class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{route('member_lomba_utama')}}" aria-expanded="false"><i data-feather="layers"
                                    class="feather-icon"></i><span class="hide-menu">Ikuti Lomba
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="{{route('member_team_utama')}}" aria-expanded="false"><i data-feather="tag"
                                    class="feather-icon"></i><span class="hide-menu">Daftar TIM
                                </span>
                            </a>
                        </li>
                        @endif
                        <li class="list-divider"></li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <li class="sidebar-item">
                                <button style="background-color: transparent;border: 0px solid transparent;"
                                    class="sidebar-link sidebar-link" href="" aria-expanded="false"><i
                                        data-feather="log-out" class="feather-icon"></i><span
                                        class="hide-menu">Logout</span>
                                </button>
                            </li>
                        </form>
                    </ul>
                </nav>
            </div>
        </aside>

        @yield('content')

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('public/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{asset('public/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('public/dist/js/feather.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('public/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('public/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <script src="{{asset('public/assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{asset('public/assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('public/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('public/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('public/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('public/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>
    <script src="{{asset('public/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script src="{{asset('public/js/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>
</body>

</html>
