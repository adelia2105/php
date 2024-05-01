<?php

// Data kelas dengan array 2 dimensi
$array = [
    "1C" => ["udin", "ismail", "adi"],
    "10" => ["lukman", "fajri", "mahmud"]
];

// Menampilkan data array secara lengkap
print_r($array);

echo "<br>";

// Menampilkan data dari kelas "10"
print_r($array['10']);

echo "<br>";

echo "fajri from class '1D': " . $array['1C'][1] . "<br>";



// Tampilkan "adi" dari kelas "1C"
echo "Adi from class '1C': " . $array['1C'][2] . "<br>";

?>
