<?php
    // Conexão com o banco de dados
    include 'conexao.php';
    
    if (!isset($conexao)) {
        die("Erro: Conexão com o banco de dados não estabelecida.");
    }
    $matriculaPrincipal = $_POST['matriculaPrincipal'];
    $numero_sala = $_POST['selecionar_sala'];
    $data_inicio = '2024-10-15'; // Use um valor dinâmico, como $_POST['data_inicio'], se necessário
    $data_termino = '2024-10-15'; // Mesmo para a data de término
    $status = 'ativo';


    $sql = "INSERT INTO reserva (matricula, numero_sala, data_inicio, data_termino, status) 
            VALUES ('$matriculaPrincipal', '$numero_sala', '$data_inicio', '$data_termino', '$status')";

    // Executar a consulta e verificar o resultado
    if (mysqli_query($conexao, $sql)) {
        echo "Reserva efetuada com sucesso!";
    } else {
        echo "Erro ao efetuar reserva: " . mysqli_error($conexao);
    }

    // Fechar a conexão
    mysqli_close($conexao);
?>
