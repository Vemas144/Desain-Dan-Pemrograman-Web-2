<?php

$totalKursi = 45;
$kursiTerisi = 28;

$sisaKursi = $totalKursi - $kursiTerisi;
$persentaseSisaKursi = ($sisaKursi / $totalKursi) *100;
echo "Persentase kursi yang kosong adalah : " . $persentaseSisaKursi . "%";
?>