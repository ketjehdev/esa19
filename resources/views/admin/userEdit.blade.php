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
    <title>User Managament | ESA 19</title>
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
                        <li class="sidebar-item" style="border-radius: 100px"> <a class="sidebar-link sidebar-link" href="{{ route('admin/index') }}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon" style="color: purple"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">User Managament</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('/admin/edit/'.$data->id) }}"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">User
                                </span></a>
                        </li>
                        
                        <li class="list-divider"></li>
                       
                        <li class="nav-small-cap"><span class="hide-menu">Forms Managament</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('admin/form') }}"
                                aria-expanded="false"><i data-feather="file-text" class="text-success feather-icon"></i><span
                                    class="hide-menu">Form Pendaftaran
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('admin/report') }}"
                            aria-expanded="false"><i data-feather="database" class="text-info feather-icon"></i><span
                                class="hide-menu">Laporan
                            </span></a>
                        </li>

                        
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('admin/sertifikat') }}"
                            aria-expanded="false"><i data-feather="award" class="text-warning feather-icon"></i><span
                                class="hide-menu">Sertifikat</span></a>
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
                                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Users</h1>
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
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <a href="{{ route('admin/user') }}"><button class="btn btn-primary mb-3">Kembali</button></a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Edit User</h4>
                                </div>

                                <form action="{{ url('/admin/edit/'.$data->id) }}" method="POST" class="mx-5" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md">
                                        <p class="text-center">
                                            <label for="img" style="cursor: pointer"><img src="{{ asset('image_user/'.$data->image) }}"
                                                alt="user" class="rounded-circle" width="250"
                                                height="250" /></label><br>
                                            <input type="file" name="image" accept=".png, .jpeg, .jpg" id="img">
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <p class="text-center">
                                            <label for="name">Nama :</label><br>
                                            <input type="text" name="name" class="text-center form-control border-bottom-1" placeholder="Masukkan nama" value="{{ $data->name }}">
                                        </p>
                                        <p class="text-center">
                                            <label for="name">Bidang :</label><br>
                                            <input type="text" name="bidang" class="text-center form-control border-bottom-1" placeholder="Masukkan bidang" value="{{ $data->bidang }}">
                                        </p>
                                        <p class="text-center">
                                            <label for="role">Role :</label><br>
                                            <select name="role" id="role" class="form-control text-center">
                                                @if ($data->role == "Admin")
                                                    <option value="Admin">Admin</option>
                                                    <option value="Verifikator">Verifikator</option>
                                                    <option value="IT SUPPORT">IT SUPPORT</option>
                                                @elseif($data->role == "Verifikator")
                                                    <option value="Verifikator">Verifikator</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="IT SUPPORT">IT SUPPORT</option>    
                                                @elseif($data->role == "IT SUPPORT")
                                                    <option value="IT SUPPORT">IT SUPPORT</option>        
                                                    <option value="Verifikator">Verifikator</option>
                                                    <option value="Admin">Admin</option>
                                                @endif
                                            </select>
                                        </p>
                                        <button type="submit" class="btn btn-primary" style="width:100%">Edit User</button>
                                    </div>
                                </div>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
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