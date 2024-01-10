<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
        <h2>Menampilkan Data Service Sepeda Motor</h2>
        <h2>www.bengkel mikel.id</h2>
    </div>
    <br/>
    <br/>
    <h3>Data pelanggan</h3>
    <table border="1" class="table">
        <tr>
            <th>Nomor Urut</th>
            <th>Nama Customer</th>
            <th>Type Sepeda Motor</th>
            <th>Nomor Telepon</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($service_motor, "SELECT * FROM pelanggan") or die(mysqli_error($service_motor));

        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $data['no_urut']; ?></td>
                <td><?php echo $data['nama_pelanggan']; ?></td>
                <td><?php echo $data['type_motor']; ?></td>
                <td><?php echo $data['telepon']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
