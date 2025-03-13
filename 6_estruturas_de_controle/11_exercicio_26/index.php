<?php

    $velocidade1 = 10;
    $velocidade2 = 40;
    $velocidade3 = 110;

    function testeVelocidade($velocidade){
        if ($velocidade < 40) {
            echo "velocidade: $velocidade,O motorista está na velocidade correta <br>";
        }
        elseif ($velocidade == 40) {
            echo "velocidade: $velocidade, motorista tome cuidado <br>";
        }
        else {
            echo "velocidade: $velocidade, <br> ################ MULTADO ########################<br>";
        }
    }

    testeVelocidade($velocidade1);
    testeVelocidade($velocidade2);
    testeVelocidade($velocidade3);