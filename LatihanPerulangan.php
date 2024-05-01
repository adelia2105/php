<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan Bintang</title>
</head>
<body>
    <h1>Perulangan Bintang</h1>
    <?php
    // Menggunakan perulangan for untuk mencetak bintang dari 1 hingga 10
    for ($i = 1; $i <= 10; $i++) {
        // Mencetak bintang sebanyak $i kali
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        // Membuat baris baru setelah setiap baris bintang selesai dicetak
        echo "<br>";
    }
    ?>
</body>
</html>
