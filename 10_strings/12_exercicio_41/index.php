<?php

    $str = "este item está em promoção";

    $str = explode(" ", $str);

    foreach ($str as &$palavra) {
        if ($palavra == "promoção") {
            $palavra = strtoupper($palavra);
        }
    }

    $str = implode(" ", $str);

    echo $str;