<?php

require 'conexao.php';

// criando uma variável para pegar do HTML, com get, o valor da variável recebida por URL
// da tela da listagem das músicas
$id_musica = $_GET["id"];

// criando uma variável para armazenar o comando SQL para deleção
$sqlExcluir = "delete from musica where idMusica = $id_musica";

// criando a variável result para a execução da exclusão
$result = mysqli_query($con, $sqlExcluir);

if ($result == true){
    echo "A música foi excluída com sucesso.";
} else {
    echo "Falha ao excluir a música";
}

?>

<!-- Colocando um link para retornar à listagem das músicas -->
<a href="listarAlterarExcluirMusicas.php"> Voltar para a lista de músicas</a>
<br>
