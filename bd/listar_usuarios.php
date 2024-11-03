<!DOCTYPE html>
<html lang="en">
<?php
include '../layout/head.php';
?>
<body>
<?php
include '../layout/cabecalho_adm.php';
?>
<?php
include 'conexao.php';

// Função para listar todos os usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

    
if ($result->num_rows > 0) {
    echo "<h2>Lista de Usuários</h2>"; 
    echo "<table border='1'><tr><th>Matrícula</th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['nome_completo'] . "</td>";
        echo "<td>" . $row['CPF'] . "</td>";
        echo "<td>" . $row['endereco'] . "</td>";
        echo "<td>
                <a href='editar_usuario.php?matricula=" . $row['matricula'] . "'>Editar</a> |
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