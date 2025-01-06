<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="public/form/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/form/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/form/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="/form/css/style.css">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/form/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Form Start -->
        <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-10">
                    <div class="bg-secondary rounded h-100 p-4" style="padding: 2rem;">
                        <h6 class="mb-4">Formulir Pemesanan</h6>
                        <form action="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="form-label">NO HP</label>
                                <input type="tel" class="form-control" id="nohp" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="waktu" class="form-label">Waktu</label>
                                <div class="time-options" id="time-options">
                                    <button type="button" class="time-button" onclick="selectTime(this)">09:00</button>
                                    <button type="button" class="time-button" onclick="selectTime(this)">10:00</button>
                                    <button type="button" class="time-button" onclick="selectTime(this)">11:00</button>
                                    <button type="button" class="time-button" onclick="selectTime(this)">12:00</button>
                                    <button type="button" class="time-button" onclick="selectTime(this)">13:00</button>
                                    <button type="button" class="time-button" onclick="selectTime(this)">14:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">15:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">16:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">17:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">18:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">19:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">20:00</button>
                                    <button type="button" class="time-button"
                                        onclick="selectTime(this)">21:00</button>
                                </div>
                                <input type="hidden" id="selected-time" name="selected-time" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" rows="3" required></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="sendwhatsapp();">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/form/lib/chart/chart.min.js"></script>
    <script src="/form/lib/easing/easing.min.js"></script>
    <script src="/form/lib/waypoints/waypoints.min.js"></script>
    <script src="/form/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/form/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/form/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/form/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/form/js/main.js"></script>
    <script src="/form/js/wa.js"></script>

</body>

</html>
