<?php 

$nome= 'Davi';
$sobrenome = 'Silva';
require_once "back.php";


// essa parada de exibir valor só exibe o valor de UMA variável, o feito na seguinte linha de código foi testado e não deu certo
// <h1><?=$nome; $sobrenome;? ></h1> 
// o que funciona é o seguinte => <h1><?=$nome;? > <?=$sobrenome;? ></h1> 

?>

<h1><?=$nome;?> <?=$sobrenome;?></h1> 
<!-- O feito acima é uma forma de deixa esse h1 dinâmico -->
<!-- A extensão .phtml pode ter problema de configuração no xampp (é o meu caso)-->

<h1>E-comerce de treino!</h1>
<p><?=$nome;?>, veja o nosso catálogo abaixo:</p>

<ul>
    <?php foreach($produtos as $produto): ?>
        <li> <?=$produto;?> </li>        
    <?php endforeach; ?>
</ul>
<!-- acima: impressão dinâmica no PHP -->
