<?php

    function verifyNumber($number){
        if ($number % 2 == 0) {
            echo "$number é um valor par <br>";
        }
        else{
            echo "$number é um valor ímpar <br>";
        }
    }

    verifyNumber(2);
    verifyNumber(9);
    verifyNumber(50);