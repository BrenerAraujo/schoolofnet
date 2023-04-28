<?php

$contador = 0;
while($contador <= 10) {
    $contador++;

    //Quando o resto da divisão por 2 for diferente de 0 o laço é reiniciado
    if($contador % 2 != 0) {
        continue;
    }

    echo $contador . "<br>";

    //Quando o $contador valer 3 o laço é interrompido
    /*if($contador == 3){
        break;
    }*/
}

echo "<br><br><br><br>";

$numero = 8;
$contador = 1;

while($contador <= 10) {
    echo $contador . " x " . $numero . " = " . ($contador * $numero) . "<br>";

    $contador++;
}