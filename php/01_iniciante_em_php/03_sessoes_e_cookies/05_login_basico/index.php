<?php
session_start();

$user = $_SESSION['user'] ?? null;

if(!$user) {
    header('location: login.php');
    exit;
}
?>

<h1>Página Protegida</h1>
</br></br>
<p>Olá, <?php echo $user['email'];?></p>
<a href="logout.php">Logout</a>