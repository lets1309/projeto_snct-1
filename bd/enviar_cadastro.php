<?php
    //coneta ao bd
    $conn = new mysqli("localhost", "root", "", "projeto_snct");

    //verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    //receba fi
    $matricula = $_POST['matricula'];
    $nome_completo = $_POST['nome_completo'];
    $CPF = $_POST['CPF'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];

    //inserir no bd
    $sql = "INSERT INTO usuarios (matricula, nome_completo, CPF, endereco, bairro, numero, senha) 
            VALUES ('$matricula', '$nome_completo', '$CPF', '$endereco', '$bairro', '$numero', '$senha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../login.php");//leva pro login
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
?>
