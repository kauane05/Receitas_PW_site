<!DOCTYPE html>
<html>
<head>
    <title>Lista de Assinatura</title>
</head>
<body>

<h2>Lista de Assinatura</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
        <th>Email</th>
    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_ass, nome_ass, senha_ass, email_ass FROM assinatura";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_ass"] . "</td>";
            echo "<td>" . $row["nome_ass"] . "</td>";
            echo "<td>" . $row["senha_ass"] . "</td>";
            echo "<td>" . $row["email_ass"] . "</td>";
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
