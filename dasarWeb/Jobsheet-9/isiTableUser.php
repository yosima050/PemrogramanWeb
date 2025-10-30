<?php
include 'koneksi.php'; 

$id = 1;
$username = 'admin';
$password = md5('123');

$sql = "INSERT INTO user (id, username, password) 
        VALUES ($id, '$username', '$password')";

if (mysqli_query($connect, $sql)) {
    echo "Data user 'admin' berhasil ditambahkan.";
} else {
    echo "Error insert: " . mysqli_error($connect);
}
?>