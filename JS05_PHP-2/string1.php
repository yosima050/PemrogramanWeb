<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptatem reprehenderit nobis veritatis commodi fugiat molestiae
    impedit unde ipsum, voluptatum, corrupti, minus sit excepcturi nostrum
    quisquam? Quos impedit eus nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>