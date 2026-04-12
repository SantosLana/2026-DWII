<!--
  Disciplina : Desenvolvimento Web II (DWII)
  Aula       : 03 - PHP Intro
  Autor      : Lana Santos
  Data       : 04/04/2026
-->
<?php
$pagina_atual = "sobre";

$nome = "Lana Santos";
$pagina_atual = "sobre";
$caminho_raiz = "../";
$titulo_pagina = "Sobre";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once __DIR__ . '/../includes/cabecalho.php';?>

<div class="container">
    <h1>Sobre mim</h1>

    <p>Olá! Sou <strong><?php echo $nome; ?></strong>.</p>

    <p>
        Nasci em 03 de Março de 2009, e eu quero muito cursar Direito na UEPG pra futuramente trabalhar na polícia civil, ou em algum cartório, 
        me interesso pela área desde os 10 anos de idade e até hoje gosto muito, e vou batalhar para conquistar meu objetivo.
        Mas até la eu ja quero estar fazendo alguma coisa pois se formar demora, sempre pensei em trabalhar em algum banco ou 
        algum escritório, mas estou em um curso de TI, vai que consigo algo nessa área, seria bom.

        Uma outra coisa é que a maioria das pessoas que conheço sonham em ser ricas, e eu era uma delas também.
        Até perceber que o dinheiro não é tudo, posso ter todo dinheiro do mundo, mas se eu não realizar meu sonho não serei feliz, 
        e oque quero, dinheiro nenhum pode comprar. Quero muito que minha mãe veja eu casando na igreja um dia com alguém que me faça 
        feliz, ja que ninguem da minha família teve essa oportunidade e as pessoas que estão com elas não as fazem felizes.
        E embora ela diga que nunca quer netos, eu gostaria muito de ter um menininho loirinho igual eu e meu pai, se um dia eu tiver vai ser Guilherme.

        Então resumindo, quero alcançar meu objetivo e ser alguem na vida, poder constituir uma família na hora certa e conseguir manter uma
        renda legal, não necessariamente rica, mas viver muito bem e nunca faltar nada pra ninguem da minha família. 
    </p>

    <a href="index.php" class="btn">Voltar</a>
</div>

<?php require_once __DIR__ . '/../includes/rodape.php';?>
