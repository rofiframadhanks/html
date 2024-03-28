<html>
    <title>Learn html</title>
    <body>
        <form action="terima.php" method="post">

        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $_POST["nama"];?>">
        <br>

        <label>Tanggal Lahir</label>
        <input type="date" name="tgl" value="<?php echo $_POST["tgl"];?>">
        <br>

        <label>Jenis Kelamin</label>
        <input type="radio" name="jk" value="laki-laki">laki-laki
        <input type="radio" name="jk" value="perempuan">perempuan
        <br><br>

        <input type="submit" value="kirim">
        </form>
    </body>
</html>