<?php 

//podemos remover as tags de html de uma string com a função strips_tags
//geralmente para salvar dados no banco removemos as tags para salvar o 'texto puro'
$textoComHtml = "<p>Olha o parágrafo ae.</p>
                <div> Agora tem uma div aqui.</div>
                <h1> Agora olha o títuloooo. </h1>";

echo $textoComHtml . '<br>';

$textoPuro = strip_tags($textoComHtml);

echo $textoPuro . '<br>';


//importante para quando a gente recebe o dado poluído com html e a gente quer limpar ele pra salvar no banco.
?>