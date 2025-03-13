<?php

    function greaterThan7($array){
        static $newArray = [];

        foreach ($array as $number) {
            if ($number > 7) {
                array_push($newArray, $number);
            }
        }
        return $newArray;
    }

    $testArray = [1, 3, 6, 8, 90, 2, 10, 55, 3, 0];

    $test = greaterThan7($testArray);

    print_r($test);
    echo "<br>";