<?php

    function alteraDados($nome, $idade){
        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("Ariane", 20);
    print_r($dados);
    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1] <br>";