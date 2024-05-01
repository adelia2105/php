<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
    <h1>Konversi Nilai Angka ke Huruf</h1>

    <form method="post" action="">
        Masukkan Nilai Angka: <input type="text" name="nilai"><br><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        if ($nilai >= 85) {
            $grade = 'A';
        } elseif ($nilai >= 70) {
            $grade = 'B';
        } elseif ($nilai >= 60) {
            $grade = 'C';
        } elseif ($nilai >= 50) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        echo "<br>Nilai Angka: " . $nilai;
        echo "<br>Nilai Huruf: " . $grade;
    }
    ?>

</body>
</html>
