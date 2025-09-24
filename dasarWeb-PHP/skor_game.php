<?php
echo "<h2>Pengecekan Hadiah Tambahan Pemain Game</h2>";

$poin = 750;

$statusHadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: <strong>{$poin}</strong><br>";
echo "Apakah pemain mendapatkan hadiah tambahan? <strong>{$statusHadiah}</strong>";

echo "<hr>";

$poin = 400;

$statusHadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: <strong>{$poin}</strong><br>";
echo "Apakah pemain mendapatkan hadiah tambahan? <strong>{$statusHadiah}</strong>";
?>