<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Roster</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <h1>Edit Roster</h1>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $no_roster = $_POST['no_roster'];
        $posisi = $_POST['posisi'];

        $stmt = $conn->prepare("UPDATE users SET nama = ?, no_roster = ?, posisi = ? WHERE id = ?");
        $stmt->bind_param("ssss", $nama, $no_roster, $posisi, $id);
        if ($stmt->execute()) {
            echo "Pemain berhasil di Update.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        header("Location: index.php");
        exit;
    }
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($user['nama']); ?>" required>
        <br>
        <label>No Roster:</label>
        <input type="text" name="no_roster" value="<?php echo htmlspecialchars($user['no_roster']); ?>" required>
        <br>
        <label>Posisi:</label>
        <input type="text" name="posisi" value="<?php echo htmlspecialchars($user['posisi']); ?>">
        <br>
        <button type="submit">Update Roster</button>
    </form>
    <br>
    <a href="index.php">Kembali ke daftar roster</a>
</body>
</html>
