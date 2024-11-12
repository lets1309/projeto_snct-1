<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="../layout/style_adm.css">
<?php
include '../layout/head_adm.php';
include '../adm/session_adm.php'; 
include '../bd/config.php';   

if (isset($nome_adm)) {
    // Prepara a consulta para obter informações do administrador logado
    $stmt = $conn->prepare("SELECT * FROM adm WHERE nome_adm = ?");
    $stmt->bind_param("s", $nome_adm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome_adm = $row['nome_adm'];
    } else {
        echo "Erro: Dados do usuário não encontrados.";
        exit;
    }
} else {
    echo "Erro: Usuário não autenticado.";
    exit;
}
?>

<body>
    <?php
    include '../layout/cabecalho_adm.php';
    ?>
    <br><br>
    <?php

    // Função para listar todos os funcionários (tabela adm)
    $sql = "SELECT * FROM adm";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Listagem de Funcionários</h2>";
        echo "<table border='1'><tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_adm'] . "</td>";
            echo "<td>" . $row['nome_adm'] . "</td>";
            echo "<td>" . $row['email_adm'] . "</td>";
            echo "<td>" . $row['CPF_adm'] . "</td>";
            echo "</tr>";
        }   
        echo "</table>";
    } else {
        echo "Nenhum funcionário encontrado.";
    }

    $conn->close();
    ?>
    <?php include '../layout/footer.php'; ?>
</body>
</html>