<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Aula</title>
    <link rel="stylesheet" type="text/css" href="../layout/styles.css">
    <script>
        // Função para gerar campos de matrícula dos integrantes
        function gerarCampos() {
            const numeroPessoas = document.getElementById('numeroPessoas').value; // Pega o número de pessoas selecionado
            const camposIntegrantes = document.getElementById('camposIntegrantes'); // Seleciona o div onde os campos serão gerados
            camposIntegrantes.innerHTML = ''; // Limpa os campos anteriores

            // Verifica se o número de pessoas está entre 3 e 6
            if (numeroPessoas >= 3 && numeroPessoas <= 6) {
                // Gera os campos para os integrantes
                for (let i = 2; i <= numeroPessoas; i++) { 
                    const label = document.createElement('label');
                    label.textContent = `Matrícula do integrante ${i}: `;

                    const input = document.createElement('input'); 
                    input.type = 'text';
                    input.name = `matricula_integrante_${i}`; 
                    input.placeholder = `Digite a matrícula do integrante ${i}`; 
                    input.required = true; 

                    
                    camposIntegrantes.appendChild(label);
                    camposIntegrantes.appendChild(input);
                    camposIntegrantes.appendChild(document.createElement('br')); // Adiciona uma quebra de linha
                }
            } else {
                alert('O número de pessoas deve ser entre 3 e 6.'); // Alerta se o número de pessoas não for válido
            }
        }
    </script>
</head>

<body>
    <?php
    include '../layout/cabecalho.php';
    ?>
    <h1>Reserva da Sala de Estudos</h1> <!-- Título da página -->
    <form action="../bd/processar_reserva.php" method="POST"> <!-- Início do formulário -->
        <label for="selecionar_sala">Escolha uma sala:</label>
        <select id="selecionar_sala" name="selecionar_sala" required> <!-- Seleção da sala -->
            <option value="">Selecione...</option> <!-- Opção padrão -->
            <option value="1">Sala 01</option>
            <option value="2">Sala 02</option>
        </select><br><br>

        <label for="matricula">Matrícula do responsável:</label>
        <input type="text" name="matricula" required><br><br>
        <!-- Input para a matrícula do responsável -->

        <label for="participantes">Número total de pessoas:</label>
        <select id="numeroPessoas" name="numeroPessoas" onchange="gerarCampos()" required>
            <!-- Seleção do número de pessoas -->
            <option value="">Selecione</option> <!-- Opção padrão -->
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select><br><br>

        <div id="camposIntegrantes">
            <!-- Campos para matrículas dos integrantes serão gerados aqui -->
        </div>

        <button type="submit">Reservar</button> 
    </form>
</body>

</html>