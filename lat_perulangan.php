<?php
    // Perulangan while
    $i = 1;

    while ($i < 5) {
        echo $i . "<br>";
        $i = $i + 1;
    }

    echo "<hr>";

    // Perulangan for
    for ($i = 1; $i < 5; $i++) {
        echo $i . "<br>";
    }

    echo "<hr>";

    // Perulangan foreach
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo $value . "<br>";
    }

    echo "<hr>";

    // Perulangan for untuk membaca array
    for ($i = 0; $i <= 3; $i++) {
        echo $colors[$i] . "<br>";
    }
?>
