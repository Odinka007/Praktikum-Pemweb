<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h2>www.unipma.ac.id</h2>
    </div>
    <br/>
    <br/>
    <h3>Data Mahasiswa</h3>
    <table border="1" class="table">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelas</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($unipma, "SELECT * FROM mahasiswa") or die(mysqli_error($unipma));

        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $data['npm']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
