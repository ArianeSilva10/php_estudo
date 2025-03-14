<?php

    class Pessoa {
        public $nome;
        public $idade;

        function andar(){
            echo "A pessoa está andando....  <br>";
        }
    }

    $pessoa1 = new Pessoa;
    $pessoa1->nome = "Ariane";
    $pessoa1->idade = 20;

    $pessoa1->andar();
    echo "$pessoa1->nome,$pessoa1->idade anos <br>" ;


    $pessoa2 = new Pessoa;
    $pessoa2->nome = "João";
    $pessoa2->idade = 29;

    echo "##################################################<br>";
    $pessoa2->andar();
    echo $pessoa2->nome . ", " . $pessoa2->idade . " anos <br>";