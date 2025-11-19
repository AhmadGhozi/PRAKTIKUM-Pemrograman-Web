<html>
    <head>
        <title>Hitung Saldo Akhir</title>
    </head>
    <body>
        <h2>Form Hitung Saldo Akhir Tabungan</h2>
        <form method="post">
            Saldo Awal: 
            <input type="number" name="saldo" required><br><br>
            Lama Menabung (bulan): 
            <input type="number" name="bulan" required><br><br>
            <input type="submit" value="Hitung">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $saldo = $_POST['saldo'];
            $bulan = $_POST['bulan'];

            for ($i = 1; $i <= $bulan; $i++) {

                if ($saldo < 1100000) {
                    $bunga = 0.03 / 12;
                } else {
                    $bunga = 0.04 / 12;
                }

                $saldo = $saldo + ($saldo * $bunga);
                $saldo = $saldo - 9000;
            }

            echo "<h3>Saldo Akhir Setelah $bulan Bulan: Rp " . 
                 number_format($saldo, 0, ',', '.') . "</h3>";
        }
        ?>
    </body>
</html>