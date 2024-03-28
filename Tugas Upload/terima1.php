<?php
session_start();

$_SESSION['nama'] = $_POST['nama'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['jk'] = $_POST['jk'];

header("Location: upload_file.php");
exit;
?>
