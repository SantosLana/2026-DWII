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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pagina_atual  = 'inicio';
$titulo_pagina = 'Portfólio | DWII 2026';
$caminho_raiz  = './';



$nome      = 'Lana Santos';
$descricao = 'Estudante do curso Técnico em Informática no IFPR, '
           . 'apaixonada pelo meu namorado. '
           . 'Quero cursar Direito na UEPG, '
           . 'e ter uma família linda com meu homem.';
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

      
      <div class="foto-container">
        <img
          src="<?php echo $caminho_raiz; ?>./includes/imgs/laninha.jpg"
          alt="Foto de <?php echo htmlspecialchars($nome); ?>"
          class="foto-perfil">
      </div>

      
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

        </div>

      </div>

    </section>
  </main>

  <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>