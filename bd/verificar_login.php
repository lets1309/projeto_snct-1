<?php
session_start();
include 'conexao.php';

// Pega os dados do formulário de login
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

// Faz uma consulta para verificar se o login (matricula) e a senha estão cadastrados
$sql = "SELECT nome_completo FROM usuarios WHERE matricula = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $matricula, $senha); // Protege contra injeção de SQL
$stmt->execute();
$result = $stmt->get_result();

// Se a consulta retornar algum resultado, o login é válido
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['login'] = $matricula;          // Armazena a matrícula
    $_SESSION['matricula'] = $matricula;      // Armazena explicitamente a matrícula
    $_SESSION['nome_completo'] = $row['nome_completo']; // Armazena o nome completo do usuário
    
    // Redireciona para o menu principal
    header("Location: ../usuario/menuPrincipal.php");
    exit;
} else {
    // Exibe mensagem de erro e redireciona de volta para a página de login
    echo "<script>alert('Login ou senha incorretos! Verifique os dados ou cadastre-se.'); window.location.href='../index.php';</script>";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
