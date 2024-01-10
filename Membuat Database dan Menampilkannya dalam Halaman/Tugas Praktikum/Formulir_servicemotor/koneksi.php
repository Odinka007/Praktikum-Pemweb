<?php
$service_motor = mysqli_connect("localhost", "root", ""); // Ganti username dan password dengan informasi yang benar
if (!$service_motor) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db = mysqli_select_db($service_motor, "service_motor"); // Nama database tanpa spasi
if (!$db) {
    die("Pemilihan database gagal: " . mysqli_error($service_motor));
}
?>
