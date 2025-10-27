<html>
    <head>
        <title>Menghitung Gaji Bersih Karyawan</title>
    </head>
    <body>
        <h1>Menghitung Gaji Bersih Karyawan</h1>
        <?php
        // CARA KE-1
        $gajiPokok = 1000000;
        $tunjangan = 500000;
        $gajiKotor = $gajiPokok + $tunjangan;
        $pajak = 0.15 * $gajiKotor;
        $gajiBersih = $gajiKotor - $pajak;
        echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih."</p>";

        // CARA KE-2
        $gajiPokok = 1000000;
        $tunjangan = 500000;
        $gajiKotor = $gajiPokok + $tunjangan;
        $gajiBersih = $gajiKotor - (0.15 * $gajiKotor);
        echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih."</p>";

        // CARA KE-3
        $gajiPokok = 1000000;
        $tunjangan = 500000;
        $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + $tunjangan);
        echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih."</p>";
        ?>
    </body>
</html>