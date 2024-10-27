<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #32CD32;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul">
                <li class="nav-item me-3">
                    <a class="nav-link" href="../usuario/menuPrincipal.php">Início</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="../usuario/reservarSala.php">Solicitar Reserva</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="../usuario/reservas.php">Reservas</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="../usuario/configuracoes_do_usuario.php">Configurações</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="../usuario/logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        #navbarNav {
            display: flex;
            justify-content: flex-end;
            border-radius: 20px;
        }

        .nav-ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .nav-ul li {
            margin-right: 20px;
        }

        .nav-ul li a {
            color: white;
            text-decoration: none;
            padding: 14px;
            transition: background-color 0.3s ease;
            border-radius: 20px;
        }

        .nav-ul li a:hover {
            background-color: #228B22;
            color: white;
        }

        @media (max-width: 768px) {
            #navbarNav {
                flex-direction: column;
                /* Muda para coluna em telas menores */
            }

            .nav-ul li {
                margin-right: 0;
                /* Remove a margem à direita */
                margin-bottom: 10px;
                /* Adiciona espaçamento inferior */
            }
        }
    </style>
</nav>