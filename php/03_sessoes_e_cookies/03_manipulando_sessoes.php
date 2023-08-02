<?php

session_start();

$_SESSION['usuario'] = [
    'name' => 'Brener',
    'idade' => 25,
    'ativo' => true,
    'rate' => 4.3
];

var_dump($_SESSION);

//Apagar dados da variável session
unset($_SESSION['usuario']);