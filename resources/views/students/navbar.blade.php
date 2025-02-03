<!-- Navbar -->
<style>
    .navbar-nav .nav-link:hover {
        color: #F4DC00 !important; /* Warna hijau saat hover */
    }
    
    .bg-custom {
        background-color: #00583A;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-custom fixed-top px-5">
    <div class="container-fluid">
        <img src="{{asset('asset\logo_nufi.png')}}" alt="Nurul Firdaus" width="60">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto fs-5 flex-wrap" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-md-5 mx-3">
                    <a class="nav-link active fw-bold link-success fs-6 text-light" aria-current="page" href="{{url('/Homepage#jadwal')}}">JADWAL</a>
                </li>
                <li class="nav-item mx-md-5 mx-3">
                    <a class="nav-link active fw-bold link-success fs-6 text-light " aria-current="page" href="{{url('/Homepage#pilihan')}}">PROGRAM</a>
                </li>
                <li class="nav-item mx-md-5 mx-3">
                    <a class="nav-link active fw-bold link-success fs-6 text-light" aria-current="page" href="#datapendaftar">DATA PENDAFTAR</a>
                </li>
            </ul>
            <a href="{{url('/Homepage')}}">
                <button type="button" class="fs-6 btn btn-warning text-light fw-bold">PPDB</button>
            </a>
            {{-- <a class="nav-link active btn-success text-light fw-bold" aria-current="page" href="{{url('/Homepage')}}">PPDB</a> --}}
        </div>
    </div>
</nav>