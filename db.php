<?php
$servername = "sql203.infinityfree.com";  // Endereço do servidor de banco de dados (pode ser o IP ou "localhost")
$username = "if0_37694547";         // Nome de usuário do banco de dados
$password = "62741530 ";             // Senha do banco de dados
$dbname = "site_noticias";  // Nome do banco de dados
$port = 3306;               // Porta do MySQL (substitua 3307 pela sua porta, caso seja diferente)

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
