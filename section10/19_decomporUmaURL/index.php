<?php

// função parse_url
// Recebe um Array com todas as partes que a URL tem. protocolo, host, parametro e etc

$u ="https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#content";

$decomp = parse_url($u);
print_r($decomp);
echo '<br>';
echo $decomp["host"] . '<br>';

