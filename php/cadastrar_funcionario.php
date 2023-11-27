<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site_pw2');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $endereco = $_POST["endereco"];
    $setor = $_POST["setor"];
    $telefone = $_POST["telefone"];
    $funcao = $_POST["funcao"];
    $cpf = $_POST["cpf"];
    $data_nasc = $_POST["data_nasc"];


    $sql = "INSERT INTO funcionario (nome_fun, email_fun, endereco_fun, setor_fun, telefone_fun, funcao_fun, cpf_fun, data_nasc_fun) VALUES ('$nome', ' $email', '$endereco', '$setor', '$telefone', '$funcao', '$cpf', '$data_nasc')";

    if ($_conn->query($sql) === TRUE) {
        echo "Funcionário(a) cadastrado(a) com sucesso!";
    } else {
        echo "Erro ao cadastrar o/a Funcionário(a): " . $_conn->error;
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>