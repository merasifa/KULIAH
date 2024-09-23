<?php 
    $totalKursi = 45;
    $terisi = 28;
    $kosong = $totalKursi - $terisi;
    $persen = ($kosong / $totalKursi) * 100;

    echo"Total Kursi            : $totalKursi <br>";
    echo"Kursi Terisi           : $terisi <br>";
    echo"Kursi Tersedia         : $kosong <br>";
    echo"Kursi Tersedia dlm (%) : $persen%";
?>