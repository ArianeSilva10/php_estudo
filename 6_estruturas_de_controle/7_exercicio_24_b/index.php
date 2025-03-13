<?php

    $peso1 = 120;
    $peso2 = 80;
    $peso3 = 34;
    $peso4 = 10;
    
    function estudoPeso($peso){
        $pesoLimite = 80;
        if ($peso > $pesoLimite) {
            echo "está pesado demais : $peso <br> ";   
        }
        else {
            echo "Peso dentro do limite <br>";
        }
    }

    estudoPeso($peso1);
    estudoPeso($peso2);
    estudoPeso($peso3);
    estudoPeso($peso4);