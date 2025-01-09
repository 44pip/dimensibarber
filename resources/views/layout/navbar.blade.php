<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dimensi Hair Studio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-cut me-3"></i>Dimensi Hair Studio</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/beranda" class="nav-item nav-link">Beranda</a>
                <a href="/tentang" class="nav-item nav-link">Tentang</a>
                <a href="/layanan" class="nav-item nav-link">Layanan</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu m-0">
                        <a href="/harga" class="dropdown-item">Harga</a>
                        <a href="/jamkerja" class="dropdown-item">Jam Kerja</a>
                        <a href="{{ route('testimoni.customer') }}" class="dropdown-item">Testimoni</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Login
                Admin</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">Testimoni Pelanggan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonis as $testimoni)
                    <div class="testimonial-item text-center">
                        <h4 class="text-uppercase">{{ $testimoni->nama }}</h4>
                        <p class="text-primary">Pelanggan</p>
                        <span class="fs-5">{{ $testimoni->komentar }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Add Testimonial Start -->
    <div class="container-fluid py-5 bg-secondary">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-primary text-white py-1 px-4 rounded-pill">Bagikan Pengalaman</p>
                <h2 class="text-uppercase text-white">Tambah Testimoni Anda</h2>
                <p class="text-light">Testimoni Anda sangat berarti bagi kami. Berikan pengalaman Anda untuk membantu
                    pelanggan lain dan meningkatkan layanan kami.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rounded shadow p-4 p-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <form action="{{ route('testimoni.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="floatingNama" class="form-label text-uppercase fw-bold">Nama
                                    Pelanggan</label>
                                <input type="text" class="form-control form-control-lg border-0" id="floatingNama"
                                    name="nama" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <div class="mb-4">
                                <label for="floatingKomentar" class="form-label text-uppercase fw-bold">Komentar
                                    Anda</label>
                                <textarea class="form-control form-control-lg border-0" id="floatingKomentar" name="komentar"
                                    placeholder="Bagikan pengalaman Anda dengan kami" rows="5" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="floatingWaktu" class="form-label text-uppercase fw-bold">Tanggal &
                                    Waktu</label>
                                <input type="datetime-local" class="form-control form-control-lg border-0"
                                    id="floatingWaktu" name="waktu_dan_tanggal" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 py-2">
                                    Kirim Testimoni
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Hubungi Kami</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Jl Harmonis, No 55</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+62 853 7433 8260</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>abdulkarim@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Tautan Cepat</h4>
                    <a class="btn btn-link" href="">Tentang</a>
                    <a class="btn btn-link" href="">Kontak</a>
                    <a class="btn btn-link" href="">Layanan</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Sosial Media</h4>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Dimensi Hair Studio</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Custom Script untuk Back to Top -->
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
</body>

</html>
