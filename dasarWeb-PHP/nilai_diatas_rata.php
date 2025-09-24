<?php
echo "<h2>Daftar Siswa dengan Nilai di Atas Rata-rata</h2>";
$dataSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$jumlahSiswa = count($dataSiswa);

$rataRata = $totalNilai / $jumlahSiswa;

echo "Nilai rata-rata kelas adalah: <strong>" . number_format($rataRata, 2) . "</strong><br>";
echo "<hr>";
echo "<strong>Daftar siswa dengan nilai di atas rata-rata:</strong><br>";

foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
?>