<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pagamento</title>
</head>
<body>

<h2>Lista de Pagamento</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Dia</th>
        <th>Número</th>
        <th>Valor</th>
        <th>Número do Cartão</th
        <th>Titular do Cartão</th
        <th>Mês</th
        <th>Ano</th
        <th>CVV</th

    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_pag, dia_pag, numeroVen_pag, valor_pag, numeroCart_pag, titularCart_pag, mes_pag, ano_pag, cvv_pag FROM pagamento";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_pag"] . "</td>";
            echo "<td>" . $row["dia_pag"] . "</td>";
            echo "<td>" . $row["numeroVen_pag"] . "</td>";
            echo "<td>" . $row["valor_pag"] . "</td>";
            echo "<td>" . $row["numeroCart_pag"] . "</td>";
            echo "<td>" . $row["titularCart_pag"] . "</td>";
            echo "<td>" . $row["mes_pag"] . "</td>";
            echo "<td>" . $row["ano_pag"] . "</td>";
            echo "<td>" . $row["cvv_pag"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 resultados";
    }

    // Fechar conexão com o banco de dados
    $conn->close();
    ?>
</table>

</body>
</html>
