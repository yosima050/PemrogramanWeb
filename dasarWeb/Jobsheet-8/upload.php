<?php
if(isset($_POST["submit"])){
    $targetdir = "uploads/";
    $filename = basename($_FILES["myfile"]["name"]);
    $targetfile = $targetdir . $filename;
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
            echo "File berhasil diunggah.";

            $urlSafeName = rawurlencode($filename);
            $imgSrc = $targetdir . $urlSafeName;
            $alt = htmlspecialchars($filename, ENT_QUOTES);
            echo "<div style=\"margin-top:10px;\">";
            echo "<p>Thumbnail:</p>";
            echo "<img src=\"{$imgSrc}\" alt=\"{$alt}\" width=\"200\" style=\"height:auto; border:1px solid #ccc;\" >";
            echo "</div>";
        }
        else{
            echo "Gagal mengunggah file.";
        }
    }
    else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>