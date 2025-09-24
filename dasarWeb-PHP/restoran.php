<?php
echo "<h2>Menghitung Persentase Kursi Kosong di Restoran</h2>";

$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi di restoran: <strong>{$totalKursi}</strong><br>";
echo "Jumlah kursi yang ditempati: <strong>{$kursiDitempati}</strong><br>";
echo "Jumlah kursi yang masih kosong: <strong>{$kursiKosong}</strong><br>";
echo "<hr>";
echo "Jadi, persentase kursi yang masih kosong di restoran tersebut adalah: <strong>" . round($persentaseKosong, 2) . "%</strong>";
?>