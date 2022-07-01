<?php 

// A função in_array verifica se um item passado por parâmetro está no array. Se encontrar o intem ela retorna true, e se não encontrar ela retorna false. => in_array('item', $arr)
//ele acha o valor e não a chave do array em 

    $davi = [
        'nome' => 'Davi',
        'idade' => 21,
        'profissao' => 'Desenvolvedor',
        'futebol' => 'Joga muito'
    ];


    if(in_array('lol', $davi)){
        echo 'Existe o valor lol nesse array <br>';
    }else{
        echo 'Não há o valor lol nesse array <br>';
    }

    if(in_array('Desenvolvedor', $davi)){
        echo 'Existe o valor Desenvolvedor nesse array <br>';
    }else{
        echo 'Não há o valor Desenvolvedor nesse array <br>';
    }