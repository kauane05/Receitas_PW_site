<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produto</title>
</head>
<body>

<h2>Lista de Produto</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Código de Barras</th>
        <th>Data Validade</th>
        <th>Data Fabricação</th>
        <th>Quantidade</th>
        <th>Valor</th>
        <th>Descrição</th>

    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_pro, nome_pro, codigo_barras_pro, data_vali_pro, data_fab_pro, quant_pro, valor_pro, descricao_pro FROM produto";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_pro"] . "</td>";
            echo "<td>" . $row["nome_pro"] . "</td>";
            echo "<td>" . $row["codigo_barras_pro"] . "</td>";
            echo "<td>" . $row["data_vali_pro"] . "</td>";
            echo "<td>" . $row["data_fab_pro"] . "</td>";
            echo "<td>" . $row["quant_pro"] . "</td>";
            echo "<td>" . $row["valor_pro"] . "</td>";
            echo "<td>" . $row["descricao_pro"] . "</td>";
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
