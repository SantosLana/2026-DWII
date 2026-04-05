<link rel="stylesheet" href="css/style.css">
<h3>Listagem das músicas cadastradas em ordem alfabética</h3>

<?php
require 'conexao.php';
$sqlListar = "select * from musica order by nomeMusica";
$result = mysqli_query($con, $sqlListar);

while ($listaMusicas = mysqli_fetch_assoc($result)) {
    $id = $listaMusicas['idMusica'];
    $nomeM = $listaMusicas['nomeMusica'];
    $nomeA = $listaMusicas['nomeArtista'];
    $nomeE = $listaMusicas['nomeEstilo'];
    ?>

    <div class="music-card">
        <p><strong>Código da música:</strong> <?php echo $id; ?></p>
        <p><strong>Nome da Música:</strong> <?php echo $nomeM; ?></p>
        <p><strong>Nome do Artista:</strong> <?php echo $nomeA; ?></p>
        <p><strong>Estilo Musical:</strong> <?php echo $nomeE; ?></p>

        <a class="action-button" href="excluirMusica.php?id=<?php echo $id ?>">Excluir</a>
        <a class="action-button" href="frmAlterarMusica.php?id=<?php echo $id ?>">Alterar</a>
    </div>

    <?php
}
?>

<div class="extra-links">
    <a href="index.html">Menu inicial</a>
    <a href="frmusica.html">Cadastrar novas músicas</a>
</div>
