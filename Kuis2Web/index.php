<?php include 'config.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTR PUBGM Team</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Daftar Roster BTR RA<br></h1>
    <img src="Bigetron.png" alt="logo" style="width: 100px; height: auto; margin-left: 47%;">
    <br>
    <a href="create.php" class="tambah">Tambah daftar Roster</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Roster</th>
            <th>Posisi</th>
            <th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['no_roster']."</td>
            <td>".$row['posisi']."</td>
            <td>
            <a href='update.php?id=".$row['id']."'>Edit</a>
            <a href='delete.php?id=".$row['id']."'>Delete</a>
        </td>
        </tr>";
        }
        ?>
</body>
</html>