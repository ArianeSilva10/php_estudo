<?php

    class Humano {

        public $idade;
        public $nome;

        public function falar(){
            echo "Olá! eu sou $this->nome <br>";
        }

    }

    class Professor extends Humano {
        public $area;
        public $nivel;

        private function nota(){
            echo "Sua nota é 9.0 <br>";
        }

        public function getNota(){
            $this->nota();
        }
    }

    $maria = new Professor;

    $maria->idade = 20;
    $maria->nome = "Maria";
    $maria->falar();

    $maria->area = "Exatas";
    $maria->nivel = "Superior";

    $maria->getNota();