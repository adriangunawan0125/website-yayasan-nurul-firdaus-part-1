@extends('Homepage.layout')
@extends('Homepage.navbar')
@section('content')

<style>
  .custom-rounded {
    border-radius: 15px;
  }

  .bg-custom {
    position: relative;
    background-image: url('/asset/Group 37209.png');
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
    background: rgba(0, 0, 0, 0.4); 
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
    <h1 class="fw-bold">PPDB ONLINE</h1>
    <h2 class="fw-light fw-bold">YAYASAN NURUL FIRDAUS</h2>
    <div class="d-flex flex-column align-items-center mt-4">
      <a href="{{ url('/students') }}" class="btn fw-bold btn-warning btn-lg mb-4 w-50 custom-rounded">FORM PENDAFTARAN</a>
      <a href="{{ url('/students#datapendaftar') }}" class="btn fw-bold btn-warning btn-lg w-50 custom-rounded">DATA PENDAFTAR</a>
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
<section data-aos="fade-up" id="pilihan" class="bg-custom text-white text-center py-5 mt-5 mb-1">
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
        <p class="fs-5 mb-0">Copyright &copy; 2025 | YAYASAN NURUL FIRDAUS</p>
        <p class="fs-5 mb-0">Design by MAGANG TIKSI USM-23</p>
        <p class="fs-5 mb-0">
          <a style="text-decoration: none; color: inherit;" href="{{ route('admin.login') }}">
            Login Admin
          </a>
        </p>
      </div>
    </div>
  </div>
</footer>
@endsection
