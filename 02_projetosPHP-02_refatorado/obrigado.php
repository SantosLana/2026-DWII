<?php
/**
* Disciplina : Desenvolvimento Web II (DWII)
* Aula : 04- PHP para Web
* Arquivo : 02_formularios/obrigado.php
* Autor : Lana Santos
* Data : 11/04/2026
*/

// Proteção: acesso direto sem dados → volta para contato
//if (!isset($_GET['nome']) || !isset($_GET['assunto'])) {
//    header('Location: contato.php');
    //exit;
//}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Variáveis do template
$nome = "Lana Santos";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Obrigada!";

// Dados vindos da URL (GET)
$nome_visitante = htmlspecialchars($_GET['nome']);
$assunto = htmlspecialchars($_GET['assunto']);
?>

<?php include $caminho_raiz . 'includes/cabecalho.php'; ?>

<div class="container confirmacao">

    <p class="confirmacao-icone">✅</p>

    <h1 class="confirmacao-titulo">
        Obrigada, <?php echo $nome_visitante; ?>!
    </h1>

    <p class="confirmacao-texto">
        Recebemos sua mensagem sobre <strong><?php echo $assunto; ?></strong>.
    </p>

    <p class="confirmacao-texto">
        Entrarei em contato em breve.
    </p>

    <a href="contato.php" class="btn">← Enviar outra mensagem</a>

</div>

<?php include $caminho_raiz . 'includes/rodape.php'; ?>