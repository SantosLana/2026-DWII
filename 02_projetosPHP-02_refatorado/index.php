<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : index.php  (homepage do portfólio)
 * Autor      : Lana Santos
 * Data       : 27/04/2026
 * Descrição  : Homepage do portfólio pessoal.
 *              Converte a apresentação estática (HTML puro) em
 *              PHP dinâmico, integrando cabeçalho, navegação e
 *              rodapé globais via includes.
 * ════════════════════════════════════════════════════════════
 */

// ── Variáveis de controle do cabecalho ──────────────────────
// $pagina_atual → lida pelo nav.php para destacar o item ativo
// $caminho_raiz → prefixo para caminhos de CSS e links do menu
//                 './' = estamos na raiz do projeto
// $titulo_pagina → aparece na aba do navegador
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$pagina_atual  = 'inicio';
$caminho_raiz  = './';
$titulo_pagina = 'Portfólio — Lana Santos';

// ── 3. Dados de apresentação ─────────────────────────────────

$nome      = 'Lana Santos';
$descricao = 'Estudante de Técnico em Informática no IFPR, '
           . 'apaixonada pelo meu namorado. '
           . 'Quero cursar Direito na UEPG, '
           . 'e ter uma família linda com meu homem';
$email     = '20241ctb0100039@estudantes.ifpr.edu.br';
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <?php

include __DIR__ . '/includes/cabecalho.php';
?>

</head>
<body>

  <main>
    <section class="apresentacao">

  <!-- Foto de perfil -->
  <div class="foto-container">
    <img
      src="<?php echo $caminho_raiz; ?>./includes/imgs/laninha.jpg" width="500px" height="500px"
      alt="Foto de <?php echo htmlspecialchars($nome); ?>"
      class="foto-perfil">
  </div>

  <!-- Bloco de texto + cards informativos -->
  <div class="texto-container">

    <h2>
      Olá, eu sou <?php echo htmlspecialchars($nome); ?>! 👋
    </h2>

    <?php
    ?>
    <p><?php echo htmlspecialchars($descricao); ?></p>

    <div class="info-cards">

      <div class="info-card">
        <span class="card-icon">🎓</span>
        <span class="card-texto">Técnico em Informática — IFPR CRPG</span>
      </div>

      <div class="info-card">
        <span class="card-icon">💻</span>
        <span class="card-texto">Desenvolvimento Web II — 2026</span>
      </div>

      <div class="info-card">
        <span class="card-icon">📧</span>
        <span class="card-texto">
          <?php echo htmlspecialchars($email); ?>
        </span>
      </div>

    </div><!-- /info-cards -->

  </div><!-- /texto-container -->

</section>
  </main>

  <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>