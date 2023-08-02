<?php

/**
 * Cookie é uma informação que fica salva no navegador do usuário
 * Sabendo disso, fica claro que não podemos guardar informações que comprometam a segurança da aplicação
 */

// Criando um cookie, setamos o nome do cookie, valor e o tempo, em segundos, que ele vai existir
setcookie('meunome', 'Brener', time() + (3600 * 24));
//Este método serve também para atualizar os dados do cookie

//Para remover um cookie basta remover os segundos, colocando tempo negativo
//setcookie('meunome', 'Brener', time() - 20);