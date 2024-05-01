<?php
// Jumlah uang yang akan diambil Ani
$total_uang = 1387500;

// Pecahan uang yang tersedia
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Array untuk menyimpan jumlah masing-masing pecahan
$jumlah_pecahan = [];

// Menghitung jumlah masing-masing pecahan
foreach ($pecahan as $nilai) {
    $jumlah_pecahan[$nilai] = intdiv($total_uang, $nilai);
    $total_uang %= $nilai;
}

// Menampilkan hasil
echo "Ani akan menerima uang pecahan sebagai berikut:<br>";
foreach ($jumlah_pecahan as $nilai => $jumlah) {
    echo "Rp. " . number_format($nilai, 0, ',', '.') . " sebanyak " . $jumlah . " lembar<br>";
}
?>
