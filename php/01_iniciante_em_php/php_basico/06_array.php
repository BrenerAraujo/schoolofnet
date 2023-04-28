<?php

$array = array(40, 200, 100, 150, 'School of Net', true);
//Declaração flexível
$array = array(40,
    200,
    100,
    150,
    'School of Net',
    true
);

//Não dá certo
//echo $array;

echo $array[0];
echo "\n";
echo $array[1];
echo "\n";
echo array(40, 200, 100, 150, "School of Net", true)[4];

//Melhor maneira de utilizar
$array1 = [
    45,
    210,
    110,
    160,
    'School of Net11111',
    false
];