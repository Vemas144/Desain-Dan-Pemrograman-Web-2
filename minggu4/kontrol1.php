<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

$nilaiTerabaikan = array_slice($nilaiSiswa, 2, 6);

$totalNilai = array_sum($nilaiTerabaikan);

echo "Total Nilai: $totalNilai";
?>