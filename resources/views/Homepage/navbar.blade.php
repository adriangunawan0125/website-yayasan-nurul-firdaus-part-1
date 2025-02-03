<!-- Navbar -->
<style>
    .navbar-nav .nav-link:hover {
        color: green !important; /* Warna hijau saat hover */
    }
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1030; /* Pastikan z-index cukup tinggi */
    }
    </style>
    
    <nav class="shadow-lg navbar navbar-expand-lg navbar-light bg-light bg-success fixed-top px-5">
        <div class="container-fluid">
            <img src="{{ asset('asset/YAYASAN_NUFI[1].png') }}" alt="Nurul Firdaus" width="60">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto fs-5 flex-wrap" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-md-5 mx-3">
                        <a class="nav-link active fs-6 fw-bold link-success" aria-current="page" href="{{ url('/') }}">BERANDA</a>
                    </li>
                    <li class="nav-item mx-md-5 mx-3">
                        <a class="nav-link active fs-6 fw-bold link-success" aria-current="page" href="#jadwal">JADWAL</a>
                    </li>
                    <li class="nav-item mx-md-5 mx-3">
                        <a class="nav-link active fs-6 fw-bold link-success" aria-current="page" href="#pilihan">PROGRAM</a>
                    </li>
                    <li class="nav-item mx-md-5 mx-3">
                        <a class="nav-link active fs-6 fw-bold link-success" aria-current="page" href="{{ url('/students#datapendaftar') }}">DATA PENDAFTAR</a>
                    </li>
                </ul>
                <a href="{{ url('/students') }}"><button type="button" class="fw-bold fs-6 btn btn-success">PPDB</button></a>
            </div>
        </div>
    </nav>
    