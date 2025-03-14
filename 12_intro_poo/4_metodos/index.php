<?php

    class Pessoa {
        
        function falar(){
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }

    }

    $ariane = new Pessoa;
    $ariane->falar();
    $ariane->falar();

    $joao = new Pessoa;

    $joao->falar();

    $ariane->somar(2, 2);
    $joao->somar(10, 12);