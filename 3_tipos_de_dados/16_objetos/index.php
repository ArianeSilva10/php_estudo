<?php

    class Pessoa{
        function falar(){
            echo "Olá pessoal! <br>";
        }
    }

    $ariane = new Pessoa();
    $ariane->nome = "Ariane";
    echo $ariane->nome;
    echo "<br>";

    $ariane->falar();