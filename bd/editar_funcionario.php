<?php
include 'conexao.php';
if (isset($_GET['id'])) {
    $id_adm = $_GET['id'];

    // Seleciona os dados do funcionário com o ID fornecido
    $sql = "SELECT * FROM adm WHERE id_adm = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_adm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome_adm = $row['nome_adm'];
        $email_adm = $row['email_adm'];
        $CPF_adm = $row['CPF_adm'];
    } else {
        echo "Funcionário não encontrado.";
        exit;
    }
} else {
    echo "ID de funcionário não fornecido.";
    exit;
}

// Atualiza os dados se o formulário for enviado
if (isset($_POST['atualizar'])) {
    $novo_nome = $_POST['nome_adm'];
    $novo_email = $_POST['email_adm'];
    $novo_CPF = $_POST['CPF_adm'];

    $sql_update = "UPDATE adm SET nome_adm = ?, email_adm = ?, CPF_adm = ? WHERE id_adm = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("sssi", $novo_nome, $novo_email, $novo_CPF, $id_adm);

    if ($stmt_update->execute()) {
        echo "<script>alert('Dados atualizados com sucesso!');</script>";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php
include '../layout/head.php';
include '../adm/session_adm.php';

?>
<link rel="stylesheet" href="../layout/style_global.css">

<body>
    <?php include '../layout/cabecalho_adm.php'; ?>
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome_adm" value="<?php echo htmlspecialchars($nome_adm); ?>"><br>
        <label>Email:</label><br>
        <input type="text" name="email_adm" value="<?php echo htmlspecialchars($email_adm); ?>"><br>
        <label>CPF:</label><br>
        <input type="text" name="CPF_adm" value="<?php echo htmlspecialchars($CPF_adm); ?>"><br><br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>
