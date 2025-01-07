@extends('layout.navbar')
@section('content')
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
@endsection
