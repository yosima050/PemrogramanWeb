<!DOCTYPE html>
<html>
<head>
    <title>Input Aman PHP</title>
</head>
<body>
    <h2>Sanitasi Input (htmlspecialchars)</h2>

    <?php
    $input = '';
    $output_aman = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
        $input = $_POST['input'];
        $output_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<h3>Hasil Sanitasi:</h3>";
        echo "Input Asli: " . $input . "<br>";
        echo "Input Aman: " . $output_aman . "<br><br>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input_field">Teks:</label><br>
        <input type="text" id="input_field" name="input" size="50"><br><br>
        <input type="submit" value="Submit Teks">
    </form>

    <hr>
    
    <h2>Validasi Input (filter_var)</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = $_POST['email']; 
        
        echo "<h3>Hasil Validasi:</h3>";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email **'$email'** valid dan aman untuk diproses.";
        } else {
            echo "ERROR: Format email **'$email'** tidak valid.";
        }
        echo "<br><br>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email_field">Masukkan Email (Coba: user@contoh.com atau abc):</label><br>
        <input type="text" id="email_field" name="email" size="50"><br><br>
        <input type="submit" value="Submit Email">
    </form>
</body>
</html>