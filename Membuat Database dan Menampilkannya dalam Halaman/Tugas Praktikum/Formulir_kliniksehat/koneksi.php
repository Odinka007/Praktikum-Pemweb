<?php
$klinik_sehat = mysqli_connect("localhost", "root", ""); // Ganti username dan password dengan informasi yang benar
if (!$klinik_sehat) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db = mysqli_select_db($klinik_sehat, "klinik_sehat"); // Ganti 'nama_database' dengan nama database yang ingin Anda gunakan
if (!$db) {
    die("Pemilihan database gagal: " . mysqli_error($klinik_sehat));
}
?>


