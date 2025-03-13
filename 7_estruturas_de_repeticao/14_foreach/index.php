<?php

    $nomes = ["Ariane", "Eliane", "Pedro", "Maria"];

    $a = 10;

    foreach ($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>";
        if ($nome == "Ariane") {
            echo "Opa $a <br>";
        }
    }