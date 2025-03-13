<?php

    function sumEvenNumbers($var){
        for ($i = 1; $i <= $var; $i++) {
            static $sum = 0;
             if ($i % 2 === 0) {
                $sum += $i;
             }
        }
        return $sum;
    }

    echo sumEvenNumbers(14);