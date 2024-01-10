<?php
$biodata = mysqli_connect("localhost", "root", ""); // Ganti username dan password dengan informasi yang benar
if (!$biodata) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db = mysqli_select_db($biodata, "biodata"); // Ganti 'nama_database' dengan nama database yang ingin Anda gunakan
if (!$db) {
    die("Pemilihan database gagal: " . mysqli_error($biodata));
}
?>


