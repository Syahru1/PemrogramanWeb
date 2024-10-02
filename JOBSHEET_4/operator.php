<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$aPenjumlahan = $a;
$a -= $b;
$aPengurangan = $a;
$a *= $b;
$aPerkalian = $a;
$a /= $b;
$aPembagian = $a;
$a %= $b;
$aModulo = $a;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Tambah (10 + 5) = {$hasilTambah}<br>";
echo "Hasil Kurang (10 - 5) = {$hasilKurang} <br>";
echo "Hasil Kali (10 * 5)   = {$hasilKali} <br>";
echo "Hasil Bagi(10 / 5)    = {$hasilBagi} <br>";
echo "Sisa Bagi (10 % 5)    = {$sisaBagi} <br>";
echo "Pangkat (10 ** 5)     = {$pangkat} <br><br>";

echo "Hasil Sama (10 == 5)             = " . ($hasilSama ? "true" : "false") . " <br>";
echo "Hasil Tidak Sama (10 != 5)       = " . ($hasilTidakSama ? "true" : "false") . " <br>";
echo "Hasil Lebih Kecil (10 < 5)       = " . ($hasilLebihKecil ? "true" : "false") . " <br>";
echo "Hasil Lebih Besar (10 > 5)       = " . ($hasilLebihBesar ? "true" : "false") . " <br>";
echo "Hasil Lebih Kecil Sama (10 <= 5) = " . ($hasilLebihKecilSama ? "true" : "false") . " <br>";
echo "Hasil Lebih Besar Sama (10 >= 5) = " . ($hasilLebihBesarSama ? "true" : "false") . " <br><br>";

echo "Hasil And (10 && 5)   = " . ($hasilAnd ? "true" : "false") . " <br>";
echo "Hasil Or (10 || 5)    = " . ($hasilOr ? "true" : "false") . " <br>";
echo "Hasil Not A 10 (!10)  = " . ($hasilNotA ? "true" : "false") . " <br>";
echo "Hasil Not B 10 (!5)   = " . ($hasilNotB ? "true" : "false") . " <br><br>";

echo "Hasil Penjumlahan (10 += 5) = {$aPenjumlahan} <br>";
echo "Hasil Pengurangan (10 -= 5) = {$aPengurangan} <br>";
echo "Hasil Perkalian (10 *= 5)   = {$aPerkalian} <br>";
echo "Hasil Pembagian (10 /= 5)   = {$aPembagian} <br>";
echo "Hasil Modulo (10 %= 5)      = {$aModulo} <br><br>";

echo "Hasil Identik (10 === 5)         = " . ($hasilIdentik ? "true" : "false") . " <br>";
echo "Hasil Tidak Identik (10 !== 5)   = " . ($hasilTidakIdentik ? "true" : "false") . " <br>";
?>