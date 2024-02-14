<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
    @include('link')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="data:image/png;base64,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" alt="AdminLTE Logo"
                    class="brand-image " style="opacity: .5">
                <span class="brand-text font-weight-light">SMK TELKOM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item fixed-bottom">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </button>
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 px-5">
                            <h1 style="color: black;">Data Laporan Pengaduan</h1>
                        </div>
                        <div class="col-sm-12 px-5" style="color: black;">
                            <label for="kategoriFilter">Filter by Category:</label>
                            <select id="kategoriFilter">
                                <option value="all">All Categories</option>
                                @foreach ($laporan as $data)
                                    <option value="{{ $data->kategori }}">{{ $data->kategories->name }}</option>
                                @endforeach
                                <!-- Tambahkan opsi kategori sesuai kebutuhan -->
                            </select>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content px-5">
                <!-- Default box -->
                <div class="table-responsive">
                    <table class="table" id="laporanTable">
                        <thead>
                            <tr>

                                <th>ID-Pelaporan</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th>NIS Pelapor</th>
                                <th>Lokasi</th>
                                <th>Aspirasi</th>   
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>

                        <tbody id="laporanTableBody">
                            @forelse ($laporan as $key => $data)
                                <tr data-category="{{ $data->kategori }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <b>
                                            <span
                                                class="badge rounded-pill
                                                @if ($data->status == 'pending') bg-danger
                                                @elseif($data->status == 'progress') bg-warning
                                                @elseif($data->status == 'done') bg-success @endif">
                                                {{ $data->status }}
                                            </span>
                                        </b>
                                    </td>
                                    <td>{{ $data->kategories->name }}</td>
                                    <td>{{ $data->nis }}</td>
                                    <td>{{ $data->lokasi }}</td>
                                    <td>{{ $data->aspirasi }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>
                                        <img src="{{ asset('storage/gambar_kejadian/' . $data->gambar_kejadian ) }}" alt="" width="50">
                                    </td>
                                    <td><a href="{{ route('laporan.show', ['id' => $data->id]) }}">View</a></td>
                                    <td>
                                        <form action="{{ route('laporan.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr id="table-none">
                                    <td colspan="10">
                                        <div class="container">
                                            <div class="row d-flex justify-content-center align-items-center text-align-center"
                                                style="height: 55vh;">
                                                <h3 class="text-secondary">Data Kosong !</h3>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.1.2
            </div>
            <strong>Copyright &copy; 2024.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>
{{-- ------------------------------------------------------------------------------------- --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@include('script')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var selectElement = document.getElementById("kategoriFilter");

        selectElement.addEventListener("change", function() {
            var selectedCategory = selectElement.value;
            var tableRows = document.querySelectorAll("#laporanTableBody tr");

            tableRows.forEach(function(row) {
                var rowCategory = row.getAttribute("data-category");

                // Check if the selected category is "all" or matches the row's data-category attribute
                if (selectedCategory === "all" || selectedCategory === rowCategory) {
                    row.style.display = ""; // Display the row
                } else {
                    row.style.display = "none"; // Hide the row
                }
            });
        });
    });
</script>


</html>


{{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Laporan</li>
                        </ol>
                    </div> --}}
