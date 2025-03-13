<?php

    $teste1 = (int) "testando";
    echo $teste1 . "<br>"; // 0

    $teste1 = (int) 12.9;
    echo $teste1 . "<br>"; // 12

    $teste1 = (int) true;
    echo $teste1 . "<br>"; // 1

    $teste1 = (int) [1, 2, 3];
    echo $teste1 . "<br>"; // 1