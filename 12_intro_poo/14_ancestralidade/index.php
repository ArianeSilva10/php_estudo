<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;

    $turca = new Animal;

    if ($marcos instanceof Humano) {
        echo "Marcos é um Humano <br>";
    }else{
        echo "Marcos não é um humano <br>";
    }

    if ($turca instanceof Humano) {
        echo "Turca é um Humano <br>";
    }else{
        echo "Turca não é um Humano <br>";
    }

    $pedro = new Professor;

    if ($pedro instanceof Humano) {
        echo "Marcos é um Humano <br>";
    }else{
        echo "Marcos não é um humano <br>";
    }

    if ($pedro instanceof Professor) {
        echo "Pedro é um Professor <br>";
    }else{
        echo "Pedro não é um Professor <br>";
    }

    if ($turca instanceof Professor) {
        echo "Turca é um Professor <br>";
    }else{
        echo "Turca não é um Professor <br>";
    }