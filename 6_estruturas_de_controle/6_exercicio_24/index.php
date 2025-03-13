<?php

    function inteiro($var){
        if (is_int($var)) {
            echo $var ." é um inteiro <br> ";
        }
        else {
            echo "$var não é um inteiro <br>";
        }
    }

    $a = "Ariane";
    $b = 87;
    $c = true;

    inteiro($a);
    inteiro($b);
    inteiro($c);