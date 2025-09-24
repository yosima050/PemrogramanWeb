<?php
echo "<h2>Menghitung Harga Setelah Diskon</h2>";

$hargaProduk = 120000;
$batasDiskon = 100000;
$persenDiskon = 20;

$besarDiskon = 0;

if ($hargaProduk > $batasDiskon) {
    $besarDiskon = $hargaProduk * ($persenDiskon / 100);
}

$hargaSetelahDiskon = $hargaProduk - $besarDiskon;

echo "Harga awal produk: <strong>Rp " . number_format($hargaProduk, 0, ',', '.') . "</strong><br>";
echo "Syarat mendapatkan diskon: Pembelian di atas <strong>Rp " . number_format($batasDiskon, 0, ',', '.') . "</strong><br>";
echo "Besar diskon yang didapat ({$persenDiskon}%): <strong>Rp " . number_format($besarDiskon, 0, ',', '.') . "</strong><br>";
echo "<hr>";
echo "Jadi, harga yang harus dibayar pelanggan adalah: <strong>Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "</strong>";
?>