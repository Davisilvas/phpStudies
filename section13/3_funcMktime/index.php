<?php 

// a função recebe em seus parâmetros hora, minuto, segundo, mês, dia e ano. Assim podemos criar uma data a partir dessa informação.

// ex -> $date = mktime(01,18,00,03,12,2000); echo date('d/m/y', $date);

// a gente cria essa data específica e aí a gente coloca em date() pra ele retornar essa data formatada.

    $birthday = mktime(10,43,00,03,27,01);
    $dateOfBirthday = date('d - m - Y', $birthday);

    echo $dateOfBirthday . '<br>';  #fiz pra retornar o dia do meu aniversário formatado. 