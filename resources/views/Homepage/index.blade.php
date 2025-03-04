@extends('Homepage.layout')
@extends('Homepage.navbar')
@section('content')
@php
  
    $gambar = \App\Models\GambarMenuPPDB::first();
@endphp

<style>
  .custom-rounded {
    border-radius: 15px;
  }

  .bg-custom {
    position: relative;
    background-image: url('{{ asset($gambar->background ?? 'asset/Group 37209.png') }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
  }

  .bg-custom::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
  }

  .bg-custom .container {
    position: relative;
    z-index: 1;
  }

  .btn-warning {
    color: #00583a;
  }

  .bg-footer {
    background-color: #00583a;
  }
</style>



   
<!-- Menu PPDB -->
<section id="dashboard" class="bg-custom text-white text-center mt-2 pt-5 py-5">
  <div class="container pt-5">
    <img src="{{ asset('asset/logo_nufi.png') }}" alt="Logo" class="mb-3 pt-3" style="width: 150px;">
    <h1 class="fw-bold mb-2">Selamat Datang di PPDB Online</h1>
    <h4 class="fw-bold">Yayasan Nurul Firdaus</h4>
      {{-- //style="background-color: #FFD700; border-radius: 10px;" ntar benerin tombolnya udh pusing gw jing --}} 
      <div class="container">
        <div class="row justify-content-center gap-3 mt-4">
          <div class="col-10 col-md-3">
            <a href="{{ url('/students') }}" 
               class="btn fw-bold text-dark py-2 d-flex align-items-center justify-content-center"
               style="background-color: #FFD700; border-radius: 10px; gap: 8px;">
              <span style="font-size: 1.2rem;">📋</span> Form Pendaftaran
            </a>
          </div>
          <div class="col-10 col-md-3">
            <a href="{{ url('/students#datapendaftar') }}" 
               class="btn fw-bold text-white py-2 d-flex align-items-center justify-content-center"
               style="background-color: #3B82F6; border-radius: 10px; gap: 8px;">
              <span style="font-size: 1.2rem;">👤</span> Data Pendaftar
            </a>
          </div>
        </div>
      </div>
      

  </div>
</section>



@php
    $gambar = App\Models\GambarJadwalPPDB::latest()->first();
@endphp

<!-- Jadwal -->
<section data-aos="fade-up" id="jadwal" class="bg-white text-center py-5">
  <div class="container">
    <h3 class="fw-bold text-success me-2 mb-5">JADWAL PENDAFTARAN</h3>
    <img src="{{ $gambar ? asset('storage/' . $gambar->gambar) : asset('asset/default.png') }}" class="img-fluid">
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
  

  <style>
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
