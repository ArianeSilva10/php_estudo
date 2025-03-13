<?php

    $a = 10;
    $b = 15;

    function testeEscopo(){
        $a = 5;

        global $b;

        static $c = 0;
        /*
        Uma variável estática é declarada dentro de uma função ou método usando a palavra-chave static. Ela mantém seu valor entre chamadas sucessivas da função, mas só é acessível dentro da função onde foi declarada.
        */

        $a++;

        $b++;

        $c++;
        echo "ESCOPO LOCAL DE A: $a . <br>";
        echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";

        echo "ESCOPO STATIC DE C: $c . <br>";
    }

    echo "ESCOPO GLOBAL DE A: $a . <br>";
    echo "ESCOPO GLOBAL DE B: $b . <br>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B 2: $b <br>";

    testeEscopo();
