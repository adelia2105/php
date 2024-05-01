<?php

// Mendefinisikan array dengan data siswa
$data_siswa = array(
    array("no" => 1, "poin" => 75, "nama" => "Adi"),
    array("no" => 2, "poin" => 80, "nama" => "Joni"),
    array("no" => 3, "poin" => 65, "nama" => "Jihan"),
    array("no" => 4, "poin" => 70, "nama" => "Aya"),
    array("no" => 5, "poin" => 85, "nama" => "Ita"),
    array("no" => 6, "poin" => 90, "nama" => "Budi"),
    array("no" => 7, "poin" => 95, "nama" => "Sari"),
    array("no" => 8, "poin" => 65, "nama" => "Tini")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "Poin siswa dengan nomor urut 5 adalah: " . $data_siswa[4]['poin'] . "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "Siswa dengan poin 90:<br>";
foreach ($data_siswa as $siswa) {
    if ($siswa['poin'] == 90) {
        echo $siswa['nama'] . "<br>";
    }
}

// c) Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
$found = false;
echo "Siswa dengan poin 100:<br>";
foreach ($data_siswa as $siswa) {
    if ($siswa['poin'] == 100) {
        echo $siswa['nama'] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada<br>";
}
?>
