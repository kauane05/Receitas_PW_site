<?php
$_conn = mysqli_connect('127.0.0.1','root','','bd_site_pw2');
if($_conn===FALSE) {
 echo "Não foi possível conectar ao Servidor de banco de dados ";
} else {
 echo "Foi possível conectar ao Servidor de banco de dados ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dia = $_POST["dia"];
    $numeroVen = $_POST["numeroVen"];
    $valor = $_POST["valor"];
    $numeroCart = $_POST["numeroCart"];
    $titularCart = $_POST["titularCart"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];
    $cvvCart = $_POST["cvvCart"];


    $sql = "INSERT INTO pagamento (dia_pag, numeroVen_pag, valor_pag, numeroCart_pag, titularCart_pag, mes_pag, ano_pag, cvvCart_pag) VALUES ('$dia', ' $numeroVen', '$valor',  '$numeroCart', '$titularCart', '$mes', '$ano', '$cvvCart')";

    if ($_conn->query($sql) === TRUE) {
        echo "Pagamento cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o pagamento: " . $_conn->error;
    } 
    $_conn->close();
}
else{
    echo "erro de dados";
}
}
?>