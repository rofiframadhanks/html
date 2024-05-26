<?php
$sarvername = "localhost";
$email = "root";
$password = "";
$dbname = "tabelcrud";

$conn = new mysqli($sarvername, $email, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
?>