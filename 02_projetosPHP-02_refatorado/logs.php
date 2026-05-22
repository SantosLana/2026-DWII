<?php

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/conexao.php';

requer_login();

$pdo = conectar();

/* BUSCA DOS LOGS */
$logs = $pdo->query("
    SELECT *
    FROM logs
    ORDER BY criado_em DESC
")->fetchAll();

/* CABECALHO */
$pagina_atual = 'logs';
$titulo_pagina = 'Logs do Sistema';
$caminho_raiz = './';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once __DIR__ . '/includes/cabecalho.php'; ?>

    <style>

        .tabela-logs {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tabela-logs th,
        .tabela-logs td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        .tabela-logs th {
            background: #f3f4f6;
        }

        .badge-log {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 999px;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .log-insert {
            background: #10b981;
        }

        .log-update {
            background: #3b82f6;
        }

        .log-status {
            background: #f59e0b;
        }

    </style>
</head>

<body>

<main>

    <div class="container">

        <div style="
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        ">

            <h1 class="titulo-secao">
                Trilhas de Auditoria
            </h1>

            <a href="admin.php" class="btn-secundario">
                Voltar ao painel
            </a>

        </div>

        <?php if (empty($logs)): ?>

            <p>Nenhum log encontrado.</p>

        <?php else: ?>

            <table class="tabela-logs">

                <thead>

                    <tr>
                        <th>Data</th>
                        <th>Ação</th>
                        <th>Usuário</th>
                        <th>Detalhes</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($logs as $log): ?>

                        <?php

                        $classe = match($log['acao']) {
                            'INSERT' => 'log-insert',
                            'UPDATE' => 'log-update',
                            default  => 'log-status'
                        };

                        ?>

                        <tr>

                            <td>
                                <?php
                                echo date(
                                    'd/m/Y H:i',
                                    strtotime($log['criado_em'])
                                );
                                ?>
                            </td>

                            <td>

                                <span class="badge-log <?php echo $classe; ?>">

                                    <?php echo htmlspecialchars($log['acao']); ?>

                                </span>

                            </td>

                            <td>
                                <?php
                                echo htmlspecialchars($log['usuario_login']);
                                ?>
                            </td>

                            <td>
                                <?php
                                echo htmlspecialchars($log['detalhes']);
                                ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        <?php endif; ?>

    </div>

</main>

<?php require_once __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>