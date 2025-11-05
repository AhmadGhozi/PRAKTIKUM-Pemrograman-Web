<html>
    <head>
        <title>Hitung Pecahan Uang</title>
    </head>
    <body>
        <h2>Menghitung Pecahan Uang</h2>
        <form method="post">
            Masukkan Jumlah Uang (Rp): <input type="number" name="jumlahUang" required><br><br>
            <input type="submit" value="Hitung">
            <input type="reset" value="Reset">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlahUang = $_POST['jumlahUang'];

            $a = intdiv($jumlahUang, 100000);
            $jumlahUang %= 100000;

            $b = intdiv($jumlahUang, 50000);
            $jumlahUang %= 50000;

            $c = intdiv($jumlahUang, 20000);
            $jumlahUang %= 20000;

            $d = intdiv($jumlahUang, 5000);
            $jumlahUang %= 5000;

            $e = intdiv($jumlahUang, 100);
            $jumlahUang %= 100;

            $f = intdiv($jumlahUang, 50);
            $jumlahUang %= 50;

            echo "<h3>Hasil Pecahan:</h3>";
            echo "Pecahan Rp. 100.000 : $a lembar<br>";
            echo "Pecahan Rp. 50.000  : $b lembar<br>";
            echo "Pecahan Rp. 20.000  : $c lembar<br>";
            echo "Pecahan Rp. 5.000   : $d lembar<br>";
            echo "Pecahan Rp. 100     : $e koin<br>";
            echo "Pecahan Rp. 50      : $f koin<br>";
        }
        ?>
    </body>
</html>