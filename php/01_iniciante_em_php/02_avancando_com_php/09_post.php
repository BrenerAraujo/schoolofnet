<?php
//Recebendo dados de um formulário via POST

if(!isset($_POST['interesse'])) {
    $_POST['interesse'] = 0;
}

//var_dump serve para mostrar o valor de uma variável.
var_dump($_POST);

$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];

echo "<strong>Nome:</strong> " . $nome . "<br>";
echo "<strong>E-mail:</strong> " . $email . "<br>";

echo "<strong>Interesses:</strong>";
echo "<ul>";
foreach($interesses as $interesse) {
    echo "<li>$interesse</li>";
}
echo "</ul>";

echo "<strong>Onde conheceu:</strong> " . $onde_conheceu . "<br>";
echo "<strong>Redirecionar:</strong> " . $redirecionar . "<br>";