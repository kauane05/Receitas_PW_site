<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site_receita');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["produto"];
    $codigo= $_POST["codigo"];
    $descricao = $_POST["pro_des"];
    $quant = $_POST["quantidade"];
    $data_vali = $_POST["data_vali"];
    $data_fab = $_POST["data"];


    $sql = "INSERT INTO produto VALUES ('null', '$nome', ' $codigo', '$data_vali','$data_fab','$quant','$descricao')";

    if ($_conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto: " . $_conn->error;
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>


