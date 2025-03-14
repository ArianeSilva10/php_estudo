<?php

    class Car {
        public $color;
        public $transmission;
        public $rim; // aro
        public $tire; //pneu
        public $velocidade_maxima = 100;

        function setVelocidadeMaxima($velocidadeAlterada){
            $this->velocidade_maxima = $velocidadeAlterada;
        }

        function getVelocidadeMaxima(){
            echo "O carro da cor $this->color possui velocidade máxima de $this->velocidade_maxima km/h <br>" ;
        }
    }

    $bmw = new Car;
    $bmw->color = "branco";

    $bmw->getVelocidadeMaxima();

    $creta = new Car;
    $creta->color = "preto";
    $creta->setVelocidadeMaxima(200);
    $creta->getVelocidadeMaxima();

