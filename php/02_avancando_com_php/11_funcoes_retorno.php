<?php

function soma($a, $b) {
    return $a + $b;
}

//Passando um valor padrão para um parâmetro
//Caso na chamada da função eu coloque outro valor para a variável, ela será substituída, porém caso eu não passe, ela usará este valor
function soma1($a, $b = 5) {
    return $a + $b;
}

$resultado = soma(2, 3);
$resultado1 = soma1(2);

echo $resultado1;