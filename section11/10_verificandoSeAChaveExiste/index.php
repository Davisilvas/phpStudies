<?php 

// Com a função array_key_exists podemos verificar se há um valore em uma respectiva key de um array - É MAIS USADO EM ARRAY ASSOCIATIVO
//  Checagem útil em if
// array_key_exists("nome", $arr)
// Outra função que podemos utilizar para este fim é a isset 

    $pessoa = [
        'nome' => 'Davi',
        'idade' => 21,
        'profissao' => 'Desenvolvedor'
    ];

    if(array_key_exists('nome', $pessoa)){
        echo $pessoa['nome'] . '<br>';
    }else{
        echo "a chave não existe . <br>";
    }

    if(array_key_exists('instrumento', $pessoa)){
        echo $pessoa['nome'] . '<br>';
    }else{
        echo "a chave não existe . <br>";
    }

    if(isset($pessoa['nome'])){
        echo "A chave existe <br>";
    } //ESSA FUNÇÃO TAMBÉM SERVE PRA VER SE UMA VARIÁVEL ESTÁ DECLARADA EM ALGUM PONTO DO CÓDIGO.
