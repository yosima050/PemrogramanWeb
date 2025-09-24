<?php
echo "<h2>Menghitung Total Nilai Ujian Setelah Mengabaikan Nilai Ekstrem</h2>";

$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($daftarNilai);

$nilaiYangDigunakan = array_slice($daftarNilai, 2, 6);

$totalNilai = array_sum($nilaiYangDigunakan);

echo "Daftar nilai awal: " . implode(", ", $daftarNilai) . "<br>";
echo "Dua nilai terendah yang diabaikan: {$daftarNilai[0]} dan {$daftarNilai[1]}<br>";
echo "Dua nilai tertinggi yang diabaikan: {$daftarNilai[8]} dan {$daftarNilai[9]}<br>";
echo "Daftar nilai yang digunakan untuk perhitungan: " . implode(", ", $nilaiYangDigunakan) . "<br>";
echo "<hr>";
echo "Jadi, total nilai yang akan digunakan adalah: <strong>{$totalNilai}</strong>";
?>