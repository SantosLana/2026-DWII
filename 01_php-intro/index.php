<?php

$nome  = "Lana Santos";
$profissao = "Estudante de Tecnologia";
$curso = "Técnico em Informática – IFPR";
$pagina_atual = "inicio";
$caminho_raiz = "../";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio – <?php echo $nome; ?></title>
</head>
<body>
     <?php include $caminho_raiz . 'includes/cabecalho.php'; ?>

<nav>
    <a href="index.php">🏠 Início</a>
    <a href="sobre.php">👤 Sobre</a>
</nav>

<div class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
</div>

<div class="container">
    <h2>Bem-vindo ao meu portfólio</h2>
    <p>Esta página foi gerada pelo PHP em:
        <strong><?php echo date("d/m/y \à\s H:i:s"); ?></strong>
    </p>
</div>
 <?php include $caminho_raiz . 'includes/rodape.php'; ?>


</body>
</html>