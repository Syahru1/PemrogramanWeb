<?php
//membuat fungsi
    function perkenalan($nama, $salam) {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>"; 
        echo "Senang berkenalan dengan Anda<br/>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Syahrul", "Hallo");
    
    echo "<hr>";

    $saya = "Gunawan";
    $ucapanSalam = "Selamat pagi";

    //memanggil lagi
    perkenalan($saya, $ucapanSalam);
?>