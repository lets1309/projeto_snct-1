<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuário</title>

    <!--criar um style pra essa página e add o link de href aqui-->

    <script>
        // Função para carregar os dados do perfil do usuário
        function carregarPerfil() {
            fetch('perfil.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('nome').textContent = data.nome;
                    document.getElementById('email').textContent = data.email;
                    document.getElementById('telefone').textContent = data.telefone;
                    document.getElementById('endereco').textContent = data.endereco;
                })
                .catch(error => console.error('Erro ao carregar perfil:', error));
        }

        // Carregar os dados quando a página for carregada
        window.onload = carregarPerfil;
    </script>
</head>

<body>
    <?php
    include 'requireORinclude\cabecalho.php';
    ?>
    <h1>Perfil de Usuário</h1>
    <div>
        <strong>Nome:</strong> <span id="nome"></span><br>
        <strong>Email:</strong> <span id="email"></span><br>
        <strong>Telefone:</strong> <span id="telefone"></span><br>
        <strong>Endereço:</strong> <span id="endereco"></span><br>
    </div>
</body>

</html>