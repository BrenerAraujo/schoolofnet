<?php

//?planeta=Marte&cor=azul = Isso se chama Query String

/*echo $_GET['planeta'];
echo "<br>";
echo $_GET['cor'];*/

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false) {
    echo $planeta;
} else {
    echo "Planeta não informado!";
}

echo "<br>";

//coalesce (php7+)
//Uma maneira simplificada do ternário. Se existir o $_GET['cor'] já é adicionado à variável.
/*$cor = $_GET['cor'] ?? "Cor não informada";
echo $cor;*/