<?php
$harga = 120000;

$diskon = 0;
if ($harga > 100000) {
    $diskon = 0.2 * $harga;
}

$hargaSetelahDiskon = $harga - $diskon;
echo "Harga: Rp " . $harga . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Harga Setelah Diskon: Rp " . $hargaSetelahDiskon . "<br>";