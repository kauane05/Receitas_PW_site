<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site');
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
<<<<<<< HEAD
        echo "Funcionário(a) cadastrada(o) com sucesso!";
    } else {
        echo "Erro ao cadastrar o/a funcionário(a): " . $_conn->error;
=======
        echo "Funcionário(a) cadastrado(a) com sucesso!";
    } else {
        echo "Erro ao cadastrar o/a Funcionário(a): " . $_conn->error;
>>>>>>> 3535f35cc3cb13166769d6d2d9576dbafcc3067f
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>