<?php
//HTTP - GET e POST
//$GET é passado pelo URL enquanto POST vem "escondido"
var_dump($_GET);
var_dump($_POST);
?>

<h1><?php if(isset($_GET['nome'])){ echo $_GET['nome'];} ?></h1>
<h1><?php if(isset($_POST['nome'])){ echo $_POST['nome'];} ?></h1>