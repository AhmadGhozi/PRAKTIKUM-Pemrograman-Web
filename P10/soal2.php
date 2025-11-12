<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Karyawan Honorer</title>
</head>
<body>
    <h1>Perhitungan Upah Karyawan Honorer</h1>

    <form method="post" action="">
        <label>Masukkan jumlah jam kerja dalam seminggu: </label>
        <input type="number" name="jamKerja" min="0" required>
        <input type="submit" value="Hitung Upah">
    </form>

    <?php
    if (isset($_POST['jamKerja'])) {
        $jamKerja = $_POST['jamKerja'];

        $upahPerJam = 2000;
        $upahLemburPerJam = 3000;
        $batasJamNormal = 48;

        if ($jamKerja > $batasJamNormal) {
            // Hitung jam lembur dan total upah
            $jamLembur = $jamKerja - $batasJamNormal;
            $upahNormal = $batasJamNormal * $upahPerJam;
            $upahLembur = $jamLembur * $upahLemburPerJam;
            $totalUpah = $upahNormal + $upahLembur;
        } else {
            // Tidak ada lembur
            $jamLembur = 0;
            $totalUpah = $jamKerja * $upahPerJam;
        }

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>Jam kerja: <strong>$jamKerja</strong> jam</p>";
        echo "<p>Jam lembur: <strong>$jamLembur</strong> jam</p>";
        echo "<p>Total upah: <strong>Rp " . number_format($totalUpah, 0, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>
