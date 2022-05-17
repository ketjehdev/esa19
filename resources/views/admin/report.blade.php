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
    <title>Laporan | ESA 19</title>
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
                            aria-expanded="false"><i data-feather="database" class="feather-icon"></i><span
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
                                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan</h1>
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
                
                {{-- education --}}
                <h3 style="font-weight: bold;" class="text-dark">Education</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Spelling Bee</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Nama</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    KTS
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti I</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti II</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti III</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            
                                            @foreach ($education as $item)
                                                @if ($item->lomba == "Spelling Bee")
                                                    @if ($item->status == "verified")
                                                        <tr>
                                                            <th class="border-top-1 px-2 text-center py-4">
                                                                {{ $no++ }}
                                                            </th>
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                {{ $item->asal_sekolah }}
                                                            </td>
                                                            
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                {{ $item->name }}
                                                            </td>
        
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                {{ $item->no_wa }}
                                                            </td>
                                                            
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                <a href="{{ asset('kts/'.$item->kts) }}">
                                                                    <img src="{{ asset('kts/'.$item->kts) }}" alt="kts" height="100px" width="80px">
                                                                </a>
                                                            </td>
                                                            
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                <a href="{{ asset('bukti_follow/'.$item->bukti1) }}">
                                                                    <img src="{{ asset('bukti_follow/'.$item->bukti1) }}" alt="bukti" height="100px" width="80px">
                                                                </a>
                                                            </td>
                                                            
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                <a href="{{ asset('bukti_follow/'.$item->bukti2) }}">
                                                                    <img src="{{ asset('bukti_follow/'.$item->bukti2) }}" alt="bukti" height="100px" width="80px">
                                                                </a>
                                                            </td>
                                                            
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                <a href="{{ asset('bukti_follow/'.$item->bukti3) }}">
                                                                    <img src="{{ asset('bukti_follow/'.$item->bukti3) }}" alt="bukti" height="100px" width="80px">
                                                                </a>
                                                            </td>
        
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                            </td>
                                                            <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                <a onclick="return myFunction();" href="{{ url('/admin/destroyEduxart/'.$item->id) }}">
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
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- scrabble --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Scrabble</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table no-wrap v-middle mb-0">
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                        Asal Sekolah
                                                    </th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">Nama</th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                        Nomor WhatsApp
                                                    </th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                        KTS
                                                    </th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti I</th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti II</th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti III</th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                    <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                
                                                @foreach ($education as $item)
                                                    @if ($item->lomba == "Scrabble")
                                                        @if ($item->status == "verified")
                                                            <tr>
                                                                <th class="border-top-1 px-2 text-center py-4">
                                                                    {{ $no++ }}
                                                                </th>
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    {{ $item->asal_sekolah }}
                                                                </td>
                                                                
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    {{ $item->name }}
                                                                </td>
            
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    {{ $item->no_wa }}
                                                                </td>
                                                                
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    <a href="{{ asset('kts/'.$item->kts) }}">
                                                                        <img src="{{ asset('kts/'.$item->kts) }}" alt="kts" height="100px" width="80px">
                                                                    </a>
                                                                </td>
                                                                
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    <a href="{{ asset('bukti_follow/'.$item->bukti1) }}">
                                                                        <img src="{{ asset('bukti_follow/'.$item->bukti1) }}" alt="bukti" height="100px" width="80px">
                                                                    </a>
                                                                </td>
                                                                
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    <a href="{{ asset('bukti_follow/'.$item->bukti2) }}">
                                                                        <img src="{{ asset('bukti_follow/'.$item->bukti2) }}" alt="bukti" height="100px" width="80px">
                                                                    </a>
                                                                </td>
                                                                
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    <a href="{{ asset('bukti_follow/'.$item->bukti3) }}">
                                                                        <img src="{{ asset('bukti_follow/'.$item->bukti3) }}" alt="bukti" height="100px" width="80px">
                                                                    </a>
                                                                </td>
            
                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                                </td>

                                                                <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                                    <a onclick="return myFunction();" href="{{ url('/admin/destroyEduxart/'.$item->id) }}">
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
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    {{-- sport --}}
                    <h3 style="font-weight: bold;" class="text-dark">Sport</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Mobile Legends</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nama tim
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Ketua tim
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">WA Ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Cadangan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID cadangan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS cadangan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($sport as $item)
                                            @if ($item->lomba == "Mobile Legends")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_sekolah }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->nama_tim }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->ketua_tim }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player3 }}
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player4 }}
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player5 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_ketua }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player3 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player4 }}
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player5 }}
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_ketua) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_ketua) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player1) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player1) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player2) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player2) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player3) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player3) }}">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player4) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player4) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player5) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player5) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroySport/'.$item->id) }}">
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
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ff --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Free Fire</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nama tim
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Ketua tim
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">WA Ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Player 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Cadangan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID player 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">ID cadangan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS player 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS cadangan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($sport as $item)
                                            @if ($item->lomba == "Free Fire")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_sekolah }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->nama_tim }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->ketua_tim }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player3 }}
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->player4 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_ketua }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player3 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->id_player4 }}
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_ketua) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_ketua) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player1) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player1) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player2) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player2) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player3) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player3) }}">
                                                            </a>
                                                        </td>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts_player4) }}">
                                                                <img height="100px" width="80px" src="{{ asset('kts/'.$item->kts_player4) }}">
                                                            </a>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroySport/'.$item->id) }}">
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
                                                        </td>
                                                        
                                                    </tr>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                    {{-- amity --}}
                    <h3 style="font-weight: bold;" class="text-dark">Amity</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">LCTP</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Pangkalan
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Ketua Pangkalan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Penggalang1
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti 1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti 2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti 3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($amity as $item)
                                            @if ($item->lomba == "LCTP Pramuka")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_pangkalan }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->ketua }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts1) }}">
                                                                <img src="{{ asset('kts/'.$item->kts1) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts2) }}">
                                                                <img src="{{ asset('kts/'.$item->kts2) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts3) }}">
                                                                <img src="{{ asset('kts/'.$item->kts3) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroyAmity/'.$item->id) }}">
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
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    

                    {{-- amity --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Pionering Putra</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Pangkalan
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Ketua Pangkalan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Penggalang1
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($amity as $item)
                                            @if ($item->lomba == "Pionering")
                                                @if ($item->regu == "Putra")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_pangkalan }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->ketua }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang3 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang4 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts1) }}">
                                                                <img src="{{ asset('kts/'.$item->kts1) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts2) }}">
                                                                <img src="{{ asset('kts/'.$item->kts2) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts3) }}">
                                                                <img src="{{ asset('kts/'.$item->kts3) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts4) }}">
                                                                <img src="{{ asset('kts/'.$item->kts4) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts5) }}">
                                                                <img src="{{ asset('kts/'.$item->kts5) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroyAmity/'.$item->id) }}">
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
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                    {{-- pionering putri --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Pionering Putri</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Pangkalan
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Ketua Pangkalan</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Penggalang1
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Penggalang4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS ketua</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang1</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang2</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang3</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">KTS Penggalang4</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($amity as $item)
                                            @if ($item->lomba == "Pionering")
                                                @if ($item->regu == "Putri")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_pangkalan }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->ketua }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang1 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang2 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang3 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->penggalang4 }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts1) }}">
                                                                <img src="{{ asset('kts/'.$item->kts1) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts2) }}">
                                                                <img src="{{ asset('kts/'.$item->kts2) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts3) }}">
                                                                <img src="{{ asset('kts/'.$item->kts3) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts4) }}">
                                                                <img src="{{ asset('kts/'.$item->kts4) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts5) }}">
                                                                <img src="{{ asset('kts/'.$item->kts5) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroyAmity/'.$item->id) }}">
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
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endif
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                    {{-- art --}}
                    <h3 style="font-weight: bold;" class="text-dark">Art</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Desain Poster</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Nama</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    KTS
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti I</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti II</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti III</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($education as $item)
                                            @if ($item->lomba == "Desain Poster")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_sekolah }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->name }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts) }}">
                                                                <img src="{{ asset('kts/'.$item->kts) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti1) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti1) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti2) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti2) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti3) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti3) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroyEduxart/'.$item->id) }}">
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
                                                        </td>
                                                        
                                                    </tr>
                                                    @endif
                                                    @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                    {{-- photography --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Photography</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Nama</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    KTS
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti I</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti II</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti III</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($education as $item)
                                            @if ($item->lomba == "Photography")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_sekolah }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->name }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts) }}">
                                                                <img src="{{ asset('kts/'.$item->kts) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti1) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti1) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti2) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti2) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti3) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti3) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroyEduxart/'.$item->id) }}">
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
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    
                    {{-- art->mustel --}}
                     <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h4 class="card-title">Cover Song</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">#</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted px-2">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Nama</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    Nomor WhatsApp
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted text-center">
                                                    KTS
                                                </th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti I</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti II</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Bukti III</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Status</th>
                                                <th class="border-0 text-center font-14 font-weight-medium text-muted">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                                @endphp
                                            
                                            @foreach ($education as $item)
                                            @if ($item->lomba == "Cover Song")
                                                    @if ($item->status == "verified")
                                                    <tr>
                                                        <th class="border-top-1 px-2 text-center py-4">
                                                            {{ $no++ }}
                                                        </th>
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->asal_sekolah }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->name }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            {{ $item->no_wa }}
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('kts/'.$item->kts) }}">
                                                                <img src="{{ asset('kts/'.$item->kts) }}" alt="kts" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti1) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti1) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti2) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti2) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a href="{{ asset('bukti_follow/'.$item->bukti3) }}">
                                                                <img src="{{ asset('bukti_follow/'.$item->bukti3) }}" alt="bukti" height="100px" width="80px">
                                                            </a>
                                                        </td>
                                                        
                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <span class="text-success">{{ Str::ucfirst($item->status) }}</span>
                                                        </td>

                                                        <td class="border-top-1 text-center text-muted px-2 py-4 font-14">
                                                            <a onclick="return myFunction();" href="{{ url('/admin/destroyEduxart/'.$item->id) }}">
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
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endif
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