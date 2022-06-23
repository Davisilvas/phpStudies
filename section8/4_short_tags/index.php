<?php 

// uma forma de adicionar php a uma página sem abrir e fechar tag normalmente como fazermos. Basta abrir e fechar assim <? ? > (sem esse espaço). mas isso é desencorajado visto que é uma diferença minima, também que não é todo servidor que aceita isso e que também pode significar um retrabalho enorme no futuro. 


echo 'php da forma normal <br>';
?>

<? 
    echo 'testando esser treco de short tag';
?>