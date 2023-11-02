<?php

include('../config.php');
include('protecao.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    Bem vindo <?php echo $_SESSION['nome']; ?>

    <a href="logout.php">Sair</a>
</body>
</html>