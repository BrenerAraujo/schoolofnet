<?php
    //Podemos iniciar a estrutura php antes de abrir a tag html
    $nome = 'Brener Araújo';
    $html = '<h1>Iniciando com PHP</h1>';
?>

<html>
    <head>

    </head>

    <body>
        <?php
            //Podemos também abrir tags php dentro das estruturas html
            echo 5 + 3;
            echo $nome;
        ?>

        <?php
            echo $html;
        ?>
    </body>
</html>