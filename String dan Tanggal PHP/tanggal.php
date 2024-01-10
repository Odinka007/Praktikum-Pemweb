<!DOCTYPE html>
<html lang="en">

    <title>Praktikum Tanggal</title>
</head>
<body>
    <?php
    $namahari =
    array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
    $namabulan =
    array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    echo $namahari[date("w")].", ".date("j")." ".$namabulan[date("n")-1]." ".date("Y");

    echo date("Y/m/d") . "<br />"; //
    echo date("l, d-m-Y") . "<br />";
    echo date("d F Y") . "<br />";
    echo date("h:i:s") . "<br .>";
    echo date("l, d-m-Y h:i:is") . "<br />";
    ?>
</body>
</html>