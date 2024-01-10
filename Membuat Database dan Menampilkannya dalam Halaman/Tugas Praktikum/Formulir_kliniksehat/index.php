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
    <h3>Data Pasien</h3>
    <table border="1" class="table">
        <tr>
            <th>ID Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Rumah</th>
            <th>Umur</th>
            <th>Keluhan Penyakit</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($klinik_sehat, "SELECT * FROM pasien") or die(mysqli_error($klinik_sehat));

        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $data['id_pasien']; ?></td>
                <td><?php echo $data['nama_pasien']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['umur']; ?></td>
                <td><?php echo $data['keluhan']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
