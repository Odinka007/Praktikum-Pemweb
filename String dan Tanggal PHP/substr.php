<?php
$date = '012409';
$bulan   = substr($date, 0, 2);
$hari    = substr($date, 2, 2);
$tahun   = substr($date, -2);
echo "$hari/$bulan/$tahun";
?>