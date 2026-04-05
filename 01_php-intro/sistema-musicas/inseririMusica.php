<link rel="stylesheet" href="css/style.css">
<?php
    // fazendo a conexão com o BD através do PHP já criado
    require 'conexao.php';

    // declarando as variáveis para aceitar a inserção do usuário:
    $vnomeMusica = $_POST["lNomeMusica"];
    $vnomeArtista = $_POST["lNomeArtista"];
    $vnomeEstilo = $_POST["lNomeEstilo"];

    //criar variáveis para o código SQL de inserção e para execução da inserção
    $sqlInsere = "insert into musica (nomeMusica, nomeArtista, nomeEstilo) 
                  values ('$vnomeMusica', '$vnomeArtista', '$vnomeEstilo')";
    $result = mysqli_query($con, $sqlInsere);

    if ($result == true) {
       echo "<div class='message'>A música: <strong>" . $vnomeMusica . "</strong> foi cadastrada com sucesso.</div>";

    } else {
        echo "<div class='message'>Falha no cadastro. Verifique os dados e tente novamente.</div>";

    }
?>
<!-- Colocando um link em HTML para retornar à listagem das músicas -->
<p style="text-align: center;">
    <a class="return-link" href="listarAlterarExcluirMusicas.php">Voltar para a lista de músicas</a>
</p>
