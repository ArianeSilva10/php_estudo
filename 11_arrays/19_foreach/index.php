<?php

    $ariane = [
        'nome' => 'Ariane',
        'idade' => 20,
        'profissao' => 'Programadora'
    ];

    $alexia = [
        'nome' => 'Alexia',
        'idade' => 25,
        'profissao' => 'Eng. Civil'
    ];

    foreach ($ariane as $carac => $value) {
        echo "$carac => $value <br>";
    }

    foreach ($alexia as $carac => $value) {
        echo "$carac => $value <br>";
    }