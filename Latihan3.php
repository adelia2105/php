<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan " . ($x + $y) . "<br>";
echo "Pengurangan " . ($x - $y) . "<br>";
echo "Perkalian " . ($x * $y) . "<br>";
echo "Pembagian " . ($x / $y) . "<br>";
echo "Modulus " . ($x % $y) . "<br>";
echo "Exponensial " . ($x ** $y) . "<br>";
echo ("<br>");

// Assignment operators
$x += 2;  // Sekarang x menjadi 7
$y *= 2;  // Sekarang y menjadi 20
echo "Penambahan x " . $x . "<br>";
echo "Perkalian y " . $y . "<br>";
echo ("<br>");

// Increment/Decrement operators
echo "Isi ++x = " . ++$x . "<br>";  // Menginkrementkan x terlebih dahulu, lalu mencetak (x menjadi 8)
echo "Isi x++ = " . $x++ . "<br>";  // Mencetak x, kemudian menginkrementkannya (x menjadi 9)
echo "Isi x = " . $x . "<br>";      // Mencetak nilai x yang baru (9)
echo ("<br>");
echo "Isi --y = " . --$y . "<br>";  // Mendekrementkan y terlebih dahulu, lalu mencetak (y menjadi 19)
echo "Isi y-- = " . $y-- . "<br>";  // Mencetak y, kemudian mendekrementkannya (y menjadi 18)
echo "Isi y = " . $y . "<br>";      // Mencetak nilai y yang baru (18)
echo ("<br>");

// Conditional assignment operators
$user = "Agnes Adelia Putri";
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";

// Menggunakan null coalescing operator untuk mengatasi undefined variable
$color = $color ?? "red";
echo $color;

?>
