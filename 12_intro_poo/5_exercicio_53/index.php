<?php

    class Cachorro {

        function latir(){
            echo "O cachorro está latindo <br>";
        }

        function andar(){
            echo "O cachorro está andando <br>";
        }
    }

    $bob = new Cachorro;
    $bob->latir();

    $bob->andar();

    $scooby = new Cachorro;

    $scooby->andar();
    $scooby->latir();