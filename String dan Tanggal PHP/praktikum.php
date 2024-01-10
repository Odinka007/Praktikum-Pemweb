<!DOCTYPE html>
<html>
<head>
    <title>Tugas String dan Tanggal</title>
</head>
<body>
   <form method="post" action="">
    Masukkan Nama, Email, dan Password <br>
    Default Nama = belajar, Email = test@gmail.com, dan Password = madiun
    <br>
    Isian Data :<br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email" required><br>
    Password : <input type="password" name="password" required><br>
    <input type="submit" name="submit" value="cek"><br>
  </form>

  <?php
    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            echo "Harap mengisi email <br>";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Alamat email $email tidak valid<br>";
            }
        }

        if(isset($_POST['password'])){
            $nama = "belajar";
            $password = $_POST['password'];
            $pass_valid = crypt("madiun", $nama);
            $enkripsi = crypt($password, $nama);

            if ($pass_valid == $enkripsi){
                echo "Password valid";
            } else {
                echo "Password salah";
            }
        }
    }
  ?>

</body>
</html>
