<?php

    $var1 = 88;
    $var2 = "Ariane";
    $var3 = " \n -> quebra de linha**********<br>************<br>";
    $var4 = 24;
    $var5 = 77.12;

    function checarValor($var){
        if (is_int($var) || is_float($var)) {
            $mul = $var * 2;

            if ($mul > 100) {
                echo  "$mul É um número e ele é maior que 100 <br>";
            }
            else {
                echo "$mul É um número mas não é maior q 100 <br>";
            }
        }
        else {
            echo "Não é um valor : $var <br>";
        }
    }

    checarValor($var1);
    checarValor($var2);
    checarValor($var3);
    checarValor($var4);
    checarValor($var5);

