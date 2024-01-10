<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Perpustakaan Kota Madiun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
        <h2>Menampilkan data Perpusatakaan Kota Madiun</h2>
    </div>
    <br/>
    <br/>
    <h3>Data Perpustakaan Kota Madiun</h3>
    <table border="1" class="table">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($form_perpus, "SELECT * FROM user") or die(mysqli_error($form_perpus));

        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $data['nomor']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['telepon']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
