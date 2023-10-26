<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $senha = $_POST["senha"];


    $sql = "INSERT INTO assinatura (nome_ass, email_ass, senha_ass) VALUES ('$nome', ' $email', '$senha')";

    if ($_conn->query($sql) === TRUE) {
        echo "Assinatura cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar a assinatura: " . $_conn->error;
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>