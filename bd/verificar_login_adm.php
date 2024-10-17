<?php
session_start();
include'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_adm = $_POST['email_adm'];
    $senha_adm = $_POST['senha_adm'];

    $query = "SELECT * FROM adm WHERE email_adm='$email_adm' AND senha_adm='$senha_adm'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email_adm'] = $email_adm;
        header('Location: dashboard.php');
    } else {
        echo "Login inválido!";
    }
}
?>
