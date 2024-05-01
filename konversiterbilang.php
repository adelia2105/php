<?php
// Mendapatkan angka dari query string
$angka = isset($_GET['angka']) ? intval($_GET['angka']) : 0;

// Fungsi untuk mengonversi angka menjadi terbilang
function konversiTerbilang($angka) {
    switch ($angka) {
        case 1:
            return "satu";
        case 2:
            return "dua";
        case 3:
            return "tiga";
        case 4:
            return "empat";
        case 5:
            return "lima";
        case 6:
            return "enam";
        case 7:
            return "tujuh";
        case 8:
            return "delapan";
        case 9:
            return "sembilan";
        default:
            return "Angka di luar jangkauan 1-9";
    }
}

// Menampilkan hasil konversi
echo "Angka $angka dalam bentuk terbilang adalah " . konversiTerbilang($angka) . ".";
?>
