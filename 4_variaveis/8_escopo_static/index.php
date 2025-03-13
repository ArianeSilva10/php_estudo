<?php

    function teste(){
        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste(); // não muda
    teste();
    teste();

    function testeStatic(){
        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    testeStatic(); // aqui muda a cada chamada da função
    testeStatic(); // é tipo um define
    testeStatic();