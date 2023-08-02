<?php

/*
 * Operador      Descrição
 *    &&             E
 *    ||             Ou
 *    !              Não
 */

$media = 7;
$frequencia = 75;

$media_aluno = 6;
$frequencia_aluno = 50;

//Neste caso ele só será aprovado se tiver média e frequência acima do desejado
/*if($media_aluno >= $media && $frequencia_aluno >= $frequencia) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}*/

//Neste caso ele precisa de apenas um acima do desejado. Média ou frequência
/*if($media_aluno >= $media || $frequencia_aluno >= $frequencia) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}*/

$chovendo = true;

if(!$chovendo) {
    echo "Vou ficar em casa!";
} else {
    echo "Vou pra piscina";
}
