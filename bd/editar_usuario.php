<?php
include 'conexao.php';

if (isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];

    // Seleciona os dados do usuário com a matrícula fornecida
    $sql = "SELECT * FROM usuarios WHERE matricula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $matricula);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome_completo = $row['nome_completo'];
        $CPF = $row['CPF'];
        $endereco = $row['endereco'];

        // Atualiza os dados se o formulário for enviado
        if (isset($_POST['atualizar'])) {
            $novo_nome = $_POST['nome_completo'];
            $novo_CPF = $_POST['CPF'];
            $novo_endereco = $_POST['endereco'];

            $sql_update = "UPDATE usuarios SET nome_completo = ?, CPF = ?, endereco = ? WHERE matricula = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("ssss", $novo_nome, $novo_CPF, $novo_endereco, $matricula);

            if ($stmt_update->execute()) {
                echo "<script>alert('Dados atualizados com sucesso!');</script>";
            } else {
                echo "Erro ao atualizar: " . $conn->error;
            }
        }
    } else {
        echo "Usuário não encontrado.";
    }
} else {
    echo "Matrícula não fornecida.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="../layout/style_global.css">

<?php
include '../layout/head.php';
include '../adm/session_adm.php';
?>

<body>
    <?php
    include '../layout/cabecalho_adm.php';
    ?>
    <form method="POST">
        <label>Nome Completo:</label><br>
        <input type="text" name="nome_completo" value="<?php echo isset($nome_completo) ? $nome_completo : ''; ?>"><br>
        <label>CPF:</label><br>
        <input type="text" name="CPF" value="<?php echo isset($CPF) ? $CPF : ''; ?>"><br>
        <label>Endereço:</label><br>
        <input type="text" name="endereco" value="<?php echo isset($endereco) ? $endereco : ''; ?>"><br><br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>

</html>
