<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data ke Database dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Update Data ke Database dengan PHP</h1>
        <h1>Update data dari database</h1>
        <h3>www.unipma.ac.id</h3>   
    </div>

    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/>
    <h3>Edit data</h3>
    <?php
    include "koneksi.php";
    $koneksi = mysqli_connect("localhost", "root", "", "biodata");
    if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
    }
    $npm = $_GET['npm'];
    $query = "SELECT * FROM datadiri WHERE npm='$npm'";
    $result = mysqli_query($koneksi, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="npm" value="<?php echo $data['npm']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php
    } else {
        echo "Data tidak ditemukan.";
    }
    ?>
</body>
</html>
