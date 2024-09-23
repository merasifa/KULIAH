<?php

$harga = 120000;
$diskon = 0.2;

if ($harga > 100000) {
    $diskon = $harga * 0.2;
    $hargaAkhir = $harga - $diskon;

    echo"Harga Awal :Rp." . $harga . "<br>";
    echo"Total Diskon :Rp." . $diskon . "<br>";
    echo"Harga Akhir :Rp." . $hargaAkhir . "<br>";
}else{
    echo"Mohon maaf anda tidak mendapatkan diskon. Harga yang harus dibayar: Rp". $harga;
}
?>