<?php


    $arr = [
        'Ariane' => 20,
        'Pedro' => 18,
        'Joaquim' => 14,
        'Maria' => 12
    ];

    asort($arr);
    echo "<br>";


    $arr2 = [
        'Ariane' => 12,
        'Pedro' => 44,
        'Joaquim' => 14,
        'Maria' => 32
    ];

    arsort($arr2);
    echo "<br>";

    ksort($arr2);
    echo "<br>";

    krsort($arr2);
    echo "<br>";