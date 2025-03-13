<?php

    function arrayItens($itens){
        return implode(", ", $itens);
    }

    $test = ["banana", "açúcar", "café", "água", "pão"];
    echo arrayItens($test) . "<br>";