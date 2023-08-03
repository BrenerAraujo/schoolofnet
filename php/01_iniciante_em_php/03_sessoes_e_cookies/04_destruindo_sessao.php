<?php

session_start();

//Destruindo a sessão inteira
//session_destroy();

//Destrói apenas um item da sessão
unset($_SESSION['ultimo-acesso']);

var_dump($_SESSION);