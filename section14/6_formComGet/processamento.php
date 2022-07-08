<?php 


// Precisa criar um formulário e definir o método como get, e também o arquivo ou rota que vamos acessar em action. 

// No lado do servidor vamos acessar a variável $_GET que contém os parâmetros enviados para o servidor

// Faremos o processamento e retornamos algo para o usuário



    // print_r($_GET);
    $nome = $_GET['nome']; #fica ligado que isso aqui é um array então tem que estar entre colchetes.
    
    $idade = $_GET['idade'];

    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
    }else{
        $nome = '';
    }

//sintaxe = se estiver setado, a chave recebe o valor da página. Se não estiver setado a variável recebe um valor 'Padrão' pra ser exibido no lugar

    if(isset($_GET['idade'])){
        $idade = $_GET['idade'];
    }else{
        $idade = '';
    }

//ESSA FUNÇÃO isset()TAMBÉM SERVE PRA VER SE UMA VARIÁVEL ESTÁ DECLARADA EM ALGUM PONTO DO CÓDIGO.



// se a gente altera a url automaticamente a gente altera o valor do GET. Isso acontece pq nesse tipo de requisição o parâmetro da função é contado pela URL. Tudo depois da ? é um parâmetro
?>

<h1>O seu nome é: <?= $nome ?></h1>
<h1>A sua idade é: <?= $idade ?> anos</h1>