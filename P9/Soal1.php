<html>
    <head>
        <title>Menghitung Saldo Akhir</title>
    </head>
    <body>
        <h2>Menghitung Saldo Akhir Tabungan</h2>
        <form method="post">
            Saldo Awal (Rp): <input type="number" name="saldoAwal" required><br><br>
            Bunga per Bulan (%): <input type="number" step="0.01" name="bunga" required><br><br>
            Lama Menabung (bulan): <input type="number" name="bulan" required><br><br>
            <input type="submit" value="Hitung">
            <input type="reset" value="Reset">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $saldoAwal = $_POST['saldoAwal'];
            $bunga = $_POST['bunga'] / 100;
            $bulan = $_POST['bulan'];

            $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

            echo "<h3>Hasil Perhitungan:</h3>";
            echo "Saldo awal: Rp. " . number_format($saldoAwal, 0, ',', '.') . "<br>";
            echo "Bunga per bulan: " . ($bunga * 100) . "%<br>";
            echo "Lama menabung: " . $bulan . " bulan<br>";
            echo "Saldo akhir setelah $bulan bulan adalah: <b>Rp. " . number_format($saldoAkhir, 0, ',', '.') . "</b>";
        }
        ?>
    </body>
</html>