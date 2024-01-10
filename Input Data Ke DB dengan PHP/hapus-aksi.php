<?php
include 'koneksi.php';

if (isset($_GET['npm'], $_GET['nama'], $_GET['alamat'], $_GET['kelas'])) {
    $npm = $_GET['npm'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $kelas = $_GET['kelas'];

    $koneksi = mysqli_connect("localhost", "root", "", "biodata");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "DELETE * FROM datadiri (npm, nama, alamat, kelas) VALUES ('$npm','$nama','$alamat','$kelas')";
    if (mysqli_query($koneksi, $query)) {
        mysqli_close($koneksi);
        header("Location: index.php?pesan=hapus");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} 
?>
