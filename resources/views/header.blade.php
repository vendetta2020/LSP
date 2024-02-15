{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg px-4 py-3 sticky-top fixed-top shadow" style="background-color: #7C0A02">
    <div class="container-fluid">
        <a class="navbar-brand fs-5 mx-2 d-flex align-items-center justify-content-center text-light fw-bold" href="/">
            <img src="https://smktelkom-pwt.sch.id/wp-content/uploads/2019/02/logo-telkom-schools-bundar-1024x1024.png" alt=""
                width="60" style="border-radius:55%;" class="px-2">SMK TELKOM JAKARTA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active fs-5 text-white"  aria-current="page" href="/">Home</a>
                <a class="nav-link fs-5 text-white" href="/kegiatan-sekolah">Kegiatan Sekolah</a>
            </div>
            <div class="navbar-nav float-right">
                <a href="{{ route('login') }}" target="_blank" class="d-flex align-items-center text-white"><i
                        class="fa-solid fa-user fa-xl mx-2" style="color: white;"></i>Login</a>
            </div>
        </div>
    </div>
</nav>
{{-- NAVBAR --}}
