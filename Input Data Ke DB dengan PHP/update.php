<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

$koneksi = mysqli_connect("localhost", "root", "", "biodata");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
$query = "UPDATE datadiri SET nama='$nama', alamat='$alamat', kelas='$kelas' WHERE npm='$npm'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
