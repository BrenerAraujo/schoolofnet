<?php

session_start();

$_SESSION['usuario'] = 'asd';
$_SESSION['ultimo-acesso'] = '12-12-2012';
$_SESSION['id-user'] = 4;

var_dump($_SESSION);