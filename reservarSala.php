<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Aula</title>
    <link rel="stylesheet" type="text/css" href="styles.css">  <!-- Linkar o CSS -->

    <!--criar um style pra essa página e add o link de href aqui-->

    <script>
        function gerarCampos() {
            const numeroPessoas = document.getElementById('numeroPessoas').value;
            const camposIntegrantes = document.getElementById('camposIntegrantes');
            camposIntegrantes.innerHTML = '';  // Limpar os campos anteriores

            if (numeroPessoas >= 3 && numeroPessoas <= 6) {
                for (let i = 2; i <= numeroPessoas; i++) {  // Começa do 2 porque o primeiro é quem está reservando
                    // Criar o label
                    const label = document.createElement('label');
                    label.for = matricula_integrante_${ i };
                    label.textContent = `Matrícula do integrante ${i}: `;

                    // Criar o input
                    const input = document.createElement('input');
                    input.type = 'text';
                    input.id = matricula_integrante_${ i };
                    input.name = matricula_integrante_${ i };
                    input.placeholder = Digite a matrícula do integrante ${ i };
                    input.required = true;

                    // Adicionar label e input ao div
                    camposIntegrantes.appendChild(label);
                    camposIntegrantes.appendChild(input);
                    camposIntegrantes.appendChild(document.createElement('br'));
                }
            } else {
                alert('O número de pessoas deve ser entre 3 e 6.');
            }
        }
    </script>
</head>

<body>
    <?php
    include 'requireORinclude\cabecalho.php';
    ?>

    <h1>Reserva da Sala de Estudos</h1>
    <form action="bd/processar_reserva.php" method="POST">

        <!--a pessoa pode escolher a sala na qual ela queira reservar por uma hora-->
        <label for="selecionar_sala">Escolha uma sala:</label>
        <select id="numeroPessoas" name="numeroPessoas" onchange="gerarCampos()" required>
            <option value="">Selecione...</option>
            <option value="primeira_sala">Sala 01</option>
            <option value="Segunda sala":>Sala 02</option>
        </select><br><br>

        <label for="matriculaPrincipal">Matrícula do responsável pela reserva:</label><br>
        <input type="text" id="matriculaPrincipal" name="matriculaPrincipal" required><br><br>

        <!--utilizando java script a ideia aqui é que quando um determinado numero dentro do select for
        selecionado, ele ira multiplicar o input e label(ambos matrículas) que seria os integrantes.-->
        <label for="numeroPessoas">Número total de pessoas:</label>
        <select id="numeroPessoas" name="numeroPessoas" onchange="gerarCampos()" required>
            <option value="">Selecione</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select><br><br>

        <div id="camposIntegrantes">
            <!-- Campos das matrículas dos integrantes serão gerados aqui -->
        </div>

        <button type="submit">Reservar</button>
    </form>

</body>

</html>