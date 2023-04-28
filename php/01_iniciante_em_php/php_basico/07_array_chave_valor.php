<?php
//Quando as chaves de um array não são declaradas, elas assumem os valores de 0, 1, 2, 3, 4, 5 e assim por diante, como no exemplo
$array = [
    0 => 40,
    1 => 200,
    2 => 100,
    3 => 150,
    4 => "School of Net",
    5 => true
];

//Porém eu posso dar qualquer valor como chave de um array, por exemplo:
$array1 = [
    'luiz' => 'teste',
    3000 => 40
];

//Podemos também definir alguns valores e outros não. Por exemplo:
$array2 = [
    'luiz' => 40,
    200,
    100,
    3000 => 150,
    "School of Net",
    true
];

//Função nativa do PHP para mostrar todos os valores e chaves de um array
var_dump($array);
var_dump($array1);
var_dump($array2);