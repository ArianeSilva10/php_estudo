<?php

    $contador = 4;

    while($contador < 30){
        echo "contador = $contador <br>";
        
        if ($contador === 24) {
            echo "parando while <br>";
            break;
        }
        $contador += 2;
    }