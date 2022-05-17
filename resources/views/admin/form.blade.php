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
    <title>Form Pendaftaran | ESA 19</title>
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
                                aria-expanded="false"><i data-feather="users" class="text-warning feather-icon"></i><span
                                    class="hide-menu">User
                                </span></a>
                        </li>   
                        
                        <li class="list-divider"></li>
                       
                        <li class="nav-small-cap"><span class="hide-menu">Forms Managament</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('admin/form') }}"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
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
                                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Managament</h1>
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
                                    <h4 class="card-title">Pendaftaran</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#insert">Tambah Form</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="insertTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="insertTitle">Tambah Form</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          {{-- form --}}
                                          <form action="{{ url('/admin/form') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                              <label for="jenis_lomba" class="form-label">Jenis Lomba</label>
                                              <select name="jenis_lomba" id="jenis_lomba" class="form-control" required>
                                                <option value="">- Pilih Jenis Lomba -</option>
                                                <option value="Education">Education</option>
                                                <option value="Sport">Sport</option>
                                                <option value="Amity">Amity</option>
                                                <option value="Art">Art</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="lomba" class="form-label">Lomba</label>
                                              <input type="text" class="form-control" id="lomba" name="lomba" placeholder="Masukkan lomba" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="ekskul" class="form-label">Ekskul</label>
                                                <select name="ekskul" id="ekskul" class="form-control" required>
                                                    <option value="">- Pilih Ekskul -</option>
                                                    <option value="Mustel">Mustel</option>
                                                    <option value="Telscout">Telscout</option>
                                                    <option value="E-Sport">E-Sport</option>
                                                    <option value="English Club">English Club</option>
                                                    <option value="Creative Squad">Creative Squad</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                              <label for="status" class="form-label">Status</label>
                                              <select name="status" id="status" class="form-control" required>
                                                  <option value="">- Pilih Status -</option>
                                                  <option value="AVAILABLE">AVAILABLE</option>
                                                  <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                                              </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="guide_book" class="form-label">Guide Book</label><br>
                                                <input type="text" class="form-control" id="guide_book" name="guide_book" placeholder="Tempelkan link guide book disini" required>
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
                                                <th class="border-0 font-14 font-weight-medium text-muted">Mata Lomba
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">Ekskul
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Status
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Guide Book
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Handle
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="border-top-1 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3">
                                                            <a href="{{ asset('image_form/'.$item->image) }}">
                                                                <img src="{{ asset('image_form/'.$item->image) }}"
                                                                alt="user" width="45"
                                                                height="45" />
                                                            </a>
                                                        </div>
                                                            <div class="">
                                                                <a href="{{ route('admin/index') }}"><h5 class="text-dark mb-0 font-16 font-weight-medium">{{ $item->lomba }}</h5>
                                                                    <span class="text-muted font-14">{{ $item->jenis_lomba }}</span>
                                                                </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                <td class="border-top-1 text-muted px-2 py-4 font-14 text-center">{{ $item->ekskul }}</td>
                                                <td class="border-top-1 text-center px-2 py-4"> 
                                                    <form action="{{ url('/admin/form/'.$item->id) }}" method="POST">
                                                        @csrf
                                                        <select class="py-2 px-2 text-center" style="font-size:  13px;" name="status">
                                                            @if ($item->status == "AVAILABLE")
                                                                <option value="AVAILABLE">AVAILABLE</option>    
                                                                <option value="NOT AVAILABLE">NOT AVAILABLE</option>    
                                                            @elseif($item->status == "NOT AVAILABLE")
                                                                <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                                                                <option value="AVAILABLE">AVAILABLE</option>    
                                                            @endif
                                                        </select>
                                                        
                                                        <button type="submit" class="btn btn-success">
                                                            <i data-feather="check-circle" class="text-light feather-icon"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td class="text-center">
                                                    <a href="{{ URL::to($item->guide_book) }}" target="_blank">
                                                        <i data-feather="file-text" class="feather-icon" style="color: purple"></i>
                                                        <p></p>
                                                    </a>
                                                </td>

                                                <td class="text-center">
                                                    <a onclick="return myFunction();" href="{{ url('/admin/delForm/'.$item->id) }}">
                                                        <button class="btn btn-danger">
                                                            <i data-feather="trash-2" class="feather-icon"></i>
                                                        </button>
                                                    </a>
                                                    <script>
                                                        function myFunction() {
                                                            if(!confirm("kamu yakin menghapus forms ini?"))
                                                            event.preventDefault();
                                                        }  
                                                        </script>
                                                    
                                                    <a href="{{ url('/admin/editGB/'.$item->id) }}">
                                                        <button class="btn btn-cyan">
                                                            <i data-feather="edit" class="feather-icon"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
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