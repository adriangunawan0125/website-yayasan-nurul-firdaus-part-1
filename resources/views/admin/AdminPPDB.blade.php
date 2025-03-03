@extends('Homepage.layout')
@section('content')

<style>
  .custom-rounded {
    border-radius: 15px;
  }

  .btn-warning {
    color: #00583a;
  }

  .bg-footer {
    background-color: #00583a;
  }

    .navbar-nav .nav-link:hover {
  color: white !important; 
}
  .bg-gradient{ 
  color: green !important; 
}

.circle {
      width: 350px;  /* Sesuaikan ukuran */
      height: 350px;
      border-radius: 30px 70px 30px 70px;
      overflow: hidden;
      margin: auto;
    }

.circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


.row > .col-md-4 {
      padding-top: 10px;
      padding-bottom: 10px;
    }

</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-success navbar-light px-0 py-3">
  <div class="container-fluid">
      {{-- <img src="{{ asset('asset/logo_nufi.png') }}" class="ms-4" alt="Nurul Firdaus" width="60"> --}}
      <a href="{{ url('/') }}" class="text-white" style="font-size: 24px; text-decoration: none;">
        <img src="{{asset('asset/icon-pintu.png')}}" style="width: 30px;" class="ms-5" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a class="nav-link active ms-5" style="font-weight: 750 !important" aria-current="page" href="{{url('/')}}">Jadwal</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active ms-5" aria-current="page" style="font-weight: 750 !important" href="#jadwal">Program</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active ms-5 fw-bold" aria-current="page" style="font-weight: 750 !important" href="{{ url('/Homepage#jadwal') }}">Data PPDB</a>
              </li>
          </ul>

                  <a href="{{ url('/students') }}"><button type="button" class="fw-bold btn btn-info me-5">PPDB</button></a>
      </div>
  </div>
</nav>

<!-- Menu PPDB -->
@php
    $gambar = App\Models\GambarMenuPPDB::first();
@endphp
<section id="dashboard" class="text-white text-center pt-0 py-2"
    style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
    url('{{ asset($gambar->background ?? 'asset/default-bg.jpg') }}') no-repeat center center; 
    background-size: cover;">
    <div class="container pt-5">
        <img src="{{ asset('asset/logo_nufi.png') }}" alt="Logo" class="mb-5 pt-5" style="width: 80px;">

        <div class="d-flex flex-column align-items-center mt-5 mb-5">
            <a href="{{ url('/admin/ubah-background') }}" class="btn fw-bold btn-warning btn-lg w-25 custom-rounded mb-5">
                Ubah Gambar
            </a>
        </div>
    </div>
</section>

<!-- Jadwal -->
<section data-aos="fade-up" id="jadwal" class="bg-white text-center py-5">
  <div class="container">
    <h3 class="fw-bold text-success me-2 mb-5">JADWAL PENDAFTARAN</h3>
   <!-- rubah jadwal di baris ini -->  <img src="{{ asset('asset/Screenshot 2025-01-18 120126.png') }}" class="img-fluid"> 
  </div>
</section>

<!-- MTS dan MA -->
<section data-aos="fade-up" id="pilihan" class="bg-success text-white text-center py-5 mt-5 mb-1">
  <div class="container">
    <h2 class="fw-bold mb-5">PROGRAM PILIHAN</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <a href="{{ url('/students') }}" class="text-decoration-none">
          <div class="bg-warning text-success fw-bold d-flex align-items-center justify-content-center"
            style="font-size: 5rem; border-radius: 8px; height: 200px;">
            MTS
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="{{ url('/students') }}" class="text-decoration-none">
          <div class="bg-warning text-success fw-bold d-flex align-items-center justify-content-center"
            style="font-size: 5rem; border-radius: 8px; height: 200px;">
            MA
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Kegiatan -->
<section data-aos="fade-up" id="kegiatan" class="py-5 bg-light mt-2 mb-3">
  <div class="container text-center">
    <h2 class="mb-5 fw-bold text-success">KEGIATAN</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="circle">
        <!-- rubah gambar kegiatan kiri -->  <img src="{{ asset('asset/IMG_20240816_162454.jpg') }}" alt="Kegiatan 2">
        </div>
      </div>
      <div class="col-md-4">
        <div class="circle">
          <!-- rubah gambar kegiatan tengah --> <img src="{{ asset('asset/20231106_041615_0.jpg') }}" alt="Kegiatan 1">
        </div>
      </div>
      <div class="col-md-4">
        <div class="circle">
       <!-- rubah gambar kegiatan kanan -->   <img src="{{ asset('asset/IMG_20240824_210056.jpg') }}" alt="Kegiatan 3">
        </div>
      </div>
    </div>
  </div>
  </section>

<!-- Footer -->
<footer class="bg-footer fw-bold text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p class="fs-6 mb-0">Copyright &copy; 2025 | YAYASAN NURUL FIRDAUS</p>
        <p class="fs-6 mb-0">Design by MAGANG TIKSI USM-23</p>
       
      </div>
    </div>
  </div>
</footer>
@endsection
