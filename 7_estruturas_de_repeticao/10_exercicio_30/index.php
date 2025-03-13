<?php

    $array = [];
    $contador = 0;

    while($contador <= 20){
        $array[$contador] = $contador;
        $contador++;
    }

    print_r($array);
    echo "<br>";

    echo "########################################################################################### <br>";

    for ($i=0; $i <= 20; $i++) { 
        if ($array[$i] % 2 == 0) {
            echo $array[$i] . "<br>";
        }
    }