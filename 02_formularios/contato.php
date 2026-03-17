<?php
$nome           = "Lana Santos";
$pagina_atual   = "contato";
$caminho_raiz   = "../";
$titulo_pagina  = "Contato";

$nome_visitante = $_GET['nome_visitante'] ?? '';
$mensagem       = $_GET['mensagem'] ?? '';
$erros          = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome_visitante = trim($_POST['nome_visitante'] ?? '');
        $mensagem = trim($_POST['mensagem']?? '');
        $email = trim($_POST['email'] ?? '');
        $assunto = trim($_POST['assunto'] ?? '');


        if (empty($nome_visitante)) {
            $erros [] = 'O campo Nome é obrigatório. ' ;
        }
        if (empty ($mensagem) ) {
            $erros [] = 'O campo Mensagem é obrigatório. ' ;
        } 
        elseif (strlen ($mensagem) < 10) {
            $erros [] = 'A mensagem deve ter pelo menos 10 caracteres. ';
        }
        elseif (strlen($mensagem) > 500) {
            $erros[] = 'A mensagem deve ter no máximo 500 caracteres.';
        }
        if (empty ($email) ) {
            $erros [] = 'O campo Email é obrigatório. ' ;
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = 'Digite um email válido.';
        }
        if (empty($assunto)) {
            $erros[] = 'Selecione um assunto.';
        }   

        if (empty ($erros) && $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        header ('Location: obrigado.php?nome=' . urlencode ($nome_visitante) . '&assunto=' . urlencode ($assunto) );
        exit;
        }
    
    }
?>
    <?php include $caminho_raiz . 'includes/cabecalho.php'; ?>



<div class="container">
    <h1 class="titulo-secao">📫 Formulario de Contato</h1>

    <form class="form-container" action="contato.php" method="post">

    <label> Seu nome: </label>
    <input type="text" name="nome_visitante" value="<?php echo htmlspecialchars($nome_visitante); ?>">
    
    <label>Seu email :</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

    <label>Sua mensagem: </label>
    <textarea name="mensagem" rows="4" maxlength="500"><?php echo htmlspecialchars($mensagem); ?></textarea>
    <p class="gerado"><?php echo strlen($mensagem); ?>/500 </p>
        <button type="submit">Enviar</button>
    
    </form>
</div> 

<?php if ($nome_visitante !== ''): ?>
    <div class="alerta-sucesso" style="margin-top: 20px;">
        <h3>✅ Dados recebidos!</h3>
        <p><strong>Nome:</strong>
        <?php echo htmlspecialchars($nome_visitante); ?></p>
        <p><strong>Mensagem:</strong>
        <?php echo htmlspecialchars($mensagem); ?></p>
</div>
<?php endif; ?>

<?php include $caminho_raiz . 'includes/rodape.php'; ?>