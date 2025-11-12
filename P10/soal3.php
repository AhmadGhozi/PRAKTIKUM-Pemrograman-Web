<html>
<head>
    <title>Hitung Upah Karyawan Berdasarkan Golongan</title>
</head>
<body>
    <h1>Perhitungan Upah Karyawan Berdasarkan Golongan</h1>

    <form method="post" action="">
        <label>Masukkan jumlah jam kerja dalam seminggu: </label>
        <input type="number" name="jamKerja" min="0" required><br><br>

        <label>Pilih golongan karyawan: </label>
        <select name="golongan" required>
            <option value="">-- Pilih Golongan --</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br><br>

        <input type="submit" value="Hitung Upah">
    </form>

    <?php
    if (isset($_POST['jamKerja']) && isset($_POST['golongan'])) {
        $jamKerja = $_POST['jamKerja'];
        $golongan = strtoupper($_POST['golongan']);

        // Tarif per jam berdasarkan golongan
        switch ($golongan) {
            case 'A':
                $upahPerJam = 4000;
                break;
            case 'B':
                $upahPerJam = 5000;
                break;
            case 'C':
                $upahPerJam = 6000;
                break;
            case 'D':
                $upahPerJam = 7500;
                break;
            default:
                $upahPerJam = 0;
                break;
        }

        $upahLemburPerJam = 3000;
        $batasJamNormal = 48;

        if ($jamKerja > $batasJamNormal) {
            $jamLembur = $jamKerja - $batasJamNormal;
            $upahNormal = $batasJamNormal * $upahPerJam;
            $upahLembur = $jamLembur * $upahLemburPerJam;
            $totalUpah = $upahNormal + $upahLembur;
        } else {
            $jamLembur = 0;
            $totalUpah = $jamKerja * $upahPerJam;
        }

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>Golongan: <strong>$golongan</strong></p>";
        echo "<p>Jam kerja: <strong>$jamKerja</strong> jam</p>";
        echo "<p>Jam lembur: <strong>$jamLembur</strong> jam</p>";
        echo "<p>Total upah: <strong>Rp " . number_format($totalUpah, 0, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>