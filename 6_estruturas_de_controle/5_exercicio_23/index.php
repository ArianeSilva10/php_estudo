<?php

    function maiorIdade($idade){
        if ($idade >= 18) {
            echo "É maior de idade : $idade <br>";
        }
        else {
            echo "não é maior de idade: $idade <br>";
        }
    }

    $a = 14;
    $b = 21;
    $c = 18;

    maiorIdade($a);
    maiorIdade($b);
    maiorIdade($c);