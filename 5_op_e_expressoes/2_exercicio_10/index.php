<?php

    $a = 50;
    $b = 44;
    $c = 87;
    $d = 26;

    $resultado = $a - $b / $c * $d;

    echo "primeiro resultado($a - $b / $c * $d): <br> $resultado <br> ";

    $resultado = ($a - $b) / $c *$d;
    echo "segundo resultado(($a - $b) / $c *$d):<br>  $resultado <br> ";

    $resultado = $a - ($b / $c) * $d;
    echo "terceiro resultado ($a - ($b / $c) * $d): <br> $resultado <br> ";

    $resultado = $a - $b / ($c * $d);
    echo "quarto resultado ($a - $b / ($c * $d)):<br>  $resultado <br> ";

    ?>