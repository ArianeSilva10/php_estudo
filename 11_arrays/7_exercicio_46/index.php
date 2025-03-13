<?php

    $array = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [6, 7, 8, 10]
    ];

    for ($i=0; $i < count($array); $i++) { 
        for ($j=0; $j < count($array[$i]); $j++) { 
            echo $array[$i][$j] . "      =>   linha = $i, coluna = $j <br>" ;
        }

        if ($i != count($array) - 1) {
            echo "################## MUDANDO DE ARRAY ############### <br>";
        }

    }

// 7_exercicio_46