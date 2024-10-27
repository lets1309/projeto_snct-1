<footer>
    <div class="container-footer">
        <p>&copy; <?php echo date("Y"); ?> Study Space. Todos os direitos reservados.</p>
        <ul class="social-media">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>
</footer>

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Garante que o body ocupe a altura total da tela */
        margin: 0; /* Remove margens padrão */
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        width: 100%;
        position: relative; /* Permite que o footer se posicione em relação ao body */
        margin-top: auto; /* Move o footer para a parte inferior */
    }

    .container-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center; /* Centraliza o conteúdo verticalmente */
    }

    .social-media {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .social-media li {
        margin: 0 10px;
    }

    .social-media a {
        color: #fff;
        text-decoration: none;
    }

    .social-media a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .social-media {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
