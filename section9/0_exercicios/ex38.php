<?php

    $itens = ['Arroz', 'Macarrão', 'Feijão', 'Mineirinho'];

    function listando($arr){
        $str = "Você comprou os seguintes itens: ";

        for ($i = 0; $i < count($arr); $i++){
            if ($i + 1 == count($arr)){
                $str .= "$arr[$i].";
            }elseif($i + 2 == count($arr)){
                $str .= "$arr[$i] e ";
            }else{
                $str .= "$arr[$i], ";
            }
        }
        return $str;
        // .= atribuição direta de concatenação.
    }


    $compra = listando($itens);
    echo $compra;

