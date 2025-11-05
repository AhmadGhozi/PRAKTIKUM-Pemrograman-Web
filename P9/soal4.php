<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pendaftaran Mahasiswa Baru</title>
    </head>
    <body>
        <h2>Form Pendaftaran Mahasiswa Baru</h2>
        
        <form method="get" action="">
            <label>Nama Lengkap :</label>
            <input type="text" name="nama"><br><br>
            <label>Tempat Lahir :</label>
            <input type="text" name="tempat"><br><br>
            <label>Tanggal Lahir :</label>
            <select name="tgl">
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>

            <select name="bln">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>

            <select name="thn">
                <?php
                for ($i = 1980; $i <= 2006; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <br><br>
            
            <label>Alamat Rumah :</label><br>
            <textarea name="alamat" rows="3" cols="40"></textarea><br><br>
            
            <label>Jenis Kelamin :</label>
            <input type="radio" name="jk" value="Pria"> Pria
            <input type="radio" name="jk" value="Wanita"> Wanita
            <br><br>
            
            <label>Asal Sekolah :</label>
            <input type="text" name="sekolah"><br><br>
            
            <label>Nilai UAN :</label>
            <input type="text" name="uan"><br><br>

            <input type="submit" name="submit" value="Kirim">
            <input type="reset" value="Reset">
        </form>
        
        <?php
        if (isset($_GET['submit'])) {
            $nama     = $_GET['nama'];
            $tempat   = $_GET['tempat'];
            $tgl      = $_GET['tgl'];
            $bln      = $_GET['bln'];
            $thn      = $_GET['thn'];
            $alamat   = $_GET['alamat'];
            $jk       = $_GET['jk'];
            $sekolah  = $_GET['sekolah'];
            $uan      = $_GET['uan'];

            echo "<h3>Terima kasih <b>$nama</b> sudah mengisi form pendaftaran.</h3>";
            echo "Nama Lengkap : $nama<br>";
            echo "Tempat Lahir : $tempat<br>";
            echo "Tanggal Lahir : $tgl - $bln - $thn<br>";
            echo "Alamat Rumah : $alamat<br>";
            echo "Jenis Kelamin : $jk<br>";
            echo "Asal Sekolah : $sekolah<br>";
            echo "Nilai UAN : $uan<br>";
        }
        ?>
    </body>
</html>