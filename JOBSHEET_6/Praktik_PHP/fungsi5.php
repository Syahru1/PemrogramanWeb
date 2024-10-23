<?php
//membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan ($nama, $salam="Asssalamualaikum") {
        echo $salam.",";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
    }
    //memanggil fungsi perkenalan
    perkenalan ("Syahrul");
?>