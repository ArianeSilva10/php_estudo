<?php

    $pessoas = [
        'Ariane' => 20,
        'Alexia' => 25,
        'Pedro' => 24,
        'João' => 43
    ];
    ?>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($pessoas as $nome => $idade): ?>
            <tr>
                <td><?= $nome; ?></td>
                <td><?= $idade; ?></td>
            </tr>

        <?php endforeach;?>
    </table>