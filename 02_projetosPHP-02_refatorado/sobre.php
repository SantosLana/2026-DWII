<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : sobre.php  (migrado de 01_php-intro/sobre.php)
 * Autor      : Laa Santos
 * Data       : 27/04/26
 * ════════════════════════════════════════════════════════════
 */

// session_start() ANTES de qualquer saída HTML.
// Necessário aqui — cabecalho.php é incluído dentro do <head>,
// após o início do output HTML, tarde demais para iniciar sessão.
if (session_status() === PHP_SESSION_NONE) session_start();

// ✅ Ordem padrão: $pagina_atual → $titulo_pagina → $caminho_raiz
// Sem session_start() — cabecalho.php centraliza.
// Sem $nome — cabecalho.php fornece o fallback.
$nome = 'Lana';


$pagina_atual  = 'sobre';
$titulo_pagina = 'Sobre | Portfólio DWII';
$caminho_raiz  = './';

$formacoes = [
    "Técnico em Informática — IFPR (em andamento)",
    "Curso de Desenvolvimento Web (2025)",
    // ← adicione suas formações aqui
];
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <!-- ✅ '/../includes/' → '/includes/' -->
  <?php include __DIR__ . '/includes/cabecalho.php'; ?>
</head>
<body>
  <div class="container">
    <h1 class="titulo-secao">👤 Sobre mim</h1>

<div class="card">
  <h3>Quem sou eu</h3>
  <!-- $nome disponível via fallback do cabecalho.php -->
  <p>Olá! Sou <strong><?php echo htmlspecialchars($nome); ?></strong>,
     estudante do 3º ano do Técnico em Informática no IFPR de Ponta Grossa.
    Nasci em 03 de Março de 2009, e eu quero muito cursar Direito na UEPG pra futuramente trabalhar na polícia civil, ou em algum cartório, me interesso pela área desde os 10 anos de idade e até hoje gosto muito, e vou batalhar para conquistar meu objetivo. Mas até la eu ja quero estar fazendo alguma coisa pois se formar demora, sempre pensei em trabalhar em algum banco ou algum escritório, mas estou em um curso de TI, vai que consigo algo nessa área, seria bom. Uma outra coisa é que a maioria das pessoas que conheço sonham em ser ricas, e eu era uma delas também. Até perceber que o dinheiro não é tudo, posso ter todo dinheiro do mundo, mas se eu não realizar meu sonho não serei feliz, e oque quero, dinheiro nenhum pode comprar. Quero muito que minha mãe veja eu casando na igreja um dia com alguém que me faça feliz, ja que ninguem da minha família teve essa oportunidade e as pessoas que estão com elas não as fazem felizes. E embora ela diga que nunca quer netos, eu gostaria muito de ter um menininho loirinho igual eu e meu pai, se um dia eu tiver vai ser Guilherme. Então resumindo, quero alcançar meu objetivo e ser alguem na vida, poder constituir uma família na hora certa e conseguir manter uma renda legal, não necessariamente rica, mas viver muito bem e nunca faltar nada pra ninguem da minha família.
</p>
</div>

<div class="card">
  <h3>Formação</h3>
  <ul style="margin: 0; padding-left: 20px; color: #374151;">
    <?php foreach ($formacoes as $item): ?>
      <li style="margin-bottom: 6px;"><?php echo htmlspecialchars($item); ?></li>
    <?php endforeach; ?>
  </ul>
</div>
  </div>

  <!-- ✅ '/../includes/' → '/includes/' -->

  <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>