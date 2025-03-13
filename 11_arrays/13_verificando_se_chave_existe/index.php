<?php

    $arr = [
        'nome' => 'Ariane',
        'idade' => 20
    ];

    if (array_key_exists("nome", $arr)) {
        echo "A chave existe! <br>";
    }else{
        echo "A chave não existe! <br>";
    }


    if (array_key_exists("profissão", $arr)) {
        echo "A chave existe! <br>";
    }else{
        echo "A chave não existe! <br>";
    }

    if (isset($arr['nome'])) {
        echo "A chave existe! <br>";
    }else{
        echo "A chave não existe! <br>";
    }

    if (isset($arr['teste'])) {
        echo "A chave existe! <br>";
    }else{
        echo "A chave não existe! <br>";
    }

    $x = 10;

    if (isset($x)) {
        echo "A chave existe! <br>";
    }else{
        echo "A chave não existe! <br>";
    }