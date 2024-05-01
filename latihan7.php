<?php

// Mendefinisikan array dengan nama buah
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

// Tampilkan Mangga
echo "Saya suka " . $namaBuah[1] . ".<br>";

// Tampilkan Jeruk
echo "Saya suka " . $namaBuah[2] . ".<br>";

// Tampilkan Apel
echo "Saya suka " . $namaBuah[3] . ".<br>";

// Tampilkan Melon
echo "Saya suka " . $namaBuah[4] . ".<br>";

// Mendefinisikan array dengan spesifik index untuk umur
$Umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "43 Tahun");

// Menambahkan umur Ahmad
$Umur['Ahmad'] = "50 Tahun";

// Menampilkan umur Andi
echo "Umur Andi adalah " . $Umur['Andi'] . ".<br>";

// Menampilkan semua umur
foreach ($Umur as $nama => $umur) {
    echo "Umur " . $nama . " adalah " . $umur . ".<br>";
}
?>
