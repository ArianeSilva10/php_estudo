<?php

    $pessoa = ["Ariane", 20, "Programadora", "preto"];

    print_r($pessoa);
    echo '<br>';

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

    echo "$nome <br>";

    echo "$idade  <br>";

    echo $profissao . "<br>";

    echo $corDosOlhos . "<br>";


// 8_funcao_list