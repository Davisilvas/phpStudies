<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="arq.php" method="POST"> 
        <div>
            <input type="text" name="nome" placeholder="preencha seu nome">
        </div>
        <br>

        <div>
            <input type="number" name="idade" placeholder="preencha sua idade">
        </div>
        <br>
 
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
        
        <div>
            <input type="submit" value="Enviar">
        </div>  
    </form>

</body>
</html>