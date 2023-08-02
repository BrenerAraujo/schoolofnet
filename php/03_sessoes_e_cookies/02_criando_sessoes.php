<?php

/**
 * Sessões servem para guardar dados do usuário durante uma sessão
 * Nas sessões podemos guardar informações mais valiosas pois o usuário não tem acesso
 */

//Iniciando session
session_start();

//Criando um item na session
$_SESSION['meunome'] = 'Brener';

var_dump($_SESSION);
