<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="../layout/style_adm.css">
<?php
include '../layout/head_adm.php';
include '../adm/session_adm.php';
include '../bd/config.php';   

?>

<body>
    <?php
    include '../layout/cabecalho_adm.php';
    ?>
    <br><br>
    <?php
    include '../bd/conexao.php';

    // Função para listar todos os usuários
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Listagem de Usuários</h2>";
        echo "<table border='1'><tr>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Ações</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['matricula'] . "</td>";
            echo "<td>" . $row['nome_completo'] . "</td>";
            echo "<td>" . $row['CPF'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>
                <a href='../bd/editar_usuario.php?matricula=" . $row['matricula'] . "'>Editar</a> |
                <a href='excluir_usuario.php?matricula=" . $row['matricula'] . "' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>
              </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum usuário encontrado.";
    }

    $conn->close();
    ?>

    <?php
    include '../layout/footer.php';
    ?>
</body>

</html>
