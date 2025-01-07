@extends('layout.navbar')
@section('content')
    <!-- Form Start -->
    <div class="row justify-content-center w-100">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-dark rounded p-4 shadow">
                <h6 class="mb-4 text-white text-center">Formulir Pemesanan</h6>
                <form action="{{ route('pemesanan.store') }}" method="POST">
                    @csrf <!-- CSRF Token -->
                    <div class="mb-3">
                        <label for="nama" class="form-label text-white">Nama Pemesan</label>
                        <input type="text" class="form-control bg-secondary text-white" id="nama" name="nama"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label text-white">NO HP</label>
                        <input type="tel" class="form-control bg-secondary text-white" id="nohp" name="nohp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label text-white">Tanggal</label>
                        <input type="date" class="form-control bg-secondary text-white" id="tanggal" name="tanggal"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label text-white">Waktu</label>
                        <div class="d-flex flex-wrap gap-2" id="time-options">
                            @php
                                // Daftar waktu yang tersedia
                                $waktuTersedia = [
                                    '09:00',
                                    '10:00',
                                    '11:00',
                                    '12:00',
                                    '13:00',
                                    '14:00',
                                    '15:00',
                                    '16:00',
                                    '17:00',
                                    '18:00',
                                    '19:00',
                                    '20:00',
                                    '21:00',
                                ];
                            @endphp
                            @foreach ($waktuTersedia as $waktu)
                                <button type="button" class="btn btn-outline-primary text-white time-button"
                                    data-waktu="{{ $waktu }}">
                                    {{ $waktu }}
                                </button>
                            @endforeach
                        </div>
                        <input type="hidden" id="selected-time" name="waktu" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label text-white">Deskripsi</label>
                        <textarea class="form-control bg-secondary text-white" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk memilih waktu dan menyembunyikan waktu yang sudah dipesan -->
    <script>
        // Fungsi untuk menyembunyikan tombol waktu yang sudah dipesan
        function updateTimeButtons() {
            const tanggal = document.getElementById('tanggal').value; // Ambil nilai tanggal
            const timeButtons = document.querySelectorAll('.time-button'); // Ambil semua tombol waktu

            // Jika tanggal tidak dipilih, tampilkan semua tombol waktu
            if (!tanggal) {
                timeButtons.forEach(button => {
                    button.style.display = 'inline-block'; // Tampilkan tombol
                    button.disabled = false; // Aktifkan tombol
                });
                return;
            }

            // Ambil data waktu yang sudah dipesan pada tanggal tersebut
            fetch(`/get-booked-times?tanggal=${tanggal}`)
                .then(response => response.json())
                .then(data => {
                    const bookedTimes = data.bookedTimes; // Waktu yang sudah dipesan

                    // Loop melalui semua tombol waktu
                    timeButtons.forEach(button => {
                        const waktu = button.getAttribute('data-waktu'); // Ambil waktu dari atribut data

                        // Jika waktu sudah dipesan, sembunyikan tombol
                        if (bookedTimes.includes(waktu)) {
                            button.style.display = 'none'; // Sembunyikan tombol
                        } else {
                            button.style.display = 'inline-block'; // Tampilkan tombol
                            button.disabled = false; // Aktifkan tombol
                        }
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        // Fungsi untuk memilih waktu
        function selectTime(button) {
            // Hapus class active dari semua tombol waktu
            document.querySelectorAll('.time-button').forEach(btn => {
                btn.classList.remove('active');
            });

            // Tambahkan class active ke tombol yang dipilih
            button.classList.add('active');

            // Set nilai input hidden dengan waktu yang dipilih
            document.getElementById('selected-time').value = button.getAttribute('data-waktu');
        }

        // Event listener untuk perubahan tanggal
        document.getElementById('tanggal').addEventListener('change', updateTimeButtons);

        // Jalankan fungsi updateTimeButtons saat halaman dimuat
        document.addEventListener('DOMContentLoaded', updateTimeButtons);

        // Tambahkan event listener untuk memilih waktu
        document.querySelectorAll('.time-button').forEach(button => {
            button.addEventListener('click', function() {
                selectTime(this);
            });
        });
    </script>
@endsection
