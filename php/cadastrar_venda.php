<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site_pw2');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomeCli = $_POST["nome"];
    $nomeFun = $_POST["nomefun"];
    $numero = $_POST["numero"];
    $valor = $_POST["valor"];
    $tipo = $_POST["tipo"];
    $dataVen = $_POST["dataVen"];
    $endereco = $_POST["endereco"];
    $data = $_POST["data"];


    $sql = "INSERT INTO venda (nomeCli_ven, nomeFun_ven, numero_ven, valor_ven, tipo_ven, data_ven, endereco_ven, dataEnt_ven) VALUES
                             ('$nomeCli', ' $nomeFun', '$numero','$valor','$tipo','$dataVen', '$endereco', '$data') ";

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