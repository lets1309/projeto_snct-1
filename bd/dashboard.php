<?php
session_start();

include('config.php');

// Função para aceitar ou recusar uma reserva
if (isset($_POST['acao'])) {
    $id_reserva = $_POST['id_reserva'];
    $status = $_POST['acao'] == 'aceitar' ? 'Aprovada' : 'Recusada';
    
    $query = "UPDATE reserva SET status='$status' WHERE ID_reserva='$id_reserva'";
    mysqli_query($conn, $query);
    header("Location: dashboard.php");
}
?>
<?php
include '../layout/cabecalho_adm.php';
?>
<h1>Bem-vindo ao Dashboard</h1>

<h2>Gerenciar Reservas</h2>
<table border="1">
    <tr>
        <th>ID Reserva</th>
        <th>Matrícula</th>
        <th>Data Início</th>
        <th>Data Término</th>
        <th>Status</th>
        <th>Número da Sala</th>
        <th>Ação</th>
    </tr>
    <?php
    $query = "SELECT * FROM reserva";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['ID_reserva']}</td>";
        echo "<td>{$row['matricula']}</td>";
        echo "<td>{$row['data_inicio']}</td>";
        echo "<td>{$row['data_termino']}</td>";
        echo "<td>{$row['status']}</td>";
        echo "<td>{$row['numero_sala']}</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='id_reserva' value='{$row['ID_reserva']}'>
                    <button type='submit' name='acao' value='aceitar'>Aceitar</button>
                    <button type='submit' name='acao' value='recusar'>Recusar</button>
                </form>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Editar Informações do Administrador</h2>
<form method="post" action="editar_adm.php">
    Nome: <input type="text" name="nome_adm" value=""><br>
    Email: <input type="email" name="email_adm" value=""><br>
    Senha: <input type="password" name="senha_adm"><br>
    <button type="submit">Salvar Alterações</button>
</form>
