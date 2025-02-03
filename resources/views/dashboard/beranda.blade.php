<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAYASAN NURUL FIRDAUS</title>
    <link rel="icon" href="{{ asset('images/logo-fix.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">


    <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top  bg-gradient">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand ms-5" href="#">
                <img src="{{ asset('asset/logo_nufi.png') }}" alt="Logo" width="70" height="70">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto gap-lg-5 gap-3"> <!-- Gunakan gap kecil di layar kecil -->
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}"><b>BERANDA</b></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="{{url('/profil')}}"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">PROFIL</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('profil') }}#profile-section">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="{{ url('profil#sejarah-section') }}">Sejarah</a></li>
                            <li><a class="dropdown-item" href="{{url('profile#data-pengajar')}}">Data Guru</a></li>
                        </ul>
                    </li>
                    <a class="nav-link {{ request()->is('berita') ? 'active' : '' }}"
                        href="#berita-section"><b>BERITA</b></a>

                    <a class="nav-link {{ request()->is('pengumuman') ? 'active' : '' }}"
                        href="{{ url('/Homepage#jadwal') }}"><b>PENGUMUMAN</b></a>
                    <a class="nav-link {{ request()->is('layanan online') ? 'active' : '' }}"
                        href="#layanan-online"><b>LAYANAN ONLINE</b></a>
                </div>
                <div class="navbar-nav ms-lg-auto mt-3 mt-lg-0">
                    <a class="nav-link btn btn-warning text-white px-4 py-2 {{ request()->is('ppdb') ? 'active' : '' }}"
                        href="{{ url('/Homepage') }}"><b>PPDB</b></a>
                </div>
            </div>
        </div>
    </nav>
