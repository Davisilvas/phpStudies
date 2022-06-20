<?php 

$limite = 40;
$velo1 = 35;
$velo2 = 40;
$velo3 = 60;

if($limite > $velo1){
    echo "O motorista está na velocidade correta<br>";
}else if($limite == $velo1){
    echo "O motorista deve tomar cuidado<br>";
}else{
    echo "O motorista está sendo multado por excesso de velocidade<br>";
}

    echo "<br><br><br>";
    

if($limite > $velo2){
    echo "O motorista está na velocidade correta<br>";
}else if($limite == $velo2){
    echo "O motorista deve tomar cuidado<br>";
}else{
    echo "O motorista está sendo multado por excesso de velocidade<br>";
}

echo "<br><br><br>";

if($limite > $velo3){
    echo "O motorista está na velocidade correta<br>";
}else if($limite == $velo3){
    echo "O motorista deve tomar cuidado<br>";
}else{
    echo "O motorista está sendo multado por excesso de velocidade<br>";
}

?>