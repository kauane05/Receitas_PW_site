<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["produto"];
    $sobrenome = $_POST["sobrenome"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $data_nasc = $_POST["data_nasc"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $cpf = $_POST["cpf"];


    $sql = "INSERT INTO venda (nome_usu, sobrenome_usu, senha_usu, telefone_usu, data_nasc_usu, email_usu, endereco_usu, cpf_usu) VALUES ('$nome', ' $sobrenome', '$senha','$telefone','$data_nasc','$email', '$endereco', '$cpf')";

    if ($_conn->query($sql) === TRUE) {
        echo "Venda cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar a venda: " . $_conn->error;
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>