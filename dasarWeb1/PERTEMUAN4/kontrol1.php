<?php 
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

    sort($nilaiSiswa);

    $nilaiYangDigunakan = [];

    for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
        $nilaiYangDigunakan[] = $nilaiSiswa[$i];
    }

    $totalNilai = array_sum($nilaiYangDigunakan);

 
    $rataRata = $totalNilai / count($nilaiYangDigunakan);

    echo "Total nilai : $totalNilai <br>";
    echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan terendah: " 
    . number_format($rataRata, 2) . "<br>";
?>
