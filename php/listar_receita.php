<!DOCTYPE html>
<html>
<head>
    <title>Lista de Receita</title>
</head>
<body>

<h2>Lista de Receita</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ingrediente</th>
        <th>Tipo</th>
        <th>Modo de Preparo</th>
        <th>Tempo de Preparo</th>
        <th>Chef da Receita</th>
        <th>Data Publicação</th>
        <th>Qtd. Pessoas Servidas</th>
    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_rec, nome_rec, ingrediente_rec, tipo_rec, modo_preparo_rec, tempo_preparo_rec, nome_chef_rec, data_publi_rec, quant_pess_serve_rec FROM receita";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_rec"] . "</td>";
            echo "<td>" . $row["nome_rec"] . "</td>";
            echo "<td>" . $row["ingrediente_rec"] . "</td>";
            echo "<td>" . $row["tipo_rec"] . "</td>";
            echo "<td>" . $row["modo_preparo_rec"] . "</td>";
            echo "<td>" . $row["tempo_preparo_rec"] . "</td>";
            echo "<td>" . $row["nome_chef_rec"] . "</td>";
            echo "<td>" . $row["data_publi_rec"] . "</td>";
            echo "<td>" . $row["quant_pess_serve_rec"] . "</td>";
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
