<?php
session_start();

$folderPath = '/uji/Tugas Upload/';

if(isset($_FILES['fileToUpload'])){
    $file_name = $_FILES['fileToUpload']['name'];
    $file_url = 'http://' . $_SERVER['HTTP_HOST'] . $folderPath . $file_name;
    $file_temp = $_FILES['fileToUpload']['tmp_name'];
    
    // Pindahkan file ke lokasi yang ditentukan
    move_uploaded_file($file_temp, $_SERVER['DOCUMENT_ROOT'].$folderPath.$file_name);
    
    // Menampilkan nama file dan membuat tautan untuk mengunduhnya
    echo "Nama: " . $_SESSION['nama'] . "<br>";
    echo "File: <a href='$file_url'>$file_name</a><br>";
    
    // Menampilkan gambar yang diunggah
    echo "<img src='$file_url' alt='Gambar yang diunggah' width='600'> <br><br><br>";
} else {
    echo "Tidak ada file yang diterima. <br><br><br>";
}
echo "File berhasil diunggah.";
?>
