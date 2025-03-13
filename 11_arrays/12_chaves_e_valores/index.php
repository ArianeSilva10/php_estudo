<?php

    $carro = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 4
    ];

    $chaves = array_keys($carro);

    print_r($chaves); // irá imprimir só um array com as chaves

    echo "<br>";

    $valores = array_values($carro);

    print_r($valores);
    echo "<br>";

//     12_chaves_e_valores