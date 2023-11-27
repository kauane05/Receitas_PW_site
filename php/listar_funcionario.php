<!DOCTYPE html>
<html>
<head>
    <title>Lista de Funcionário</title>
</head>
<body>

<h2>Lista de Funcionário</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Setor</th>
        <th>Telefone</th>
        <th>Função</th>
        <th>Cpf</th>
        <th>Data Nascimento</th>

    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_fun, nome_fun, email_fun, endereco_fun, setor_fun, telefone_fun, funcao_fun, cpf_fun, data_nasc_fun FROM funcionario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_fun"] . "</td>";
            echo "<td>" . $row["nome_fun"] . "</td>";
            echo "<td>" . $row["email_fun"] . "</td>";
            echo "<td>" . $row["endereco_fun"] . "</td>";
            echo "<td>" . $row["setor_fun"] . "</td>";
            echo "<td>" . $row["telefone_fun"] . "</td>";
            echo "<td>" . $row["funcao_fun"] . "</td>";
            echo "<td>" . $row["cpf_fun"] . "</td>";
            echo "<td>" . $row["data_nasc_fun"] . "</td>";
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
