<?php
/**
 * Autor: Lana Santos
 * Data: 11/04/2026
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 05 – PHP + MariaDB: Persistencia de dados via PDO
 * Arquivo    : 03_pdo/includes/cab_pdo.php
 */

if (!isset($titulo_pagina)) $titulo_pagina = "Catálogo de Tecnologias";
if (!isset($pagina_atual)) $pagina_atual = "";
$caminho_raiz = '../';
include __DIR__ . '/../../includes/cabecalho.php';
?>