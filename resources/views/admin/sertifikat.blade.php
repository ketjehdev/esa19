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
    <title>Sertifikat | ESA 19</title>
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
                                aria-expanded="false"><i data-feather="award" class="feather-icon"></i><span
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
                                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Sertifikat Management</h1>
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
                        <button class="btn btn-cyan" data-toggle="modal" data-target="#tambahSertif">+ Tambah Sertifikat</button>
                        {{-- modal --}}
                        <div class="modal fade" id="tambahSertif" tabindex="-1" role="dialog" aria-labelledby="tambahSertifTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="tambahSertifTitle">Tambah Sertifikat</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  {{-- form --}}
                                  <form action="{{ url('/admin/sertifikat') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="name" class="form-label">Nama</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama peserta" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="sekolah" class="form-label">Sekolah</label>
                                      <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Masukkan sekolah peserta" required>
                                    </div>

                                    <div class="mb-3">
                                      <label for="lomba" class="form-label">Lomba</label>
                                      <input type="text" class="form-control" id="lomba" name="lomba" placeholder="Masukkan lomba peserta" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="Juara" class="form-label">Juara</label><br>
                                      <select name="juara" id="juara" required class="form-control">
                                          <option value="">- Pilih Juara -</option>
                                          <option value="-">-</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                      </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="sertifikat" class="form-label">Sertifikat</label><br>
                                        <input type="file" name="sertifikat" accept=".jpeg, .jpg, .png" id="sertifikat" required>
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
                          {{-- end modal --}}

                        <form action="" class="my-3">
                            <input type="search" name="search" style="display: inline;border:1px solid #aaa;padding:8px;" placeholder="Cari Sertifikat">
                            <button class="btn btn-primary">
                                <i data-feather="search"></i>
                            </button>
                        </form>
                    </div>
                </div>


                <div class="row">
                    @forelse ($data as $item)
                    <div class="col-lg-4 col-md-12">
                        <div class="card text-center">
                            <div class="px-2 py-2">
                                <h3 class="text-dark">
                                    <strong>{{ $item->name }}</strong>
                                </h3>
                            </div>

                            <p class="text-center">
                                <a href="{{ asset('sertifikat/'.$item->sertifikat) }}" target="_blank">
                                    <img src="{{ asset('sertifikat/'.$item->sertifikat) }}" alt="sertifikat" width="100%" height="380px">
                                </a>
                            </p>
                            
                            <div class="d-flex mx-3 justify-content-between">
                                <span>
                                    Sekolah :
                                </span>
                                <span>
                                    {{ $item->sekolah }}
                                </span>
                            </div>

                            <div class="d-flex mx-3 justify-content-between">
                                <span>
                                    Lomba :
                                </span>
                                <span>
                                    {{ $item->lomba }}
                                </span>
                            </div>

                            <div class="d-flex mx-3 justify-content-between">
                                <span>
                                    Juara :
                                </span>
                                <span>
                                    {{ $item->juara }}
                                </span>
                            </div>
                            
                            <div class="card-body">
                                <a href="{{ asset('sertifikat/'.$item->sertifikat) }}" download><button class="btn btn-primary my-2" style="width: 100%"><i data-feather="download"></i> Download </button></a>
                                <a onclick="return myFunction()" href="{{ url('/admin/sertifikat/'.$item->id) }}"><button class="btn btn-danger" style="width: 100%"><i data-feather="trash-2"></i> Hapus </button></a>
                                <script>
                                    function myFunction() {
                                        if(!confirm("kamu yakin menghapus sertifikat ini?"))
                                        event.preventDefault();
                                    }  
                                </script>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="mx-3">Tidak ada sertifikat</p>
                    
                    @endforelse
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