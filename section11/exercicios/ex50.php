<?php 

    $dados = [
        'nome' => 'Davi',
        'idade' => 21,
        'altura' => 1.89,
        // 'estudante' => true
    ];

    
    $pessoas = [
        'Davi' => 21,
        'Maria Eduarda' => 23
    ];

?>

<table>
     <tr> <!--tr = table row -->
        <th>Nome</th><!--th = table heading -->
        <th>Idade</th>
    </tr>

    
    <?php foreach($dados as $key => $value): ?> 
        <tr>
            <td><?= $key;?></td>  <!--td = table data -->
            <td><?= $value;?></td>
        </tr>    
    <?php endforeach; ?>
    
</table>

<table>
     <tr> <!--tr = table row -->
        <th>Nome</th><!--th = table heading -->
        <th>Idade</th>
    </tr>

    
    <?php foreach($pessoas as $key => $value): ?> 
        <tr>
            <td><?= $key;?></td>  <!--td = table data -->
            <td><?= $value;?></td>
        </tr>    
    <?php endforeach; ?>
    
</table>
