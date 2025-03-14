<?php

    class Cachorro {
        public $patas;
        public $raca;
        public $orelhas;

        public function __construct($patas, $raca, $orelhas)
        {
            $this->patas = $patas;
            $this->raca = $raca;
            $this->orelhas = $orelhas;
        }

        public function getPatas(){
            return $this->patas;
        }

        public function getRaca(){
            return $this->raca;
        }

        public function getOrelhas(){
            return $this->orelhas;
        }
    }

    $dog = new Cachorro(4, "Vira-Lara", 2);

    echo $dog->getPatas() . "<br>";

    echo $dog->getRaca() . "<br>";

    echo $dog->getOrelhas() . "<br>";