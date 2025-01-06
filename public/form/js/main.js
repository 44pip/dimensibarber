(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    // Chart Global Color
    Chart.defaults.color = "#6C7293";
    Chart.defaults.borderColor = "#000000";


    // Worldwide Sales Chart
    var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "USA",
                    data: [15, 30, 55, 65, 60, 80, 95],
                    backgroundColor: "rgba(235, 22, 22, .7)"
                },
                {
                    label: "UK",
                    data: [8, 35, 40, 60, 70, 55, 75],
                    backgroundColor: "rgba(235, 22, 22, .5)"
                },
                {
                    label: "AU",
                    data: [12, 25, 45, 55, 65, 70, 60],
                    backgroundColor: "rgba(235, 22, 22, .3)"
                }
            ]
            },
        options: {
            responsive: true
        }
    });


    // Salse & Revenue Chart
    var ctx2 = $("#salse-revenue").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                    label: "Salse",
                    data: [15, 30, 55, 45, 70, 65, 85],
                    backgroundColor: "rgba(235, 22, 22, .7)",
                    fill: true
                },
                {
                    label: "Revenue",
                    data: [99, 135, 170, 130, 190, 180, 270],
                    backgroundColor: "rgba(235, 22, 22, .5)",
                    fill: true
                }
            ]
            },
        options: {
            responsive: true
        }
    });
    


    // Single Line Chart
    var ctx3 = $("#line-chart").get(0).getContext("2d");
    var myChart3 = new Chart(ctx3, {
        type: "line",
        data: {
            labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
            datasets: [{
                label: "Salse",
                fill: false,
                backgroundColor: "rgba(235, 22, 22, .7)",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Single Bar Chart
    var ctx4 = $("#bar-chart").get(0).getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "bar",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Pie Chart
    var ctx5 = $("#pie-chart").get(0).getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "pie",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });


    // Doughnut Chart
    var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: {
            labels: ["Italy", "France", "Spain", "USA", "Argentina"],
            datasets: [{
                backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                data: [55, 49, 44, 24, 15]
            }]
        },
        options: {
            responsive: true
        }
    });

    
})(jQuery);


// Fungsi untuk menyimpan waktu yang sudah dipesan
function saveBookedTime(waktu) {
    let bookedTimes = JSON.parse(localStorage.getItem('bookedTimes')) || {};
    const today = new Date().toISOString().split('T')[0]; // Mendapatkan tanggal hari ini
    bookedTimes[today] = bookedTimes[today] || [];
    bookedTimes[today].push(waktu);
    localStorage.setItem('bookedTimes', JSON.stringify(bookedTimes));
}

// Fungsi untuk memeriksa dan menghapus waktu yang sudah dipesan
function checkAndResetBookedTimes() {
    const today = new Date().toISOString().split('T')[0];
    let bookedTimes = JSON.parse(localStorage.getItem('bookedTimes')) || {};
    
    // Hapus waktu yang sudah dipesan jika sudah berganti hari
    Object.keys(bookedTimes).forEach(date => {
        if (date !== today) {
            delete bookedTimes[date];
        }
    });
    
    localStorage.setItem('bookedTimes', JSON.stringify(bookedTimes));
}

// Panggil fungsi untuk memeriksa dan mereset waktu yang sudah dipesan
checkAndResetBookedTimes();

function sendwhatsapp() {
    var phonenumber = "+6285374338260";

    // Menggunakan getElementById untuk mengambil nilai
    var nama = document.getElementById("nama").value;
    var nohp = document.getElementById("nohp").value;
    var tanggal = document.getElementById("tanggal").value;
    var waktu = document.getElementById("selected-time").value; // Mengambil waktu dari input tersembunyi
    var deskripsi = document.getElementById("deskripsi").value;

    var url = "https://wa.me/" + phonenumber + "?text=" +
        "*Nama:* " + nama + "%0a" +
        "*No HP:* " + nohp + "%0a" +
        "*Tanggal:* " + tanggal + "%0a" +
        "*Waktu:* " + waktu + "%0a" + // Menambahkan waktu yang dipilih
        "*Deskripsi:* " + deskripsi;

    // Membuka WhatsApp di tab baru
    window.open(url, '_blank');

    // Mengganti teks tombol yang dipilih dengan "BOOKED"
    var selectedButton = document.querySelector('.time-button.selected');
    if (selectedButton) {
        selectedButton.innerText = "BOOKED";
        selectedButton.disabled = true; // Menonaktifkan tombol agar tidak bisa diklik lagi
        saveBookedTime(waktu); // Simpan waktu yang sudah dipesan
    }

    // Mengarahkan tab utama ke halaman beranda
    window.location.href = "/beranda"; // Ganti dengan URL halaman beranda Anda
}

function selectTime(button) {
    // Hapus kelas 'selected' dari semua tombol
    document.querySelectorAll('.time-button').forEach(btn => {
        btn.classList.remove('selected');
    });
    // Tambahkan kelas 'selected' ke tombol yang dipilih
    button.classList.add('selected');
    // Set waktu yang dipilih ke input tersembunyi
    document.getElementById('selected-time').value = button.innerText;
}

// Fungsi untuk memulihkan status pemesanan saat halaman dimuat
function restoreBookedTimes() {
    const today = new Date().toISOString().split('T')[0];
    let bookedTimes = JSON.parse(localStorage.getItem('bookedTimes')) || {};
    
    if (bookedTimes[today]) {
        bookedTimes[today].forEach(waktu => {
            document.querySelectorAll('.time-button').forEach(btn => {
                if (btn.innerText === waktu) {
                    btn.innerText = "BOOKED";
                    btn.disabled = true; // Menonaktifkan tombol yang sudah dipesan
                }
            });
        });
    }
}

// Panggil fungsi untuk memulihkan status pemesanan saat halaman dimuat
document.addEventListener('DOMContentLoaded', restoreBookedTimes);
