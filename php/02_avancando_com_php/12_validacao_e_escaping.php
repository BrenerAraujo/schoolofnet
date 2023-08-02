<?php

//empty retorna verdadeiro se:
//empty() -> "", 0, null, false, array(vazio)

//trim() tira espaços do começo e do final do texto
//Pode usar um parâmetro no trim() para tirar outros tipos de caracteres, como . , ] [ ...

//strip_tags() remove todo código HTML

$nome = trim($_POST['nome']);
$interesses = $_POST['interesse'] ?? null;
$mensagem = strip_tags($_POST['mensagem']);

if(empty($nome)) {
    echo "Informe o nome!<br>";
}

if(is_null($interesses)) {
    echo "Selecione pelo menos um item de interesse!<br>";
}

echo $mensagem;