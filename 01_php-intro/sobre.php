<!-- 01_php-intro/sobre.php -->

<?php
$nome = "Lana Santos";
$pagina_atual = "sobre";
$caminho_raiz = "../";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $caminho_raiz; ?>includes/style.css">
    <title>Sobre - <?php echo $nome; ?></title>
</head>

<body 
<?php include $caminho_raiz . 'includes/cabecalho.php'; ?>

   <div class="sobre">
        <h1> Sobre mim</h1>
        <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de
        Técnico em Informática no IFPR de Ponta Grossa.</p>
        <p>Quero cursar Direito na UEPG e depois prestar consurso púublico para a polícia civil (Até então).</p>

    </div>
<div class="btn">
<a href="index.php"> Voltar ao início</a>
    </div>
    <?php include $caminho_raiz . 'includes/rodape.php'; ?>
</body>
</html>