<?php

    class Humano {

        public function falar(){
            echo "Olá";
        }

    }

    $ariane = new Humano;

    $teste = 10;

    if (is_object($ariane)) {
        echo "E um objeto <br>";
    }else {
        echo "Não é um objeto <br>";
    }

    if (is_object($teste)) {
        echo "E um objeto <br>";
    }else {
        echo "Não é um objeto <br>";
    }

    echo get_class($ariane) . "<br>";

    if (method_exists($ariane, "falar")) {
        echo "Método existe <br>";
    }else {
        echo "Método não existe <br>";
    }

    if (method_exists($ariane, "asd")) {
        echo "Método existe <br>";
    }else {
        echo "Método não existe <br>";
    }