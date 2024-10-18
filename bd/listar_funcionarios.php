<?php
include 'conexao.php';


// Função para listar todos os funcionários (tabela adm)
$sql = "SELECT * FROM adm";
$result = $conn->query($sql);

include '../layout/cabecalho_adm.php';

if ($result->num_rows > 0) {
    echo "<h2>Lista de Funcionários</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th><th>CPF</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_adm'] . "</td>";
        echo "<td>" . $row['nome_adm'] . "</td>";
        echo "<td>" . $row['email_adm'] . "</td>";
        echo "<td>" . $row['CPF_adm'] . "</td>";
        echo "<td>
                <a href='editar_funcionario.php?id=" . $row['id_adm'] . "'>Editar</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum funcionário encontrado.";
}

$conn->close();
?>