<!-- Carousel -->
<div class="carousel-container">
    <div id="carouselExample" class="carousel slide carousel-shadow" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img style="background:rgba(0, 0, 0, 0.4)" src="{{ asset('images/Slide-gedung.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img style="background:rgba(0, 0, 0, 0.4)" src="{{ asset('images\Slide-pramuka.jpg')}}" class="d-block w-100" alt="Slide 2">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img style="background:rgba(0, 0, 0, 0.4)" src="{{ asset('images/Slide-Guru.png') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <!-- Caption yang Selalu Ada -->
        <div class="carousel-caption-container">
            <div class="carousel-caption top-caption">
                <h5 class="yayasan-title">YAYASAN NURUL FIRDAUS</h5>
            </div>
            <div class="carousel-caption bottom-caption">
                <h5 class="address-text">
                    Jl. Gg. Cendana, RT.02/RW.04, Manggar, Manggarmas, Kec. Godong, Kabupaten Grobogan, Jawa Tengah 58162
                </h5>
            </div>
        </div>

        <!-- Navigasi Carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


 {{-- Sambutan section --}}
<div class="sambutan-section animated-section">
    <h2 class="sambutan-title">
        <span>Sambutan Kepala Sekolah</span>
    </h2>
    <div class="images my-4">
        <div class="image-frame">
            <img src="{{ asset('images/PAK NAUFAL.jpg') }}" alt="Foto Kepala Sekolah">
        </div>
        <div class="nama-jabatan">
            <h3>Naufal Baskara, S.Th.I. M.Si</h3>
            <h3>Kepala Sekolah</h3>
        </div>
    </div>
    <p>
        Selamat datang di website resmi Yayasan Nurul Firdaus, yang menaungi MTs Nurul Firdaus dan MA
        Nurul Firdaus. Website ini kami hadirkan sebagai media informasi resmi untuk seluruh siswa, orang tua,
        guru, serta masyarakat. Melalui platform ini, kami berharap dapat memberikan kemudahan dalam mengakses
        berbagai informasi terkait kegiatan, program, serta perkembangan pendidikan di lingkungan
        Yayasan Nurul Firdaus.
    </p>
</div>


    {{-- Tentang Kami section --}}
    <div class="tentang-kami animated-section">
        <h2 class="tentang-kami-title text-center text-white mb-1">
            <span>Tentang Kami</span>
        </h2>
        <div class="row" style="margin-bottom: 3rem;">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="image-frame">
                    <img src="{{ asset('images/nurul.jpeg') }}" alt="Tentang Kami Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-justify text-white" style="margin-top: 80px ">
                    Yayasan Nurul Firdaus merupakan lembaga pendidikan Islam yang menaungi Madrasah Tsanawiyah (MTs) dan
                    Madrasah Aliyah (MA) Nurul Firdaus, yang berlokasi di Desa Manggarmas, Kecamatan Godong,
                    Kabupaten Grobogan, Jawa Tengah. Berdiri sejak tahun 1985, yayasan ini didirikan dengan tujuan
                    memberikan
                    pendidikan yang seimbang antara nilai-nilai agama Islam dan kurikulum modern.
                </p>
            </div>
        </div>
    </div>

    <!-- Pengajar Section -->
    <div class="pengajar-section animated-section">
        <h2 style="text-align:center; margin-top: 15px" id="data-pengajar">Daftar Pengajar</h2>
        <!-- Pengajar -->
        <div class="slider" style="font-family: Poppins, sans-serif">
            <div class="card"> <img src="images\Pak Rasmudi.jpg" alt="Guru 1">
                <h3>Rasmudi, S.Pd.I </h3>
                <p>Akidah Akhlak </p>
            </div>
            <div class="card"> <img src="images\Siti nurkasanah.jpg" alt="Guru 2">
                <h3> Siti Fatimah, S.Pd.I </h3>
                <p>Fiqih </p>
            </div>
            <div class="card"> <img src="images\bu Naela izatur.jpg" alt="Guru 3">
                <h3>Naela Izzatur Rohmah </h3>
                <p>Qur'an Hadits </p>
            </div>
            <div class="card"> <img src="images\mbak fifah.jpg" alt="Guru 4">
                <h3>Khofifah Titan Palupi. S. Pd </h3>
                <p>Matematika </p>
            </div>
            <div class="card"> <img src="images\Siti nurkasanah.jpg" alt="Guru 5">
                <h3>Siti Nurkasanah,S.Pd.I </h3>
                <p>IPA </p>
            </div>
            <div class="card"> <img src="images\bu sukamti.jpg" alt="Guru 6">
                <h3>Sukamti,S.Pd.I </h3>
                <p>Bahasa Inggris </p>
            </div>
            <div class="card"> <img src="images\bu Murtinah.jpg" alt="Guru 7">
                <h3>Murtinah, S.Pd.I </h3>
                <p>Bahasa Indonesia </p>
            </div>
            <div class="card"> <img src="images\Pak Mujahidin.jpg" alt="Guru 8">
                <h3>Mujahidin,S.Pd.I </h3>
                <p>Fikih/SKI </p>
            </div>
            <div class="card"> <img src="images\bu tri eva.jpg" alt="Guru 9">
                <h3>Tri Eva Handayani, S.Pd</h3>
                <p> Bahasa Jawa</p>
            </div>
            <div class="card"> <img src="images/foto.jpg" alt="Guru 10">
                <h3>Guru 10</h3>
                <p>Pengajaran Olahraga</p>
            </div>
        </div>
        <!-- Show More Button -->
        <div class="show-more-btn">
            <a href="{{ url('profil') }}">
                <span>Show More</span>
            </a>
        </div>
    </div>

    <!-- Berita Terbaru Section -->
    <div class="berita-section  bg-gradient animated-section" id="berita-section">
        <h2 class="text-center text-white">BERITA TERBARU</h2>
        <div class="container">
            <div class="row berita">
                <div class="col-md-4 mb-4"> <a href="/berita/1" class="card-link">
                        <div class="card"> <img src="images/slide1.jpg" alt="Berita 1">
                            <div class="card-body">
                                <h5 class="card-title">Berita 1 </h5>
                            </div>
                        </div>
                    </a> </div>
                <div class="col-md-4 mb-4"> <a href="/berita/2" class="card-link">
                        <div class="card"> <img src="images/slide2.jpg" alt="Berita 2">
                            <div class="card-body">
                                <h5 class="card-title">Berita 2</h5>
                            </div>
                        </div>
                    </a> </div>
                <div class="col-md-4 mb-4"> <a href="/berita/3" class="card-link">
                        <div class="card"> <img src="images/slide3.jpg" alt="Berita 3">
                            <div class="card-body">
                                <h5 class="card-title">Berita 3</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hubungi Kami Section -->
    <div class="hubungi-kami-section animated-section" id="layanan-online">
        <h2 class="text-center m-3">Hubungi Kami</h2>
        <div class="hubungi-kami p-4 rounded">
            <p class="text-center"> Untuk informasi lebih lengkap mengenai layanan kami,
                <br>jangan ragu untuk menghubungi kami melalui saluran komunikasi yang tercantum di bawah ini.
                <br>
                👇👇👇
            </p>
            <div class="d-flex justify-content-center"> <a href="https://wa.me/6285640352942" target="_blank"
                    class="btn btn-success"><i class="fab fa-whatsapp"></i> Chat via WhatsApp </a>
            </div>
        </div>
    </div>

    {{-- Lokasi Kami --}}
    <div class="lokasi-kami-section bg-gradient text-center">
        <h2>Lokasi Kami</h2>
        <div class="map-container"> <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.516975285983!2d110.7030044!3d-7.042526499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7095b816b4cafd%3A0x440657b61ffb5e05!2sPondok%20Pesantren%20Nurul%20Firdaus%20Manggarmas!5e1!3m2!1sid!2sid!4v1737187207366!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
    </div>

    <!-- Temukan Kami Section -->
    <div class="temukan-kami-section">
        <h2 class="text-center">Temukan Kami</h2>
        <div class="row" style="display: flex; align-items: flex-start; text-align: left; margin-top: 20px;">
            <div class="col-md-4 text-center" style="padding: 15px;">
                <img src="images/logo-fix.png" alt="Logo" style="width: 150px; height: auto; margin-bottom: 15px;">
                <h4>Alamat</h4>
                <p style=" font-size: 20px">Jl. Gg. Cendana, RT.02/RW.04, <br> Manggar, Manggarmas, Kec. Godong,<br>
                    Kabupaten Grobogan,
                    Jawa Tengah 58162</p>
            </div>
            <div class="col-md-4 text-center" style="padding: 15px;">
                <h4>Kontak</h4>
                <p style=" font-size: 20px">Telepon: 0815-4235-3290<br>Email: info@sekolahxyz.com</p>
                <h4>Jam Operasional</h4>
                <p style=" font-size: 20px">Senin - Jumat: 08.00 - 16.00<br>Sabtu: 09.00 - 13.00<br>Minggu: Tutup</p>
            </div>
            <!-- Media Sosial -->
            <div class="col-md-4 text-center" style="padding: 15px;">
                <h4>Media Sosial</h4>
                <div class="d-flex justify-content-center" style="gap: 10px; flex-wrap: wrap;">
                    <a href="https://facebook.com" target="_blank" class="btn btn-primary">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://tiktok.com" target="_blank" class="btn btn-danger">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="btn btn-secondary">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer bg-gradient">
        <p>Copyright &copy; 2025 | YAYASAN NURUL FIRDAUS</p>
        <p>Design by TIM TIKSI USM</p>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>