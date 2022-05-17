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

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('admin/user') }}"
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

                        <li class="list-divider"></li>
                        
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">List Account</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#insert">Tambahkan User</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- modal --}}
                                <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="insertTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="insertTitle">Tambah User</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          {{-- form --}}
                                          <form action="{{ url('/admin/user') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                              <label for="name" class="form-label">Name</label>
                                              <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama user" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="bidang" class="form-label">Bidang</label>
                                              <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Masukkan bidang user" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="role" class="form-label">Role</label>
                                                <select name="role" id="role" class="form-control" required>
                                                    <option value="">- Pilih Role User -</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Verifikator">Verifikator</option>
                                                    <option value="IT SUPPORT">IT SUPPORT</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="password" class="form-label">Password</label>
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password user" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="image" class="form-label">Foto Profil</label><br>
                                              <input type="file" id="image" name="image" accept=".png, .jpeg, .jpg" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>

                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Profil Account</th>
                                                <th class="border-0 font-14 font-weight-medium text-center text-muted">
                                                    Handle
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($user as $item) 
                                            <tr>
                                                <td class="border-top-1 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3">
                                                            <a href="{{ asset('image_user/'.$item->image) }}" target="_blank">
                                                            <img
                                                                src="{{ asset('image_user/'.$item->image) }}"
                                                                alt="user" class="rounded-circle" width="100"
                                                                height="100" />
                                                            </a>
                                                            </div>
                                                                <div class="mr-3">
                                                                    <h5 class="text-dark mb-0 d-inline font-16 font-weight-medium">{{ $item->name }} </h5><br>
                                                                    <span class="text-muted font-14">{{ $item->bidang }}</span><br>
                                                                    @if ($item->role == "Admin")
                                                                        <span class="text-light px-2 py-1" style="background: purple; border-radius: 20px; font-size: 12px">{{ $item->role }}</span>
                                                                    @elseif($item->role == "Verifikator")
                                                                        <span class="text-light px-2 py-1 bg-success" style="border-radius: 20px; font-size: 12px">{{ $item->role }}</span>
                                                                    @elseif($item->role == "IT SUPPORT")
                                                                        <span class="text-light px-2 py-1 bg-info" style="border-radius: 20px; font-size: 12px">{{ $item->role }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>                                                
                                                        <td class="border-top-1 text-muted px-2 py-4 font-14 text-center">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/delUser/'.$item->id) }}">
                                                            <button class="btn btn-danger">
                                                                <i data-feather="trash-2" class="feather-icon"></i>
                                                            </button>
                                                            </a>
                                                            <script>
                                                                function myFunction() {
                                                                    if(!confirm("kamu yakin menghapus user ini?"))
                                                                    event.preventDefault();
                                                                }  
                                                            </script>
                                                            <a href="{{ url('/admin/edit/'.$item->id) }}"><button class="btn btn-info"><i data-feather="edit-3" class="feather-icon"></i></button></a>
                                                        </td>
                                                        </tr>
                                            @empty
                                            <p class="text-center text-muted"><u>Tidak ada user!</u></p>
                                            
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
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