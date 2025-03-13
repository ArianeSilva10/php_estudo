<?php

    $str = "O rato roeu a roupa do rei de Roma";
    $countA = 0;

    for ($i=0; $i < strlen($str); $i++) { 
        if ($str[$i] == "a") {
            $countA++;
        }
    }

    echo $countA . "<br>";