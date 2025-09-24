<?php
$a = 10;
$b = 5;

echo "<h2>Praktik Operator Aritmatika</h2>";
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Soal 3.1
echo "Hasil Operasi: <br>";
echo "Hasil Penjumlahan (a + b) : {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) : {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b) : {$hasilKali} <br>";
echo "Hasil Pembagian (a / b) : {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) : {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) : {$pangkat} <br>";
echo "Hasil Operasi Perbandingan: <br>";

echo "<br><h2>Praktik Operator Perbandingan</h2>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Soal 3.2
echo "Apakah a == b (Sama Dengan)? ";
var_dump($hasilSama);
echo "<br>";

echo "Apakah a != b (Tidak Sama Dengan)? ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Apakah a < b (Lebih Kecil)? ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Apakah a > b (Lebih Besar)? ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Apakah a <= b (Lebih Kecil Sama Dengan)? ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Apakah a >= b (Lebih Besar Sama Dengan)? ";
var_dump($hasilLebihBesarSama);
echo "<br>";

echo "<br><h2>Praktik Operator Logika</h2>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Soal 3.3
echo "Hasil Operasi Logika: <br>";
echo "Hasil dari a && b (AND): ";
var_dump($hasilAnd);
echo "<br>";

echo "Hasil dari a || b (OR): ";
var_dump($hasilOr);
echo "<br>";

echo "Hasil dari !a (NOT A): ";
var_dump($hasilNotA);
echo "<br>";

echo "Hasil dari !b (NOT B): ";
var_dump($hasilNotB);
echo "<br>";

// Soal 3.4
echo "<br><h2>Praktik Operator Penugasan</h2>";
$a += $b;
echo "Hasil dari a += b : {$a} <br>";
$a -= $b;
echo "Hasil dari a -= b : {$a} <br>";
$a *= $b;
echo "Hasil dari a *= b : {$a} <br>";
$a /= $b;
echo "Hasil dari a /= b : {$a} <br>";
$a %= $b;
echo "Hasil dari a %= b : {$a} <br>";

// Soal 3.5
echo "<br><h2>Praktik Operator Identitas</h2>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah a === b (Identik)? ";
var_dump($hasilIdentik);
echo "<br>";
echo "Apakah a !== b (Tidak Identik)? ";
var_dump($hasilTidakIdentik);

?>