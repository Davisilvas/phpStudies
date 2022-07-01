<?php


    $notas = [
        'Davi' => 10.0,
        'Maria' => 9.6,
        'Luke' => 3.6,
        'Doly' => 7.9,
        'Thor' => 8.5,
        'Tom' => 4.4,
        'Mila' => 9.1
    ];

    arsort($notas);

?>

<ol>
    <?php foreach($notas as $nome => $nota):?>
        <li><?=$nome;?> - <?=$nota?></li>
    <?php endforeach; ?>
</ol>