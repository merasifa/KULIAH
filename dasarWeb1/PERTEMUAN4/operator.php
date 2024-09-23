<?php 
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Penjumlahan: $hasilTambah <br>";
    echo "Hasil Pengurangan: $hasilKurang <br>";
    echo "Hasil Perkalian: $hasilKali <br>";
    echo "Hasil Pembagian: $hasilBagi <br>";
    echo "Sisa Bagi: $sisaBagi <br>";
    echo "Hasil Pangkat: $pangkat <br>";

    echo "<br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil == :  $hasilSama <br>";
    echo "Hasil != :  $hasilTidakSama<br>";
    echo "Hasil <  :  $hasilLebihKecil<br>";
    echo "Hasil >  :  $hasilLebihBesar<br>";
    echo "Hasil <= :  $hasilLebihKecilSama<br>";
    echo "Hasil >= :  $hasilLebihBesarSama<br>";

    echo"<br><br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil AND  : $hasilAnd <br>";
    echo "Hasil OR   : $hasilOr <br>";
    echo "Hasil NOT A: $hasilNotA <br>";
    echo "Hasil NOT B: $hasilNotB <br>";

    echo"<br><br>";

    $a += $b;
    echo "Hasil A += B: $a <br>";

    $a -= $b;
    echo "Hasil A -= B: $a <br>";

    $a *= $b;
    echo "Hasil A *= B: $a <br>";

    $a /= $b;
    echo "Hasil A /= B: $a <br>";

    $a %= $b;
    echo "Hasil A %= B: $a <br>";

    echo"<br><br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil Identik: $hasilIdentik <br>";
    echo "Kurang identik: $hasilTidakIdentik <br>";
?>