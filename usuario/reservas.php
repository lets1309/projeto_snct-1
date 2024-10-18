<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1, h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: center; }
    </style>
</head>

<body>
    <?php
    include '../layout/cabecalho.php';
    ?>
    <h1>Reservas</h1>

    <?php
        // Inclui o arquivo de configuração com a conexão ao banco de dados
        include '../bd/config.php';

        if (!$conn) {
            die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
        }
    ?>

    <h2>Em aberto:</h2>
    <table>
        <tr>
            <th>ID Reserva</th>
            <th>Matrícula</th>
            <th>Data de Início</th>
            <th>Data de Término</th>
            <th>Status</th>
        </tr>
        <?php
        // Consulta para exibir as reservas em aberto
        $query = "SELECT * FROM reserva WHERE status = 'Em aberto'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['ID_reserva']}</td>";
                echo "<td>{$row['matricula']}</td>";
                echo "<td>{$row['data_inicio']}</td>";
                echo "<td>{$row['data_termino']}</td>";
                echo "<td>{$row['status']}</td>";
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
            <th>Data de Início</th>
            <th>Data de Término</th>
            <th>Status</th>
        </tr>
        <?php
        // Consulta para exibir as reservas anteriores
        $query = "SELECT * FROM reserva WHERE status != 'Em aberto'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['ID_reserva']}</td>";
                echo "<td>{$row['matricula']}</td>";
                echo "<td>{$row['data_inicio']}</td>";
                echo "<td>{$row['data_termino']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhuma reserva anterior encontrada.</td></tr>";
        }
        ?>
    </table>
</body>

</html>
