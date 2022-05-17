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

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('/users/pionering/'.$data->id) }}"
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
                    <div class="col-lg-4 col-md-12">
                        <a href="{{ url('/users/daftar2/'.$data->id) }}">
                            <button class="btn btn-primary">Kembali</button>
                        </a>
                    </div>
                </div>

                <div class="row my-3 d-flex justify-content-center">
                    <div class="col-lg-7 col-md-12 py-3 px-4" style="background: #fff; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1); border-radius: 10px">
                    @if ($data->jenis_lomba == "Amity")
                        <form action="/users/pionering" method="POST" enctype="multipart/form-data">
                        @csrf
                            @if ($data->lomba == "Pionering")
                                    <h2 class="font-weight-bold text-dark pb-3">{{ $data->lomba }}</h2>
                                    <input type="hidden" name="lomba" value="{{ $data->lomba }}">
                                    
                                    <label for="regu" class="text-dark">Regu<span class="text-danger">*</span></label>
                                        <select value="{{ old('regu') }}" name="regu" id="regu" class="form-control @error('regu')
                                            is-invalid
                                        @enderror">
                                            <option value="">- Pilih regu -</option>
                                            <option value="Putra">Putra</option>
                                            <option value="Putri">Putri</option>
                                        </select>
                                        @error('regu')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>
                                    
                                    <label for="asal_pangkalan" class="text-dark">Asal Pangkalan <span class="text-danger">*</span></label>
                                    <input type="text" value="{{ old('asal_pangkalan') }}" name="asal_pangkalan" id="asal_pangkalan" class="@error('asal_pangkalan')
                                        is-invalid
                                    @enderror form-control" placeholder="Asal pangkalan anda">
                                    @error('asal_pangkalan')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="ketua" class="text-dark">Pembina / Pendamping<span class="text-danger">*</span></label>
                                    <input type="text" name="ketua" id="ketua" value="{{ old('ketua') }}" class="@error('ketua')
                                        is-invalid
                                    @enderror form-control" placeholder="Ketua pangkalan">
                                    @error('ketua')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="no_wa" class="text-dark">No. WhatsApp (ketua) <span class="text-danger">*</span></label>
                                    <input type="number" name="no_wa" id="no_wa" value="{{ old('no_wa') }}" class="@error('no_wa')
                                        is-invalid
                                    @enderror form-control" placeholder="Nomor WhatsApp">
                                    @error('no_wa')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>

                                    <label for="penggalang1" class="text-dark">Penggalang 1 <span class="text-danger">*</span></label>
                                    <input type="text" name="penggalang1" id="penggalang1" value="{{ old('penggalang1') }}" class="@error('penggalang1')
                                        is-invalid
                                    @enderror form-control" placeholder="Nama penggalang 1">
                                    @error('penggalang1')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>

                                    <label for="penggalang2" class="text-dark">Penggalang 2 <span class="text-danger">*</span></label>
                                    <input type="text" name="penggalang2" id="penggalang2" value="{{ old('penggalang2') }}" class="@error('penggalang2')
                                        is-invalid
                                    @enderror form-control" placeholder="Nama penggalang 2">
                                    @error('penggalang2')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>

                                    <label for="penggalang3" class="text-dark">Penggalang 3 <span class="text-danger">*</span></label>
                                    <input type="text" name="penggalang3" id="penggalang3" class="form-control @error('penggalang3')
                                        
                                    @enderror" value="{{ old('penggalang3') }}" placeholder="Nama penggalang 3">
                                    @error('penggalang3')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>

                                    <label for="penggalang4" class="text-dark">Penggalang 4 <span class="text-danger">*</span></label>
                                    <input type="text" name="penggalang4" id="penggalang4" class="form-control @error('penggalang4')
                                        is-invalid
                                    @enderror" value="{{ old('penggalang4') }}" placeholder="Nama penggalang 4">
                                    @error('penggalang4')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>
                                    
                                    <label for="kts1" class="text-dark">KTS<span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input type="file" name="kts1" id="kts1"><br>
                                    @error('kts1')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>
                                    
                                    <label for="kts2" class="text-dark">KTS Penggalang 1 <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input type="file" name="kts2" id="kts2"><br>
                                    @error('kts2')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>
                                    
                                    <label for="kts3" class="text-dark">KTS Penggalang 2 <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input type="file" name="kts3" id="kts3"><br>
                                    @error('kts3')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror<br>
                                    
                                    <label for="kts4" class="text-dark">KTS Penggalang 3 <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input type="file" name="kts4" id="kts4"><br>
                                    @error('kts4')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    <br>
                                    
                                    <label for="kts5" class="text-dark">KTS Penggalang 4 <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input type="file" name="kts5" id="kts5"><br>
                                    @error('kts5')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <br>
                                    
                                    <input type="hidden" name="status" value="not verified">
                                    <span class="text-dark" style="display: inline-block">
                                        <input type="checkbox" name="check">
                                        Saya menyetujui syarat dan ketentuan yang berlaku <br>
                                        @error('check')
                                            <span class="text-danger">{{ $message }}</span>
                                            <br>
                                        @enderror
                                    </span><br>
                                    
                                    <button type="submit" class="mt-4 btn btn-success" style="width: 100%">Daftar Gratis</button>
                            @endif
                        </form>
                    @endif

                    @if ($data->jenis_lomba == "Education" || $data->jenis_lomba == "Sport" || $data->jenis_lomba == "Art" || $data->lomba == "LCTP Pramuka")
                    <p class="text-center">
                        <span class="text-center" style="display: inline-block">-- [Empty] --</span>
                        <div class="tenor-gif-embed" data-postid="16956664" data-share-method="host" data-aspect-ratio="0.925" data-width="100%"><a href="https://tenor.com/view/empty-blinded-sad-gif-16956664">Empty Blinded GIF</a>from <a href="https://tenor.com/search/empty-gifs">Empty GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                    </p>    
                    @endif

                    </div>
                </div>
                
                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
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