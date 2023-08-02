<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Planetas</title>
</head>
<body>
    <?php
        $planetas = [
            "Mercúrio",
            "Vênus",
            "Terra",
            "Marte",
            "Júpiter",
            "Saturno",
            "Urano",
            "Netuno"
        ];
    ?>

    <ul>
        <?php foreach($planetas as $planeta): ?>
            <li>
                <a href="08_get.php?planeta=<?php echo $planeta ?>"><?php echo $planeta ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>