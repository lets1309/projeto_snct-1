<?php
session_start();
include 'config.php';

$email_adm = $_POST['email_adm'];
$senha_adm = $_POST['senha'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Busca o administrador pelo email
    $query = "SELECT * FROM adm WHERE email_adm = '$email_adm'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $adm = mysqli_fetch_assoc($result);

        // Compara a senha digitada com o hash armazenado
        if (password_verify($senha_adm, $adm['senha_adm'])) {
            $_SESSION['email_adm'] = $email_adm;
            header('Location: ../adm/dashboard.php');
        } else {
            echo "<script>alert('Login ou senha incorretos! Verifique os dados ou cadastre-se.'); window.location.href='../adm/index.php';</script>";
        }
    } else {
        echo "<script>alert('Login ou senha incorretos! Verifique os dados ou cadastre-se.'); window.location.href='../adm/index.php';</script>";
    }
}
?>
