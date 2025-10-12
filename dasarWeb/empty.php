<?php
$myArray = array();

if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

echo "<br><br>";

if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.<br>";
} else {
    echo "Variabel terdefinisi dan tidak kosong.<br>";
}
?>