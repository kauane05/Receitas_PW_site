<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["produto"];
    $ingrediente = $_POST["ingrediente"];
    $tipo = $_POST["tipo"];
    $modo_preparo = $_POST["modo_preparo"];
    $tempo_preparo = $_POST["tempo_preparo"];
    $nome_chef = $_POST["nome_chef"];
    $data_publi = $_POST["data_publi"];
    $quant_pessoas = $_POST["quant_pessoas"];


    $sql = "INSERT INTO receita (nome_rec, ingrediente_rec, tipo_rec, modo_preparo_rec, tempo_preparo_rec, nome_chef_rec, data_publi_rec, quant_pess_serve_rec) VALUES ('$nome', ' $ingrediente', '$tipo','$modo_preparo','$tempo_preparo','$nome_chef', '$data_publi', '$quant_pessoas')";

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