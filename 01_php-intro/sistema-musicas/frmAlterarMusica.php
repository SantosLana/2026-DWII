<?php
// declarar uma variável para receber o ID através do método get que virá pela URL do navegador
// de acordo com a música clicada na tela anterior
$id_music = $_GET['id'];

// conectar ao banco usando a classe de conexão já criada
require 'conexao.php';

// declarar uma variável para consultar no BD o registro do ID recebido
$sql = "select * from musica where idMusica = $id_music";

// executar o sql atribuindo o resultado à uma variável - lembrando: os parâmetros são a variável de
// conexão e a variável da consulta
$idConsultado = mysqli_query($con, $sql);

// trazer a consulta realizada para uma nova variável para poder trabalhar com os valores dos campos
$dadosMusica = mysqli_fetch_assoc($idConsultado);

// criar uma variável para cada campo recebido do BD
$v1nomeMusica = $dadosMusica['nomeMusica'];
$v2nomeArtista = $dadosMusica['nomeArtista'];
$v3nomeEstilo = $dadosMusica['nomeEstilo'];
$v4idMusica = $dadosMusica['idMusica'];

// fechando o PHP para começar a trabalhar com o HTML no mesmo arquivo para criar um formulário
?>
<!DOCTYPE html>
<!-- lembrando que a formatação de comentários em HTML é esta, no PHP é //        :-)   -->
<head>
    <title>Alterar música</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- criando um formulário para enviar os dados para o PHP de alteração de definindo sua ação e método -->
    <form action="alteraMusica.php" method="post">

        <!-- criar quatro labels e criar quatro campos de formulário do type text e usar PHP dentro do HTML para
        trazer os dados da variável consultada anteriormente para visualização -->

        <label for="Id"> Código da música: </label>
        Código da música: <input type="text" readonly id="lId" name = "idMusical" value="<?php echo $v4idMusica ?>">  <br>

        <label for="lNomeMusica"> Nome da música: </label>
        <input type="text" id="lNomeMusica" name = "nomeMusical" value="<?php echo $v1nomeMusica ?>">  <br>

        <label for="lNomeArtista"> Nome do artista: </label>
        <input type="text" id="lNomeArtista" name = "nomeArtistal" value="<?php echo $v2nomeArtista ?>">  <br>

        <label for="lNomeEstilo"> Nome do estilo musical: </label>
        <input type="text" id="lNomeEstilo" name = "nomeEstilal" value="<?php echo $v3nomeEstilo ?>">  <br>

        <!--criar um botão para efetivar as alterações digitadas -->
        <input type="submit" value="alterar dados">

    </form>
</body>
</html>
