<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "biodata";

// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "biodata");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}


include "koneksi.php";

// Periksa apakah parameter npm ada pada URL
if (isset($_GET['npm'])) {
    // Ambil npm dari parameter URL
    $npm = $_GET['npm'];

    // Persiapkan pernyataan SQL untuk menghapus data berdasarkan npm
    $query = "DELETE FROM datadiri WHERE npm=?";
    $stmt = mysqli_prepare($koneksi, $query);

    // Periksa apakah persiapan pernyataan SQL berhasil
    if ($stmt) {
        // Bind parameter ke pernyataan
        mysqli_stmt_bind_param($stmt, "s", $npm);

        // Jalankan pernyataan SQL
        mysqli_stmt_execute($stmt);

        // Periksa apakah penghapusan berhasil
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Redirect kembali ke halaman index.php dengan pesan sukses
            header("Location: index.php?pesan=hapus");
            exit();
        } else {
            echo "Tidak ada data yang dihapus.";
        }

        // Bebaskan pernyataan
        mysqli_stmt_close($stmt);
    } else {
        echo "Gagal mempersiapkan pernyataan SQL.";
    }
} else {
    echo "NPM tidak diberikan.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
