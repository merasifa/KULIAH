<?php

$siswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach($siswa as $nilaiMtk){
    $totalNilai += $nilaiMtk[1];
}

$rata = $totalNilai / count($siswa);

echo "Rata-rata kelas: " . $rata . "<br><br>";

foreach($siswa as $siswaData){
    if($siswaData[1] > $rata){
        echo "Siswa {$siswaData[0]} mendapat nilai {$siswaData[1]} <br>";
    }
}
?>
