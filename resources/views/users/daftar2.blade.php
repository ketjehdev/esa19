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

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('/users/daftar2/'.$data->id) }}"
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
                        <a href="{{ route('users/form') }}">
                            <button class="btn btn-primary">Kembali</button>
                        </a>
                    </div>
                </div>

                <div class="row my-3 d-flex justify-content-center">
                    <div class="col-lg-7 col-md-12 py-3 px-4" style="background: #fff; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1); border-radius: 10px">
                        
                    @if ($data->jenis_lomba == "Sport")
                        <form action="{{ url('/users/daftar2') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                @if ($data->lomba == "Mobile Legends" || $data->lomba == "Free Fire")
                                    <h2 class="font-weight-bold text-dark pb-3">{{ $data->lomba }}</h2>
                                    <input type="hidden" name="lomba" value="{{ $data->lomba }}">
                                    
                                    <label for="asal_sekolah" class="text-dark">Asal Sekolah <span class="text-danger">*</span></label>
                                    <input value="{{ old('asal_sekolah') }}" required type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Asal sekolah anda">
                                    <br>
    
                                    <label for="nama_tim" class="text-dark">Nama Tim <span class="text-danger">*</span></label>
                                    <input required type="text" name="nama_tim" value="{{ old('nama_tim') }}" id="nama_tim" class="form-control" placeholder="Nama Tim kamu">
                                    <br>
    
                                    <label for="ketua_tim" class="text-dark">Ketua Tim <span class="text-danger">*</span></label>
                                    <input value="{{ old('ketua_tim') }}" required type="text" name="ketua_tim" id="ketua_tim" class="form-control" placeholder="Ketua tim">
                                    <br>
                                    
                                    <label for="no_wa" class="text-dark">Nomor WhatsApp Ketua <span class="text-danger">*</span></label>
                                    <input value="{{ old('no_wa') }}" required type="number" name="no_wa" id="no_wa" class="form-control" placeholder="example: 08xxxxxx">
                                    <br>
                                    
                                    <label for="player1" class="text-dark">Player 1 <span class="text-danger">*</span></label>
                                    <input required type="text" value="{{ old('player1') }}" name="player1" id="player1" class="form-control" placeholder="Player 1">
                                    <br>
                                    
                                    <label for="player2" class="text-dark">Player 2 <span class="text-danger">*</span></label>
                                    <input required type="text" value="{{ old('player2') }}"  name="player2" id="player2" class="form-control" placeholder="Player 2">
                                    <br>
                                    
                                    <label for="player3" class="text-dark">Player 3 <span class="text-danger">*</span></label>
                                    <input required type="text" name="player3" value="{{ old('player3') }}" id="player3" class="form-control" placeholder="Player 3">
                                    <br>
    
                                    @if ($data->lomba == "Mobile Legends")
                                        <label for="player4" class="text-dark">Player 4 <span class="text-danger">*</span></label>
                                        <input required type="text" name="player4" id="player4" value="{{ old('player4') }}" class="form-control" placeholder="Player 4">
                                        <br>
                                        
                                        <label for="player5" class="text-dark">Cadangan (opsional)</label>
                                        <input required type="text" name="player5" id="player5" class="form-control" value="{{ old('player5') }}" placeholder="cadangan">
                                        <br>
    
                                    @elseif($data->lomba == "Free Fire")
                                        <label for="player4" class="text-dark">Cadangan (opsional)</label>
                                        <input required type="text" value="{{ old('player4') }}" name="player4" id="player4" class="form-control" placeholder="cadangan">
                                        <br>
                                    @endif
                                    
                                    <label for="id_ketua" class="text-dark">ID ketua <span class="text-danger">*</span></label>
                                    <input required type="text" name="id_ketua" id="id_ketua" value="{{ old('id_ketua') }}" class="form-control" placeholder="3248xxxx">
                                    <br>
                                    
                                    <label for="id_player1" class="text-dark">ID player 1 <span class="text-danger">*</span></label>
                                    <input required type="text" name="id_player1" id="id_player1" class="form-control" value="{{ old('id_player1') }}" placeholder="3248xxxx">
                                    <br>
                                    
                                    <label for="id_player2" class="text-dark">ID player 2 <span class="text-danger">*</span></label>
                                    <input required type="text" name="id_player2" id="id_player2" class="form-control" value="{{ old('id_player2') }}" placeholder="3248xxxx">
                                    <br>
                                    
                                    <label for="id_player3" class="text-dark">ID player 3 <span class="text-danger">*</span></label>
                                    <input required type="text" value="{{ old('id_player3') }}" name="id_player3" id="id_player3" class="form-control" placeholder="3248xxxx">
                                    <br>
                                    
                                    @if ($data->lomba == "Mobile Legends")
                                        <label for="id_player4" class="text-dark">ID player 4 <span class="text-danger">*</span></label>
                                        <input required type="text" name="id_player4" value="{{ old('id_player4') }}" id="id_player4" class="form-control" placeholder="3248xxxx">
                                        <br>
                                                                        
                                        <label for="id_player5" class="text-dark">ID Cadangan (opsional)</label>
                                        <input required type="text" name="id_player5" id="id_player5" value="{{ old('id_player5') }}" class="form-control" placeholder="3248xxxx">
                                        <br>
                                    @elseif ($data->lomba == "Free Fire")
                                        <label for="id_player4" class="text-dark">ID Cadangan (opsional)</label>
                                        <input required type="text" name="id_player4" id="id_player4"  value="{{ old('id_player4') }}" class="form-control" placeholder="cadangan">
                                        <br>
                                    @endif
    
                                    <label for="kts_ketua" class="text-dark">Kartu Tanda Siswa (ketua) <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label><br>
                                    <input required type="file" accept=".jpg, .jpeg, .png" name="kts_ketua" id="kts_ketua">
                                    @error('kts_ketua')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br><br>
    
                                    <label for="kts_player1" class="text-dark">Kartu Tanda Siswa (player1) <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label><br>
                                    <input required type="file" accept=".jpg, .jpeg, .png" name="kts_player1" id="kts_player1">
                                    @error('kts_player1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br><br>
    
                                    <label for="kts_player2" class="text-dark">Kartu Tanda Siswa (player2) <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label><br>
                                    <input required type="file" accept=".jpg, .jpeg, .png" name="kts_player2" id="kts_player2">
                                    @error('kts_player2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br><br>
    
                                    <label for="kts_player3" class="text-dark">Kartu Tanda Siswa (player3) <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label><br>
                                    <input required type="file" accept=".jpg, .jpeg, .png" name="kts_player3" id="kts_player3">
                                    @error('kts_player3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br><br>
    
                                    @if ($data->lomba == "Mobile Legends")
                                        <label for="kts_player4" class="text-dark">Kartu Tanda Siswa (player4) <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label><br>
                                        <input required type="file" accept=".jpg, .jpeg, .png" name="kts_player4" id="kts_player4">
                                        @error('kts_player4')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br><br>
    
                                        <label for="kts_player5" class="text-dark">Kartu Tanda Siswa (cadangan -> opsional) <span class="text-muted">(Max: 1.8MB)</span></label><br>
                                        <input required type="file" accept=".jpg, .jpeg, .png" name="kts_player5" id="kts_player5">
                                        @error('kts_player5')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br><br>
                                    @elseif($data->lomba == "Free Fire")    
                                        <label for="kts_player4" class="text-dark">Kartu Tanda Siswa (cadangan) <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label><br>
                                        <input required type="file" accept=".jpg, .jpeg, .png" name="kts_player4" id="kts_player4">
                                        @error('kts_player4')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br><br>
                                    @endif
    
                                    <input type="hidden" name="status" value="not verified">
                                    <span class="text-dark" style="display: inline-block">
                                        <input required type="checkbox" name="check">
                                        Saya menyetujui syarat dan ketentuan yang berlaku
                                    </span><br>
                                    @error('check')
                                        <span class="text-warning" style="display: inline-block; margin-bottom: 20px">{{ $message }}</span>
                                    @enderror
                                    <button type="submit" class="mt-4 btn btn-success" style="width: 100%">Daftar Gratis</button>
                                @endif
                            </form>
                    @endif

                    @if ($data->jenis_lomba == "Amity")
                        <form action="/users/daftar3" method="POST" enctype="multipart/form-data">
                        @csrf
                            @if ($data->lomba == "LCTP Pramuka")
                                    <h2 class="font-weight-bold text-dark pb-3">{{ $data->lomba }}</h2>
                                    <input type="hidden" name="lomba" value="{{ $data->lomba }}">
                                    
                                    <label for="asal_pangkalan" class="text-dark">Asal Pangkalan <span class="text-danger">*</span></label>
                                    <input value="{{ old('asal_pangkalan') }}" type="text" name="asal_pangkalan" id="asal_pangkalan" class="form-control @error('asal_pangkalan')
                                        is-invalid
                                    @enderror" placeholder="Asal pangkalan anda">
                                    @error('asal_pangkalan')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="ketua" class="text-dark">Pembina / Pendamping <span class="text-danger">*</span></label>
                                    <input value="{{ old('ketua') }}" type="text" name="ketua" id="ketua" class="@error('ketua')
                                        is-invalid
                                    @enderror form-control" placeholder="Ketua pangkalan">
                                    @error('ketua')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="no_wa" class="text-dark">No. WhatsApp (Pembina) <span class="text-danger">*</span></label>
                                    <input value="{{ old('no_wa') }}" type="number" name="no_wa" id="no_wa" class="form-control @error('no_wa')
                                        is-invalid
                                    @enderror" placeholder="Nomor WhatsApp">
                                    @error('no_wa')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>

                                    <label for="penggalang1" class="text-dark">Penggalang 1 <span class="text-danger">*</span></label>
                                    <input value="{{ old('penggalang1') }}" type="text" name="penggalang1" id="penggalang1" class="@error('penggalang1')
                                        is-invalid
                                    @enderror form-control" placeholder="Nama penggalang 1">
                                    @error('penggalang1')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>

                                    <label for="penggalang2" class="text-dark">Penggalang 2 <span class="text-danger">*</span></label>
                                    <input value="{{ old('penggalang2') }}" type="text" name="penggalang2" id="penggalang2" class="@error('penggalang2')
                                        is-invalid
                                    @enderror form-control" placeholder="Nama penggalang 2">
                                    @error('penggalang2')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="kts1" class="text-dark">KTS Ketua<span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input value="{{ old('kts1') }}" type="file" name="kts1" id="kts1"><br>
                                    @error('kts1')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="kts2" class="text-dark">KTS Penggalang 1 <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input value="{{ old('kts2') }}" type="file" name="kts2" id="kts2"><br>
                                    @error('kts2')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>
                                    
                                    <label for="kts3" class="text-dark">KTS Penggalang 2 <span class="text-danger">* <span class="text-muted">(Max: 1.8MB)</span></span></label>
                                    <input value="{{ old('kts3') }}" type="file" name="kts3" id="kts3"><br>
                                    @error('kts3')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    <br>
                                    
                                    <input type="hidden" name="status" value="not verified">
                                    <span class="text-dark" style="display: inline-block">
                                        <input type="checkbox" name="check">
                                        Saya menyetujui syarat dan ketentuan yang berlaku
                                    </span><br>
                                    @error('check')
                                        <span class="text-danger">{{ $message }}</span>
                                        <br>
                                    @enderror
                                    
                                    <button type="submit" class="mt-4 btn btn-success" style="width: 100%">Daftar Gratis</button>
                            @endif
                        </form>
                    @endif

                    @if ($data->jenis_lomba == "Amity")
                            @if ($data->lomba == "Pionering")
                                <div class="row d-flex flex-column align-items-center mb-3">                                    
                                    <h3 style="font-weight: bold" class="text-dark">- {{ $data->lomba }} Putra -</h3>
                                    <p>
                                        <a href="{{ url('/users/pionering/'.$data->id) }}">
                                            <button class="btn btn-warning" type="button">Daftar</button>
                                        </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="row d-flex flex-column align-items-center mb-3">                                    
                                    <h3 style="font-weight: bold" class="text-dark">- {{ $data->lomba }} Putri -</h3>
                                    <p>
                                        <a href="{{ url('/users/pionering/'.$data->id) }}">
                                            <button class="btn btn-warning" type="button">Daftar</button>
                                        </a>
                                    </p>
                                </div>
                            @endif
                    @endif

                    @if ($data->jenis_lomba == "Education" || $data->jenis_lomba == "Art")
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