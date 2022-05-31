<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="purple">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo esa 19.png') }}">
    <title>Pendaftaran | ESA 19</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.csss') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
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
                        <a href="{{ route('index') }}">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets/images/logo esa 19.png') }}" alt="homepage" style="width: 50px; height: 50px;"/>
                                <span class="text-dark">ESA 19</span>
                            </b>
                            <!--End Logo icon -->
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right mx-4">
                        <h2 class="page-title text-dark font-weight-bold mb-1">ESA 19</h2>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item" style="border-radius: 100px"> <a class="sidebar-link sidebar-link" href="{{ route('index') }}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon" style="color: purple"></i><span
                                    class="hide-menu">Home</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Forms</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users/form') }}"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Pendaftaran
                                </span></a>
                        </li>

                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users/sertifikat') }}"
                            aria-expanded="false"><i data-feather="award" class="text-warning feather-icon"></i><span
                                class="hide-menu">Sertifikat
                            </span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users/contact') }}"
                            aria-expanded="false"><i data-feather="smartphone" class="text-info feather-icon"></i><span
                                class="hide-menu">Contact
                            </span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
                                aria-expanded="false"><i data-feather="log-out" class="text-danger feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item">
                                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Pendaftaran Online</h1>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-lg-4 col-md-12">
                        <div class="card text-center">
                            <img src="{{ asset('image_form/'.$item->image) }}" class="card-img-top" alt="..." height="300" width="100%">
                            <div class="card-body">
                                <h3 class="card-title">{{ $item->lomba }}</h3>
                                <div class="d-flex flex-row justify-content-between">
                                    <span>Jenis Lomba :</span>
                                    <span style="color: white; background: purple; border-radius:18px" class="px-2">{{ $item->jenis_lomba }}</span>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <span>Tingkat :</span>
                                    <span class="text-dark">
                                    <span style="color: #fff; border-radius:18px" class="bg-primary px-2">SMP</span>
                                    </span>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <span>Persyaratan :</span>
                                    <span class="text-primary">
                                        <a href="{{ URL::to($item->guide_book) }}" style="text-decoration: underline" target="_blank">
                                            Guide Book
                                        </a>
                                    </span>
                                </div>
                                <div class="d-flex flex-row justify-content-between mb-3">
                                    <span>Status :</span>
                                    @if ($item->status == "AVAILABLE")
                                        <span style="color: #fff; border-radius:18px" class="bg-success px-2">{{ Str::ucfirst(strtolower($item->status)) }}</span>
                                    @elseif ($item->status == "NOT AVAILABLE")
                                        <span style="color: #fff; border-radius:18px" class="bg-danger px-2">{{ Str::ucfirst(strtolower($item->status)) }}</span>
                                    @endif
                                </div>
                                    @if ($item->status == "AVAILABLE")
                                        @if ($item->jenis_lomba == "Education" || $item->jenis_lomba == "Art")
                                            <a href="{{ url('/users/daftar/'.$item->id) }}"><button class="btn btn-success" style="width: 100%">Daftar</button></a>
                                        @elseif($item->jenis_lomba == "Sport" || $item->jenis_lomba == "Amity")
                                            <a href="{{ url('/users/daftar2/'.$item->id) }}"><button class="btn btn-success" style="width: 100%">Daftar</button></a>
                                        @endif
                                    @elseif($item->status == "NOT AVAILABLE")
                                        <button class="btn btn-danger" disabled style="width: 100%">Daftar</button>
                                    @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/images/poster home.png') }}" alt="poster home" style="width: 100%;height: 100%;">
                            </div>
                            <div class="card-footer">
                                * Lomba akan dibatalkan jika peserta tidak memenuhi target!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Time-line ESA 19</h4>
                                <div class="mt-4 activity">
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <span class="btn btn-info btn-circle mb-2 btn-item">
                                                <i data-feather="users"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Pendaftaran Peserta</h5>
                                            <p class="font-14 mb-2 text-muted">Tanggal : 22 April 2022 - 14 Juni 2022</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <span class="btn btn-danger btn-circle mb-2 btn-item">
                                                <i data-feather="video"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Technical Meeting (TM)</h5>
                                            <p class="font-14 mb-2 text-muted">Tanggal : 15 Juni 2022</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line">
                                        <div>
                                            <span class="btn btn-cyan btn-circle mb-2 btn-item">
                                                <i data-feather="target"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Pelaksanaan ESA 19</h5>
                                            <p class="font-14 mb-2 text-muted">Tanggal : 17 Juni 2022 - 19 Juni 2022 </p>
                                            <span class="font-weight-light font-14 mb-1 d-block text-muted">
                                                <i data-feather="map-pin"></i> SMK TELKOM 1 MEDAN (offline)
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line">
                                        <div>
                                            <span class="btn btn-warning btn-circle mb-2 btn-item">
                                                <i data-feather="award" class="text-light"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Pengumuman Pemenang</h5>
                                            <p class="font-14 mb-2 text-muted">Tanggal : 19 Juni 2022 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Copyright &copy; ESA 19 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.min.js') }}"></script>
</body>

</html>