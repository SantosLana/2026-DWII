<?php
/**
* Disciplina : Desenvolvimento Web II (DWII)
* Aula : 04- PHP para Web
* Arquivo : 02_formularios/contato.php
* Autor : Lana Santos
* Data : 11/04/2026
*/

// 1. Inicialização
$nome_visitante = '';
$email = '';
$mensagem = '';
$assunto = '';
$erros = [];

// 2. Processamento do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Captura
    $nome_visitante = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');

    // Validações
    if ($nome_visitante === '') {
        $erros[] = 'O nome é obrigatório.';
    }

    if ($email === '') {
        $erros[] = 'O e-mail é obrigatório.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'E-mail inválido.';
    }

    if ($assunto === '') {
        $erros[] = 'Selecione um assunto.';
    }

    if ($mensagem === '') {
        $erros[] = 'A mensagem é obrigatória.';
    } elseif (strlen($mensagem) < 10) {
        $erros[] = 'A mensagem deve ter no mínimo 10 caracteres.';
    } elseif (strlen($mensagem) > 500) {
        $erros[] = 'A mensagem deve ter no máximo 500 caracteres.';
    }

    // Se não houver erros → redireciona (PRG)
    if (empty($erros)) {
        header(
            'Location: obrigado.php?nome=' . urlencode($nome_visitante) .
            '&assunto=' . urlencode($assunto)
        );
        exit;
    }
}

// 3. Variáveis do template
$nome = "Lana Santos";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Contato";
?>

<?php include '../includes/cabecalho.php'; ?>

<div class="container">

    <h1 class="titulo-secao">📩 Contato</h1>

    <!-- ERROS -->
    <?php if (!empty($erros)): ?>
        <div class="alerta-erro">
            <?php foreach ($erros as $erro): ?>
                <p><?php echo htmlspecialchars($erro); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="post" class="formulario">

        <!-- NOME -->
        <div class="campo">
            <label class="label-campo">Nome *</label>
            <input type="text" name="nome" class="input-texto" required
                   value="<?php echo htmlspecialchars($nome_visitante); ?>">
        </div>

        <!-- EMAIL -->
        <div class="campo">
            <label class="label-campo">E-mail *</label>
            <input type="email" name="email" class="input-texto" required
                   value="<?php echo htmlspecialchars($email); ?>">
        </div>

        <!-- ASSUNTO -->
        <div class="campo">
            <label class="label-campo">Assunto *</label>
            <select name="assunto" class="input-texto" required>
                <option value="">Selecione</option>
                <option value="Dúvida" <?php if ($assunto === 'Dúvida') echo 'selected'; ?>>Dúvida</option>
                <option value="Proposta de trabalho" <?php if ($assunto === 'Proposta de trabalho') echo 'selected'; ?>>Proposta de trabalho</option>
                <option value="Colaboração" <?php if ($assunto === 'Colaboração') echo 'selected'; ?>>Colaboração</option>
                <option value="Outro" <?php if ($assunto === 'Outro') echo 'selected'; ?>>Outro</option>
            </select>
        </div>

        <!-- MENSAGEM -->
        <div class="campo">
            <label class="label-campo">Mensagem *</label>
            <textarea name="mensagem" class="input-texto" rows="5" required><?php echo htmlspecialchars($mensagem); ?></textarea>
            <p class="contador">
                <?php echo strlen($mensagem); ?> de 500 caracteres usados
            </p>
        </div>

        <!-- BOTÃO -->
        <button type="submit" class="btn-primario">📨 Enviar</button>

    </form>

</div>

<?php include '../includes/rodape.php'; ?>