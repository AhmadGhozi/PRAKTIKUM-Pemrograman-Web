<html>
<head>
    <title>Menampilkan Jumlah Hari Dalam Bulan Sekarang</title>
</head>
<body>
    <h1>Jumlah Hari dalam Bulan Sekarang</h1>

    <?php
    // Ambil angka bulan dan tahun saat ini
    $bulan = date("n"); // bulan (1–12)
    $tahun = date("Y"); // tahun empat digit, misal 2025

    switch ($bulan) {
        case 1:
            $namaBulan = "Januari";
            $jumlahHari = 31;
            break;
        case 2:
            $namaBulan = "Februari";
            // Cek apakah tahun kabisat
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                $jumlahHari = 29;
            } else {
                $jumlahHari = 28;
            }
            break;
        case 3:
            $namaBulan = "Maret";
            $jumlahHari = 31;
            break;
        case 4:
            $namaBulan = "April";
            $jumlahHari = 30;
            break;
        case 5:
            $namaBulan = "Mei";
            $jumlahHari = 31;
            break;
        case 6:
            $namaBulan = "Juni";
            $jumlahHari = 30;
            break;
        case 7:
            $namaBulan = "Juli";
            $jumlahHari = 31;
            break;
        case 8:
            $namaBulan = "Agustus";
            $jumlahHari = 31;
            break;
        case 9:
            $namaBulan = "September";
            $jumlahHari = 30;
            break;
        case 10:
            $namaBulan = "Oktober";
            $jumlahHari = 31;
            break;
        case 11:
            $namaBulan = "November";
            $jumlahHari = 30;
            break;
        case 12:
            $namaBulan = "Desember";
            $jumlahHari = 31;
            break;
    }

    echo "<p>Bulan sekarang adalah <strong>$namaBulan $tahun</strong>.</p>";
    echo "<p>Jumlah hari dalam bulan ini adalah <strong>$jumlahHari</strong> hari.</p>";
    ?>
</body>
</html>