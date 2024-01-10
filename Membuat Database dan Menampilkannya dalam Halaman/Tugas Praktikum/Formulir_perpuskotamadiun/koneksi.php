<?php
$form_perpus = mysqli_connect("localhost", "root", ""); // Ganti username dan password dengan informasi yang benar
if (!$form_perpus) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db = mysqli_select_db($form_perpus, "form_perpus"); // Ganti 'nama_database' dengan nama database yang ingin Anda gunakan
if (!$db) {
    die("Pemilihan database gagal: " . mysqli_error($form_perpus));
}
?>


