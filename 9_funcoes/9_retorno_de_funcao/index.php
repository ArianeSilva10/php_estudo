<?php

    function soma ($n1, $n2){
        return $n1 + $n2 . "<br>";
    }

    echo soma(4, 4);

    $x = soma(2, 4);

    echo $x;

    $y = soma($x, 19);

    echo $y;

    function testeRetorno(){
        return "Testando";
    }

    $z = testeRetorno();

    echo $z . "<br>";