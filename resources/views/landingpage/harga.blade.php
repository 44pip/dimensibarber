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
@endsection
