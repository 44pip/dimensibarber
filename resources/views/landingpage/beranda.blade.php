    @extends('layout.navbar')
    @section('content')
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="assets/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                            <div class="mx-sm-5 px-5" style="max-width: 900px;">
                                <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Kami Akan Membuat
                                    Anda Tetap Terlihat Luar Biasa</h1>
                                <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                        class="fa fa-map-marker-alt text-primary me-3"></i>Jl Harmonis, No 55</h4>
                                <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                        class="fa fa-phone-alt text-primary me-3"></i>+62 853 7433 8260</h4>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="assets/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                            <div class="mx-sm-5 px-5" style="max-width: 900px;">
                                <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Potongan Mewah,
                                    Harga Terjangkau</h1>
                                <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                        class="fa fa-map-marker-alt text-primary me-3"></i>Jl Harmonis, No 55</h4>
                                <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                        class="fa fa-phone-alt text-primary me-3"></i>+62 853 7433 8260</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex flex-column">
                            <img class="img-fluid w-75 align-self-end" src="assets/img/profilabdul.jpg" alt="">
                            <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                                <h1 class="text-uppercase text-primary mb-3">5 Tahun</h1>
                                <h2 class="text-uppercase mb-0">Pengalaman</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="d-inline-block bg-secondary text-primary py-1 px-4">Tentang Saya</p>
                        <h1 class="text-uppercase mb-4">Muhammad Abdul Karim</h1>
                        <p>seorang barberman yang berkomitmen untuk memberikan pengalaman pemotongan rambut yang tak
                            terlupakan. Dengan pengalaman lebih dari 5 tahun di industri ini, saya telah mengasah
                            keterampilan saya dalam berbagai teknik pemotongan dan gaya rambut, memastikan setiap pelanggan
                            meninggalkan barbershop dengan senyuman dan rasa percaya diri yang tinggi.</p>
                        <p class="mb-4">Saya percaya bahwa setiap potongan rambut adalah karya seni yang unik. Misi saya
                            adalah untuk menciptakan gaya yang tidak hanya sesuai dengan kepribadian pelanggan, tetapi juga
                            meningkatkan penampilan mereka. Di barbershop saya, setiap detail diperhatikan, mulai dari
                            konsultasi awal hingga penyelesaian akhir, untuk memastikan kepuasan maksimal.</p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h3 class="text-uppercase mb-3">Sejak 2024</h3>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-uppercase mb-3">300+ pelanggan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">Layanan</p>
                    <h1 class="text-uppercase">Apa Yang Kami Sediakan</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                            <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <img class="img-fluid" src="assets/img/haircut.png" alt="">
                            </div>
                            <div class="ps-4">
                                <h3 class="text-uppercase mb-3">Potongan Rambut Biasa</h3>
                                <p>menawarkan pemotongan yang rapi dan elegan, menggunakan teknik standar yang cocok untuk
                                    semua kalangan. Dengan fokus pada kesederhanaan dan keindahan, kami merapikan rambut
                                    Anda dengan presisi, memastikan penampilan yang segar dan terawat</p>
                                <span class="text-uppercase text-primary">Rp30.000</span>
                            </div>
                        </div>
                        <a href="{{ route('pemesanan.create') }}"
                            class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Pesan Sekarang<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Service End -->


        <!-- Price Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                            <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Harga</p>
                            <h1 class="text-uppercase mb-4">Pesan Sekarang, Agar Penampilanmu Keren</h1>
                            <div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Potongan Rambut Biasa</h6>
                                    <span class="text-uppercase text-primary">Rp30.000</span>
                                </div>
                            </div>
                            <a href="{{ route('pemesanan.create') }}"
                                class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Pesan Sekarang<i
                                    class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <img class="img-fluid h-100" src="assets/img/price.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->


        <!-- Working Hours Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <img class="img-fluid h-100" src="assets/img/open.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                            <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Jam Kerja</p>
                            <h1 class="text-uppercase mb-4">Jam Kerja Dimensi Hair Studio</h1>
                            <div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Senin</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Selasa</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Rabu</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Kamis</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Jumat</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Sabtu</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Minggu</h6>
                                    <span class="text-uppercase">09 AM - 09 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Working Hours End -->
    @endsection
