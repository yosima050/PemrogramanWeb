<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = array();

    if (empty($nama)) {
        $errors['nama'] = "Nama harus diisi!";
    }

    if (empty($email)) {
        $errors['email'] = "Email harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Format email tidak valid!";
    }

    if (empty($password)) {
    $errors['password'] = "Password harus diisi!";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password minimal 8 karakter!";
    }

    
    if (!empty($errors)) {
        echo "<p style='color:red;'>Validasi Gagal! Ditemukan kesalahan:</p>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>