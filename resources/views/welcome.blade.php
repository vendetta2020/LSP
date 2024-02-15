<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan SMK Telkom Jakarta</title>
    <link rel="icon" type="image/x-icon"
        href="https://smktelkom-jkt.sch.id/wp-content/uploads/2023/03/master-logo-almet-1024x1024.png">
</head>
@include('link')

<body>
    @include('header')
    {{-- HERO MASTER --}}
    <section id="master-hero">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="row flex-md-row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-sm-1">
                <div class="col px-5 order-md-2 px-2">
                    <img src="https://storage.googleapis.com/labura-storage/weblabura/resources/dpmpptsp24/post/2021-12/cuplikan-1640251074_pelayanan-terbaik1639128393.gif" alt="master-hero"
                        class="img-fluid mb-3">
                </div>
                <div class="col d-flex justify-content-center align-items-center px-4 order-md-1 mt-3">
                    <div>
                        <h5>Selamat Datang di,</h5>
                        <h1 class="display-6" style="font-family: cambria; font-weight:800;">Pelayanan Pengaduan
                            Sekolah</h1>
                        <p style="font-family:cambria;">Melalui website ini siswa dapat menyampaikan pengaduan serta memberikan saran dan masukan dengan nyaman 
                        dan memperoleh kepastian mendapatkan tanggapan yang baik dan profesional.</p>
                        <a href="#formulir-pengaduan"><button class="btn btn-outline-danger px-5 py-2 border-2">Lapor
                                !</button></a>
                    </div>
                </div>
            </div>
        </div>
        <p id="formulir-pengaduan" class="my-5 mb-5" style="overflow: hidden;">.</p>
    </section>
    {{-- HERO MASTER --}}

    {{-- FORM --}}
    <section id="formulir-pengaduan">
        <div class="container px-4" style="height: 100vh;">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-sm-6 shadow rounded px-5" style="border: 1px solid black; background-color:whitesmoke; color:black;">
                    <div class="d-flex justify-content-center align-items-center">
                        <h2 class="mt-4 mb-3">Formulir Pengaduan</h2>
                    </div>
                    <form id="formulir" action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="pending" class="hidden" name="status">
                        <div class="input-control my-1">
                            <label for="kategori" class="my-2">Kategori Aspirasi : </label>
                            <select name="kategori" id="kategori" class="form-select">
                                @foreach($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-control my-1">
                            <label for="nis" class="my-2">NIS : </label>
                            <input type="text" class="form-control" id="nis" name="nis">
                        </div>
                        <div class="input-control my-1">
                            <label for="lokasi" class="my-2">Lokasi Lengkap : </label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi">
                        </div>
                        <div class="input-control my-1">
                            <label for="aspirasi" class="my-2">Aspirasi Anda : </label>
                            <input type="text" class="form-control" id="aspirasi" name="aspirasi">
                        </div>
                        <div class="input-control my-1">
                            <label for="keterangan" class="my-2">Keterangan Detail : </label>
                            <textarea name="keterangan" id="keterangan" cols="20" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="input-control my-1">
                            <label for="gambar_kejadian" class="my-2">Photo Kejadian : </label>
                            <input type="file" class="form-control" id="gambar_kejadian" name="gambar_kejadian">
                        </div>
                        <button type="submit" class="btn btn-info my-4 px-4 py-2 text-white" style="float: right !important;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    {{-- FORM --}}

    {{-- Table History --}}
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-10 col-sm-12">
                <h1 class="my-4" style="text-align: center;">Histori Aspirasi</h1>
                <div class="container">
                    <div class="row">
                    </div>
                </div>
                <div class="table-responsive border p-3 rounded bg-secondary shadow-lg">
                    <table class="table table-bordered  bg-primary">
                        <thead class="border border-dark bg-light">
                            <tr style="text-align: center;">
                                <th>No</th>
                                <th>Kategori</th>
                                <th>NIS</th>
                                <th>lokasi</th>
                                <th>Aspirasi</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($laporan as $data)
                            <tr style="text-align: center;">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->kategories->name   }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->lokasi }}</td>
                                <td>{{ $data->aspirasi }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>
                                    <img src="{{ asset('storage/gambar_kejadian/' . $data->gambar_kejadian) }}" alt="" width="50">
                                </td>
                                <td>
                                    <b>
                                        <span class="badge rounded-pill py-2 px-4
                                                    @if ($data->status == 'pending') bg-danger
                                                    @elseif($data->status == 'progress') bg-warning
                                                    @elseif($data->status == 'done') bg-success @endif">
                                            {{ $data->status }}
                                        </span>
                                    </b>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    {{-- Table History --}}

</body>
@include('script')

<script>
    $(document).ready(function() {
        // Fungsi yang akan dipanggil ketika tombol "Submit" ditekan
        $("#submitBtn").click(function() {
            // Mendapatkan data formulir
            var formData = new FormData($("#formulir")[0]);
            // Mengirim data ke backend menggunakan Ajax
            $.ajax({
                type: "POST", // Metode HTTP
                url: "/submit-form", // Gantilah dengan URL backend Anda
                data: formData, // Data formulir
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        title: "Data Berhasil Terkirim !",
                        icon: "success",
                        timer: 1500,
                        didClose: () => {
                            setTimeout(function() {
                                    location.reload();
                                },
                                1000
                            ); // Ubah angka 1000 menjadi jumlah milidetik yang diinginkan
                        }
                    });
                },
                error: function(error) {
                    // Fungsi yang akan dijalankan jika permintaan gagal
                    console.log(error);
                    // Lakukan sesuatu dengan pesan kesalahan
                    alert("Terjadi kesalahan saat mengirim formulir.");
                }
            });
        });
    });
</script>

</html>
