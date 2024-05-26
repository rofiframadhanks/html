<?php include 'config.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTR PUBGM Team</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <h1>Tambah Roster<br></h1>
    <form method="post" Action="create.php">
        <label>ID:</label>
        <input type="text" name="id" required>
        <br>
        <label>Name:</label>
        <input type="text" name="nama" required>
        <br>
        <label>No Roster</label>
        <input type="text" name="no_roster" required>
        <br>
        <label>Posisi</label>
        <input type="text" name="posisi" required>
        <br>
        <button type="submit">Tambah Roster</button>
    </form>
    <br>
    <a href="index.php">Kembali ke daftar roster</a>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $no_roster = $_POST['no_roster'];
        $posisi = $_POST['posisi'];

        $stmt = $conn->prepare("INSERT INTO users (id, nama, no_roster, posisi) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $id, $nama, $no_roster, $posisi);
        if ($stmt->execute()) {
            echo "Pemain baru berhasil ditambahkan.";
        }else{
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    ?>
</body>
</html>