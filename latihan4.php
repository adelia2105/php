<?php
// Mengambil waktu saat ini dalam jam
$t = date("H");

// Mengecek kondisi untuk menyapa dengan waktu yang sesuai
echo "If<br>";
if ($t < 16) {
    echo "Selamat Siang!";
}

echo "<br> If dan Else <br>";
// Menampilkan pesan berbeda sebelum dan setelah jam 20
if ($t < 20) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}

echo "<br> Nested If <br>";
// Menampilkan pesan berdasarkan waktu tertentu dalam hari
if ($t < 11) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat Siang!";
} elseif ($t < 20) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}
?>
