<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuário</title>
</head>
<body>

<h2>Lista de Usuário</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Senha</th>
        <th>Telefone</th>
        <th>Data Nascimento</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Cpf</th>

    </tr>

    <?php
    // Incluir o arquivo de conexão
    include 'conexao.php';

    // Consulta para selecionar os dados da tabela usuarios
    $sql = "SELECT id_usu, nome_usu, sobrenome_usu, senha_usu, telefone_usu, data_nasc_usu, email_usu, endereco_usu, cpf_usu FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados em cada linha da tabela
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_usu"] . "</td>";
            echo "<td>" . $row["nome_usu"] . "</td>";
            echo "<td>" . $row["sobrenome_usu"] . "</td>";
            echo "<td>" . $row["senha_usu"] . "</td>";
            echo "<td>" . $row["telefone_usu"] . "</td>";
            echo "<td>" . $row["data_nasc_usu"] . "</td>";
            echo "<td>" . $row["email_usu"] . "</td>";
            echo "<td>" . $row["endereco_usu"] . "</td>";
            echo "<td>" . $row["cpf_usu"] . "</td>";
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
