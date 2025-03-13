<?php

    $array = range(10, 45);

    foreach ($array as $number) {
        if ($number + 6 >= 30) {
            echo "valor muito alto: " . $number + 6 . "<br>";
        }else{
            echo $number + 6 . "<br>";
        }
    }

    // 4_exercicio_45