<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari {$a} dan {$b} adalah: ";
echo "<br><br>";
echo "Hasil Tambah  : {$hasilTambah} <br>";
echo "Hasil Kurang  : {$hasilKurang} <br>";
echo "Hasil Kali    : {$hasilKali} <br>";
echo "Hasil Bagi    : {$hasilBagi} <br>";
echo "Sisa Bagi     : {$sisaBagi} <br>";
echo "pangkat       : {$pangkat} <br>"; 
echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br>";
echo "Hasil Sama  :" . var_export($hasilTambah, true) .  "<br>";
echo "Hasil Tidak Sama  :" . var_export($hasilTidakSama, true) .  "<br>";
echo "Hasil Lebih Kecil   :" . var_export($hasilLebihKecil, true)  . "<br>";
echo "Hasil Lebih Besar    :" . var_export($hasilLebihBesar, true) . "<br>";
echo "Hasil Lebih Kecil Sama    :" . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Hasil Lebih Besar Sama    :" . var_export($hasilLebihBesarSama, true) . "<br>";
echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And :" . var_export($hasilAnd, true) . "<br>";
echo "Hasil Or :" . var_export($hasilOr, true) . "<br>";
echo "Hasil Not A :" . var_export($hasilNotA, true) . "<br>";
echo "Hasil Not B :" . var_export($hasilNotB, true) . "<br>";
echo "<br><br>";

$a += $b;
echo "a += b : " . $a . "<br>";
$a -= $b;
echo "a -= b : " . $a . "<br>";
$a *= $b;
echo "a *= b : " . $a . "<br>";
$a /= $b;
echo "a /= b : " . $a . "<br>";
$a %= $b;
echo "a %= b : " . $a . "<br>";
echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik :" . var_export($hasilIdentik, true) . "<br>";
echo "Hasil Tidak Identik :" . var_export($hasilTidakIdentik, true) . "<br>";
?>