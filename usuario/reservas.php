<!DOCTYPE html>
<html lang="pt-BR">
<?php
    include '../layout/head.php';
?>

<body>
<?php include '../layout/cabecalho.php'; ?>
<br><br>
    <div class="container-principal">
        <h1 class="titulo">Reservas</h1>

        <?php
            // Inclui o arquivo de configuração com a conexão ao banco de dados
            include '../bd/config.php';

            if (!$conn) {
                die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
            }
        ?>

        <h2>Pendentes:</h2>
        <table>
            <tr>
                <th>ID Reserva</th>
                <th>Matrícula</th>
                <th>Data de Reserva</th>
                <th>Horário de Início</th>

            </tr>
            <?php
            // Consulta para exibir as reservas em aberto
            $query = "SELECT * FROM reserva WHERE status = ''";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['ID_reserva']}</td>";
                    echo "<td>{$row['matricula']}</td>";
                    echo "<td>{$row['data_reserva']}</td>";
                    echo "<td>{$row['horario_inicio']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhuma reserva em aberto.</td></tr>";
            }
            ?>
        </table>

        <h2>Anteriores:</h2>
        <table>
            <tr>
                <th>ID Reserva</th>
                <th>Matrícula</th>
                <th>Data de Reserva</th>
                <th>Horário de Início</th>
                <th>Status</th>
            </tr>
            <?php
            // Consulta para exibir as reservas anteriores (Aprovada ou Recusada)
            $query = "SELECT * FROM reserva WHERE status IN ('Aprovada', 'Recusada')";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['ID_reserva']}</td>";
                    echo "<td>{$row['matricula']}</td>";
                    echo "<td>{$row['data_reserva']}</td>";
                    echo "<td>{$row['horario_inicio']}</td>";
                    echo "<td>{$row['status']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhuma reserva anterior encontrada.</td></tr>";
            }
            ?>
        </table>
    </div>
    <?php include '../layout/footer.php' ?>
</body>
</html>
