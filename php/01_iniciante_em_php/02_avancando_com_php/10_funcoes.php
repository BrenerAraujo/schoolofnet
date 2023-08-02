<?php

// Criando função
function escreva_nome() {
    // Corpo da função
    echo "Olá, querido aluno!<br>";
}

function escreva_nome1($nome) {
    echo "Bom dia, querido aluno $nome! <br>";
}

//Chamando função
escreva_nome();
escreva_nome1('Brener');
escreva_nome1("João");
escreva_nome1('Maria');