<?php

    $classificacao = [
        'João' => 20.4,
        'Ariane' => 50.0,
        'Maria' => 10.2,
        'Clara' => 35.7
    ];

?>


    <ol>
        <?php 
        arsort($classificacao); 
        foreach ($classificacao as $classificado => $point):  
        ?>
        <li><?php echo $classificado . ': ' . $point; ?></li>
        <?php 
        endforeach;
        ?>
    </ol>
