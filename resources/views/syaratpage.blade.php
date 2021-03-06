<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB SMAN 5 MALANG</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>&nbsp PPDB</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Beranda</a></li>
                    <li><a class="nav-link active" href="/syarat">Syarat Pendaftaran</a></li>
                    <li><a class="nav-link" href="/tentang">Tentang</a></li>
                    <li class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <br><br><br>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0 justify-content-center">

                    <div class="col-lg-6 justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content ">

                            <h2>KETENTUAN KHUSUS</h2>
                            <br>
                            <ol>
                                <li>Buku Rapor SMP/sederajat.</li>
                                <li>Surat Keterangan Nilai Rapor Semester 1-5 SMP/sederajat yang diterbitkan oleh Satuan Pendidikan yang bersangkutan.</li>
                                <li>Ijazah SMP/sederajat atau surat keterangan yang berpenghargaan sama dengan ijazah SMP/ijazah Program Paket B/Ijazah Satuan Pendidikan luar negeri yang dinilai/dihargai sama/setingkat dengan SMP.</li>
                                <li>Akta kelahiran dengan batas usia paling tinggi 21 tahun pada awal Tahun Ajaran 2022/2023, dan belum menikah.</li>
                                <li>Kartu Keluarga yang diterbitkan dan/atau telah tinggal paling singkat 1 tahun sebelum tanggal pendaftaran PPDB berdasarkan data administrasi kependudukan yang diselenggarakan oleh Dinas Pemberdayaan Masyarakat, Desa, Kependudukan dan Pencatatan Sipil Provinsi.</li>
                                <li>Piagam Prestasi/Penghargaan pada jenis kejuaraan berjenjang/tidak berjenjang (khusus bagi yang memiliki).</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container" data-aos="fade-up">
                <div class="row gx-0 justify-content-center">

                    <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="text-center text-lg-start">
                            <a href="/user"
                                class="btn btn-primary">
                                <span>DAFTAR SEKARANG</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->

        

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PPDB SMAN 5 MALANG</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Created by Kelompok 3
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
