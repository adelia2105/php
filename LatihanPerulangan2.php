<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan 2</title>
</head>
<body>
    <h1>Menentukan Ganjil atau Genap</h1>
    <?php
    // Mendefinisikan array angka
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Mengurutkan array dari nilai terkecil ke terbesar
    sort($angka);

    // Melakukan perulangan untuk setiap elemen dalam array
    foreach ($angka as $nilai) {
        // Menentukan apakah nilai tersebut genap atau ganjil
        if ($nilai % 2 == 0) {
            echo "Nomor: " . $nilai . " Genap<br>";
        } else {
            echo "Nomor: " . $nilai . " Ganjil<br>";
        }
    }
    ?>
</body>
</html>
