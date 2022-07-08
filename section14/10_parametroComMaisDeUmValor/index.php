<?php 

// Os inputs de checkbox podem conter mais de um valor. Para receber todos eles no Backende, precisamos adicionar uma sintaxe de array. Assim receberemos todos os inputs marcados. 

//name='caracteristicas[]'

if(isset($_POST['caracteristicas'])){
        
    $carac = $_POST['caracteristicas'];
    print_r($carac);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action='index.php' method="POST">

         <div>
            <input type="checkbox" name="caracteristicas[]" value="alto"> Alto
        </div>   

        <div>
            <input type="checkbox" name="caracteristicas[]" value="narigudo"> Narigudo
        </div> 

        <div>
            <input type="checkbox" name="caracteristicas[]" value="calvo"> Calvo
        </div> 
        <br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>