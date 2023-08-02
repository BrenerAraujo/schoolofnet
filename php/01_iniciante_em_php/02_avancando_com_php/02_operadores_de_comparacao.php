<?php

/*
 * Operador     Nome        Exemplo                      Resultado
 *    ==        Igual       $a == $b         Verdadeiro se variável $a é igual a variável $b
 *    !=      Diferente     $a != $b         Verdadeiro se variável $a é diferente da variável $b
 *    >         Maior       $a > $b          Verdadeiro se variável $a é maior que variável $b
 *    >=   Maior ou igual   $a >= $b         Verdadeiro se variável $a é maior ou igual a variável $b
 *    <         Menor       $a < $b          Verdadeiro se variável $a é menor que variável $b
 *    <=   Menor ou igual   $a <= $b         Verdadeiro se variável $a é menor ou igual a variável $b
 */

$a = 10;
$b = 8;

/*if($a != $b) {
    echo "A é diferente de B";
} else {
    echo "A é igual a B";
}*/

if($a >= $b) {
    echo "A é maior ou igual a B";
} else {
    echo "A é menor que B";
}