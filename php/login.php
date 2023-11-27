<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site_pw2');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
   

    $sql = "INSERT INTO login (nome_log, email_log, senha_log) VALUES ('$nome', ' $email', '$senha')";

    if ($_conn->query($sql) === TRUE) {
        echo "Receita cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar a receita: " . $_conn->error;
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>