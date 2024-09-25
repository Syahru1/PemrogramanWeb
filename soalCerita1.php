<?php

$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;
$persenKursi = ($kursiKosong / $totalKursi) * 100;

echo "Total Kursi         = " . $totalKursi . "<br>";
echo "Kursi Terisi        = " . $kursiDitempati . "<br>";
echo "Total Kursi Kosong  = " . $kursiKosong . "<br>";
echo "Persen Kursi Kosong = " . $persenKursi . "% <br>";
?>