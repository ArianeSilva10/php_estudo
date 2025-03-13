<?php

    $Tipo = "cachorro";
    $patas = 4;
    $olhos = 2;
    $orelhas = 2;
    $raça = "vira-lata";

    $animal = compact("Tipo", "patas", "olhos", "orelhas", "raça");

    foreach($animal as $var){
        echo $var . "<br>";
    }