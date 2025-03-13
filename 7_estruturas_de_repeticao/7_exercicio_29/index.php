<?php

    $array = [0];
    $contador = 0;
    $cont = 0;

    while( $contador < 10){
        $teste = 10 + ($contador * 10);
        
        if ($teste === 30 || $teste === 40) {
            echo "pulando contador = ". $array[$contador] . " <br>";
            $contador ++;
            continue;
        }
        $array[$contador] = $teste;

        $contador ++;
    }

    echo "#################################################################################### <br>";

    print_r($array);
    echo "<br>";