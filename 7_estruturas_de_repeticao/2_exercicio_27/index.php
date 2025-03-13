<?php

    $array = [8, "Ariane", true, 10.1, "Silva", 25, "verdade", "10", "testando", "Decimo valor"];

    $a = 0;
    // ou entao $a = count($array);
    // dai $y = 0

    while ($a <= 10) {
        if (is_string($array[$a])) {
            echo $array[$a];
            echo "<br>";
        }
        $a++;
    }