@extends('layout.navbar')
@section('content')
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