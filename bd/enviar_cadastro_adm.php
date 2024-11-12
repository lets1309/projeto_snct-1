<?php
session_start();
include 'config.php';

// Pega os dados do cadastro
$email_adm = $_POST['email_adm'] ?? '';
$senha_adm = $_POST['senha_adm'] ?? '';
$nome_adm = $_POST['nome_adm'] ?? ''; // Nome do administrador
$foto_perfil_adm = $_FILES['foto_perfil_adm'] ?? null; // Foto de perfil

// Verifica se o email já está cadastrado
$sql = "SELECT email_adm FROM adm WHERE email_adm = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email_adm);
$stmt->execute();
$result = $stmt->get_result();

// Se o email já estiver cadastrado
if ($result->num_rows > 0) {
    echo "<script>alert('E-mail já cadastrado!'); window.location.href='../adm/index.php';</script>";
} else {
    // Criptografa a senha antes de salvar no banco
    $senha_adm_hash = password_hash($senha_adm, PASSWORD_DEFAULT);
    
    // Verifica se uma foto foi enviada e valida o tipo e tamanho da imagem
    $foto_nome = '';
    if ($foto_perfil_adm && $foto_perfil_adm['error'] == 0) {
        $foto_nome = time() . '_' . $foto_perfil_adm['name']; // Gera um nome único para a imagem
        $foto_destino = '../uploads/' . $foto_nome; // Caminho para salvar a imagem

        // Verifica se a imagem é válida (extensões permitidas)
        $extensoes_validas = ['jpg', 'jpeg', 'png', 'gif'];
        $extensao = pathinfo($foto_nome, PATHINFO_EXTENSION);
        if (!in_array(strtolower($extensao), $extensoes_validas)) {
            echo "<script>alert('Formato de imagem inválido! Apenas JPG, PNG e GIF são permitidos.'); window.location.href='../adm/index.php';</script>";
            exit;
        }

        // Move a imagem para o diretório de uploads
        if (!move_uploaded_file($foto_perfil_adm['tmp_name'], $foto_destino)) {
            echo "<script>alert('Erro ao enviar a imagem. Tente novamente.'); window.location.href='../adm/index.php';</script>";
            exit;
        }
    }

    // Insere o novo administrador com a foto de perfil (se houver)
    $sql_insert = "INSERT INTO adm (email_adm, senha_adm, nome_adm, foto_perfil_adm) VALUES (?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("ssss", $email_adm, $senha_adm_hash, $nome_adm, $foto_nome);

    if ($stmt_insert->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='../adm/index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar! Tente novamente.'); window.location.href='../adm/index.php';</script>";
    }

    $stmt_insert->close();
}

$stmt->close();
$conn->close();
?>