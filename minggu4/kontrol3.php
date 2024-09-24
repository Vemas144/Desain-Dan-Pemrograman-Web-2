<?php

$poin =450;

if ($poin > 500) {
    $hadiahTambahan = "IYA";
}else {
    $hadiahTambahan = "TIDAK";
}

echo "Total skor pemain adalah: $poin <br>";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>