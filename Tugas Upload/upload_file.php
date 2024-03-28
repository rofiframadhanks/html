<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="terima2.php" method="post" enctype="multipart/form-data">
        <label>Nama: <?php echo $_SESSION['nama']; ?></label>
        <br>
        <label>Password: <?php echo $_SESSION['password']; ?></label>
        <br>
        <label>Jenis Kelamin: <?php echo $_SESSION['jk']; ?></label>
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" value="Unggah File" name="submit">
    </form>
</body>
</html>
