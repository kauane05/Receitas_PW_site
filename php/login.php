<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 // Verificar se está chegando dados por POST
if (!empty($_POST)) {
  // Iniciar SESSAO (session_start)
  session_start();
  try {
    // Montar a SQL
    $sql = "SELECT nome, email FROM usuario WHERE email = :email AND senha = :senha";

    // Preparar a SQL (pdo)
    $stmt = $pdo->prepare($sql);

    // Definir/Organizar os dados p/ SQL
    $dados = array(
      ':email' => $_POST['email'],
      ':senha' => md5($_POST['senha'])
    );

    $stmt->execute($dados);
    //$stmt->execute(array(':email' => $_POST['email'], ':senha' => $_POST['senha']));

    $result = $stmt->fetchAll();

    if ($stmt->rowCount() == 1) { // Se o resultado da consulta SQL trouxer um registro
      // Autenticação foi realizada com sucesso

      $result = $result[0];
      // Definir as variáveis de sessão
      $_SESSION['nome'] = $result['nome'];
      $_SESSION['email'] = $result['email'];
      

      // Redirecionar p/ página inicial (ambiente logado)
      header("Location: sugestoesDoDia.html");

    } else { // Signifca que o resultado da consulta SQL não trouxe nenhum registro
      // Falha na autenticaçao
      // Destruir a SESSAO
      session_destroy();
      // Redirecionar p/ página inicial (login)
      header("Location: index.html?msgErro=E-mail e/ou Senha inválido(s).");
    }
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
else {
  header("Location: index.html?msgErro=Você não tem permissão para acessar esta página..");
}
die();
}
?>