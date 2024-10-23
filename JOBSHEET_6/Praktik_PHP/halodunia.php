<?php
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
echo "Hallo {$nama}! Apakah benar Anda berusia {$usia} tahun?";
?>