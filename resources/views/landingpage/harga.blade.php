@extends('layout.navbar')
@section('content')
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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">Testimoni Pelanggan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='assets/img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Afif Musyaffa</h4>
                    <p class="text-primary">Mahasiswa</p>
                    <span class="fs-5">Mantap cukurannya bang, membuat lebih percaya diri saat keluar rumah!</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='assets/img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Rizal Wahyu Hermawan</h4>
                    <p class="text-primary">Mahasiswa</p>
                    <span class="fs-5">Saya merasa lebih tampan setelah cukur disini!</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='assets/img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Rafael Hadi Rianda</h4>
                    <p class="text-primary">Mahasiswa</p>
                    <span class="fs-5">Aku sangat puas dengan pelayanannya!</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
