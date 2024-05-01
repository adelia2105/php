<?php
// Mendefinisikan gaji pokok dan tunjangan
$gaji_pokok = 3250000;  // Rp. 3.250.000
$tunjangan = 1200000;  // Rp. 1.200.000

// Menghitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// Menghitung pajak penghasilan sebesar 10% dari gaji kotor
$pajak = 0.10 * $gaji_kotor;

// Menghitung gaji bersih dengan mengurangi pajak dari gaji kotor
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan hasil
echo "Gaji Bersih Obi setiap bulan adalah Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-";
?>
