    <style>
          .navbar-nav .nav-link:hover {
        color: green !important; 
    }
        .bg-gradient{ 
        color: green !important; 
    }
    </style>

     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top  bg-light navbar-light fixed-top px-5">
        <div class="container-fluid">
            <img src="{{ asset('asset/YAYASAN_NUFI[1].png') }}" alt="Nurul Firdaus" width="60">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active ms-5" style="font-weight: 750 !important" aria-current="page" href="{{url('/')}}">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-5" aria-current="page" style="font-weight: 750 !important" href="#jadwal">JADWAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" style="font-weight: 750 !important" href="{{ url('/Homepage#jadwal') }}">PENGUMUMAN</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active ms-5 fw-bold" aria-current="page" style="font-weight: 750 !important" href="{{ url('/#layanan-online') }}">LAYANAN ONLINE</a>
                    </li>
                </ul>
 
                        <a href="{{ url('/students') }}"><button type="button" class="fw-bold btn btn-success">PPDB</button></a>
            </div>
        </div>
    </nav>