<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bd_site";

// Criar conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>