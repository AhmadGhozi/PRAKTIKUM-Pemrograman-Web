<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h1>Cek Tahun Kabisat</h1>

    <!-- Form Input Tahun -->
    <form method="post" action="">
        <label>Masukkan Tahun: </label>
        <input type="number" name="tahun" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    // Mengecek apakah form sudah disubmit
    if (isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];

        // Logika menentukan tahun kabisat
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p>Tahun <strong>$tahun</strong> adalah tahun kabisat.</p>";
        } else {
            echo "<p>Tahun <strong>$tahun</strong> bukan tahun kabisat.</p>";
        }
    }
    ?>
</body>
</html>