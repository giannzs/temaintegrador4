<?php
// Incluindo a conexão com o banco de dados
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografando a senha
    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se o email já existe no banco de dados
    $sql = "SELECT id FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Se o email já estiver em uso
        echo "O email já está cadastrado!";
    } else {
        // Insere o novo usuário no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha_criptografada);

        if ($stmt->execute()) {
            // Sucesso no cadastro
            echo "Usuário cadastrado com sucesso!";
            // Aqui você pode enviar o e-mail de confirmação, se desejar.
        } else {
            // Erro ao cadastrar
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
}
?>
