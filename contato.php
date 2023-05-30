<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Contato</title>
</head>
<div class="grid-container2">
  <div class="titulo2">
    <div>
      <a href="index.html"><img class="dani" src="/imagens/logo.png"></a>
    </div>
    <h2>Contato</h2>
  </div>
  <div>
    <form action="enviar-email.php" method="post">
      <label for="nome" class="subtitulo">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email" class="subtitulo">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="telefone" class="subtitulo">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label for="mensagem" class="subtitulo">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" required></textarea>

      <label for="servico">Serviço:</label>
      <select id="servico" name="servico" required>
        <option value="" disabled selected>Selecione o serviço</option>
        <option value="piercing">Piercing</option>
        <option value="tattoo">Tattoo</option>
        <option value="ambos">Piercing e Tattoo</option>
      </select>
    </form>
    <?php

    if (isset($_POST["Nome"])) {
      $nome = $_POST_POST["nome"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];
      $servico = $_POST["servico"];
      $mensagem = $_POST["mensagem"];
    }
    // //dados de conexão com o Banco de dados
    // $servidor = "localhost";
    // $usuario_bd = "root";
    // $senha_usuario = "";
    // $banco_dados = "site-tattu";

    // //Abrir a conexão com o banco de dados
    // $conexao = mysqli_connect($servidor, $usuario_bd, $senha_usuario, $banco_dados);

    // //criar tarefas 
    // $sql = "INSERT INTO contatos (nome, email, telefone, servico, mensagem) VALUES ('$nome', '$email', '$telefone', '$servico', '$mensagem')";

    // //executar o sql no banco de dados
    // if (mysqli_query($conexao, $sql)) {
    //   echo "Obrigado por entrar em contato! Receberemos sua mensagem em breve.";
    // } else
    //   echo "Erro ao inserir os dados: " . mysqli_error($conexao);

    // //fechar a conexão com o banco de dados
    // mysqli_close($conexao);

    ?>
    <button type="submit">Enviar</button>


    <body>

</html>