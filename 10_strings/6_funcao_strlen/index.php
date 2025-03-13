<?php

    $str1 = "esta string é muito grande <br>";
    $str2 = "Esta não <br>";

    echo strlen($str1) .  "<br>";
    echo strlen($str2) .  "<br>";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if ($len1 > $len2) {
        echo "A string 1 é maior que a string 2 <br>";
    }else{
        echo "A string 2 é maior que a string 1 <br>";
    }