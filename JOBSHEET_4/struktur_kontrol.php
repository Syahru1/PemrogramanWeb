<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br>";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer. <br>" ;

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "\nJumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa); // Urutkan nilai dari yang terkecil ke terbesar
$nilaiTerpakai = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4); // Hapus dua nilai tertinggi dan dua nilai terendah
$totalNilai = array_sum($nilaiTerpakai); // Hitung total nilai yang tersisa
$rataRata = $totalNilai / count($nilaiTerpakai);// Hitung rata-rata nilai setelah mengabaikan nilai tertinggi dan terendah

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}
$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "Harga sebelum diskon: Rp $hargaProduk <br>";
echo "Diskon: Rp $diskon <br>";
echo "Harga yang harus dibayar setelah diskon: Rp $hargaSetelahDiskon <br>";


$poinPemain = 520;

echo "Total skor pemain adalah: $poinPemain <br>";

if ($poinPemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>