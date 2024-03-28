<?php
$folderPath = '/uji/Nyoba/';

if(isset($_FILES['fileToUpload'])){
    $file_name = $_FILES['fileToUpload']['name'];
    $file_temp = $_FILES['fileToUpload']['tmp_name'];
    
    // Pindahkan file ke lokasi yang ditentukan
    if(move_uploaded_file($file_temp, $_SERVER['DOCUMENT_ROOT'].$folderPath.$file_name)) {
        // Tampilkan nama file yang diunggah
        echo "<h2>File berhasil diunggah:</h2>";
        echo "<p>Nama File: $file_name</p>";

        // Tampilkan gambar yang diunggah
        echo "<img src='$folderPath$file_name' alt='Gambar yang diunggah' width='600'>";
    } else {
        // Jika gagal mengunggah file
        echo "<h2>Terjadi kesalahan saat mengunggah file.</h2>";
    }
} else {
    // Jika tidak ada file yang diunggah
    echo "<h2>Anda belum memilih file untuk diunggah.</h2>";
}
?>
