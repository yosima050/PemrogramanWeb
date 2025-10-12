<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $selectedBuah = $_POST['buah'];
    
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
    
    $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : 'Tidak Dipilih';
    
    $output = "<h3>Hasil AJAX:</h3>";
    $output .= "Anda memilih buah: " . $selectedBuah . "<br>";
    
    if (!empty($selectedWarna)) {
        $output .= "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        $output .= "Anda tidak memilih warna favorit.<br>";
    }
    
    $output .= "Jenis kelamin Anda: " . $selectedJenisKelamin . "<br>";
    
    echo $output;
} else {
    echo "Metode pengiriman tidak valid.";
}
?>