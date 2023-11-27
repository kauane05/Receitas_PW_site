<!DOCTYPE html>
<html>
<head>
    <title>Lista de Venda</title>
</head>
<body>

<h2>Lista de Venda</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Funcionário</th>
        <th>Número</th>
        <th>Valor</th>
        <th>Tipo</th>
        <th>Data</th>
        <th>Endereço</th>
        <th>Data de Entrega</th>

    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_ven, nomeCli_ven, nomeFun_ven, numero_ven, valor_ven, tipo_ven, data_ven, endereco_ven, dataEnt_ven FROM venda";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_ven"] . "</td>";
            echo "<td>" . $row["nomeCli_ven"] . "</td>";
            echo "<td>" . $row["nomeFun_ven"] . "</td>";
            echo "<td>" . $row["numero_ven"] . "</td>";
            echo "<td>" . $row["valor_ven"] . "</td>";
            echo "<td>" . $row["tipo_ven"] . "</td>";
            echo "<td>" . $row["data_ven"] . "</td>";
            echo "<td>" . $row["endereco_ven"] . "</td>";
            echo "<td>" . $row["dataEnt_ven"] . "</td>";
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
