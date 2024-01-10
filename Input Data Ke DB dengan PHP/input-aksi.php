<?php
include 'koneksi.php';

if (isset($_POST['npm'], $_POST['nama'], $_POST['alamat'], $_POST['kelas'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];

    $koneksi = mysqli_connect("localhost", "root", "", "biodata");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO datadiri (npm, nama, alamat, kelas) VALUES ('$npm','$nama','$alamat','$kelas')";
    if (mysqli_query($koneksi, $query)) {
        mysqli_close($koneksi);
        header("Location: index.php?pesan=input");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Data POST tidak lengkap.";
}
?>
